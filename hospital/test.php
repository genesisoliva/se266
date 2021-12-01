<?php
//include php scripts
include_once 'helpers/Connection.php';
include_once 'helpers/directories.php';
//processing of the form & validation

/**
* @param $required_fields_array, containing all the required fields 
* @return array, containing all errors
*/
function check_empty_fields($required_fields_array){
	//array to strore any error msg from the form
	$form_errors = array();
	
	//loop through required fields array
	foreach($required_fields_array as $name_of_field){
		if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
			$form_errors[] = $name_of_field ." is a required field";
		}
	}
	return $form_errors;
}

/**
* @param $fields_to_check_length, containing name of fields. e.g. array('username' => 5)
* @return array, containing all errors
*/
function check_min_lenght($fields_to_check_length){
	//array to strore error msg
	$form_errors = array();
	
	//loop through required fields array
	foreach($fields_to_check_length as $name_of_field => $min_length_required){
		if(strlen(trim($_POST[$name_of_field])) < $min_length_required){
			$form_errors[] = $name_of_field ." is too short, must be at least {$min_length_required} characters long";
		}
	}
	return $form_errors;
}

/**
* @param $data, key/value pair | key=form control & value=input entered
* @return array, containing email errors
*/
function check_mail($data){
	//initialize array
	$form_errors = array();
	$key = 'email';
	
	//check email exists in data array
	if(array_key_exists($key, $data)){
		//check field has a value
		if($_POST[$key] != NULL) {
			//remove all illegal characters
			$key = filter_var($key,  FILTER_SANITIZE_EMAIL);
			
			//check if input is valid email address
			if(filter_var($_POST[$key], FILTER_VALIDATE_EMAIL) === false){
				$form_errors[] = $key ." is not a valid email address";
			}
		}
	}
	return $form_errors;
}

/**
* @param $form_errors_array, errors we want to loop through
* @return string, list that contains all error msg
*/
function show_errors($form_errors_array){
	$errors = "<p><ul style='color: red;'>";
	
	//loop through error array and display items in a list
	foreach($form_errors_array as $the_error){
		$errors .= "<li> {$the_error} </li>";
	}
	$errors .= "</ul></p>";
	return $errors;
}


/**
* @param $message, Information message we wanna print on screen
* param $passOrFail, success or failure message
* @return string, contains message
*/
function flashMessage($message, $passOrFail = "Fail"){
	if($passOrFail === "Pass"){
		$data = "<div class='alert alert-success'> {$message} ";
	}
	else {
		$data = "<div class='alert alert-danger'> {$message} ";
	}
	return $data;
}	

/**
* Redirect to another page
*/
function redirectTo($page){
	header("Location: {$page}.php");
}

/**
* Check for duplicate username
*/
function checkDuplicateEntries($table, $column, $value, $db){
	try{
		$sqlQuery = 'SELECT * FROM ' .$table. ' WHERE ' .$column. '=:column';
		$stm = $db->prepare($sqlQuery);
		$stm->execute(array('column' => $value));
		
		if($row = $stm->fetch()){
			return true;
		}
		return false;
	} catch(PDOException $ex){
		//handle exception
	}
}

/**
* @param $user_id
*/
function rememberMe($user_id) {
	$encryptCookieData = base64_encode('UaQteh514y3dtstemYODEC{$user_id}');
	//Cookie set to expire in about 15 days
	setcookie('rememberUserCookie', $encryptCookieData, time()+60*60*24*15, '/');
}

/**
* check used cookie is same as encrypted
* @param $bd
*/
function isCookieValid($db) {
	$isValid = false;
	if(isset($_COOKIE['rememberUserCookie'])) {
		
		/* decode cookie - extract user ID */
		$decryptCookieData = base64_decode($_COOKIE['rememberUserCookie']);
		$user_id = explode('UaQteh514y3dtstemYODEC', $decryptCookieData);
		$userID = $user_id[1]; //ID is at position 1 of array
		
		/* check ID from cookie exists in database */
		$sqlQuery = 'SELECT * FROM users WHERE id=:id';
		$stm = $db->prepare($sqlQuery);
		$stm->execute(array(':id'=> $userID));
		
		if($row = $stm->fetch()) {
			$id = $row['id'];
			$username = $row['username'];
			
			//create user session
			$_SESSION['id'] = $id;
			$_SESSION["username"] = $username;
			$isValid = true;
		}
		else {
			//cookie ID invalid - destroy session
			$isValid = false;
			signout();
		}
	}
	return $isValid;
}

function signout() {
	unset($_SESSION['username']);
	unset($_SESSION['id']);
	
	if(isset($_COOKIE['rememberUserCookie'])) {
		unset($_COOKIE['rememberUserCookie']);
		setcookie('rememberUserCookie', null, -1, '/');
	}
	session_destroy();
	session_regenerate_id(true);
	redirectTo('index');
}


function guard() {
	$isValid = true;
	$inactive = 60*5; //5 mins
	$fingerprint = md5($_SERVER['REMOTE_ADDR'] .$_SERVER['HTTP_USER_AGENT']);
	
	if((isset($_SESSION['fingerprint']) && $_SESSION['fingerprint'] != $fingerprint)) {
		$isValid = false;
		signout();
	}
	else if ((isset($_SESSION['last_active']) && (time()-$_SESSION['last_active']) > $inactive) && $_SESSION['username']) {
		$isValid = false;
		signout();
	}
	else {
		$_SESSION['last_active'] = time();
	}
	return $isValid;
}


if(isset($_POST['loginBtn'])){
	//array to hold errors
	$form_errors = array();
	
	//validate
	$required_fields = array('username', 'password');
	//call function to check empty fields & merge return data into $form_errors
	$form_errors = array_merge($form_errors, check_empty_fields($required_fields));
	
	//check if the error array is empty
	if(empty($form_errors)){
		//collect form data into variable
		$uname=$_POST['username'];
		$pass=$_POST['password'];
		
		isset($_POST['remember']) ? $remember = $_POST['remember'] : $remember = "";
		
		//check user exist in the database
		$query = "SELECT * FROM users WHERE username = :uname";
		$stmt = Connection::conn()->prepare($query);
		$stmt->execute(array(':uname' => $uname));
		
		while($row = $stmt->fetch())
        {
			$id = $row['id'];
			$hashed_pass = $row['password'];
			$username = $row['username'];
			
			if(password_verify($pass, $hashed_pass))
            {
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				
				//extra security
				$fingerprint = md5($_SERVER['REMOTE_ADDR'] .$_SERVER['HTTP_USER_AGENT']);
				$_SESSION['last_active'] = time();
				$_SESSION['fingerprint'] = $fingerprint;
				
				
				//set cookie
				if($remember === 'yes') 
                {
					rememberMe($id);
				}
				//call sweet alert
				echo $welcome="<script type=\"text/javascript\">
							swal({
							  title: \"Welcome back $username!\",
							  text: \"You are being logged in...\",
							  type: 'success',
							  timer: 3000,
							  showConfirmButton: false
							});
							setTimeout(function(){
								window.location.href = 'index.php';
							}, 2000);
						  </script>";
				redirectTo('dashboard');
			}
			else {
				$result = flashMessage('Invalid username or password');
			}
		}
	}
	else {
		if(count($form_errors)==1){
			$result = flashMessage('There was 1 error in the form');
		}
		else {
			$result = flashMessage("There were " .count($form_errors) ." errors in the form <br>");
		}
	}
}
?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title><?php if(isset($page_title))  echo $page_title; ?></title>
		
		<!-- Bootstrap -->
        <link href="<?php echo $css; ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $css; ?>custom.css" rel="stylesheet">

		<!-- SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	</head>

<div class='container'>
	  <section class='col col-lg-7'>
		<h2>Login</h2><hr>
		
		<div>
			<?php if(isset($result)) echo $result; ?>
			<?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
		</div>
		<div class='clearfix'></div>
		
		<form method='post' action=''>
		  <div class="form-group">
			<label for="usernameField">Username</label>
			<input type="text" class="form-control" id="usernameField" placeholder="Username" name='username'>
		  </div>
		  <div class="form-group">
			<label for="passwordField">Password</label>
			<input type="password" class="form-control" id="passwordField" placeholder="Password" name='password'>
		  </div>
		  <div class="checkbox">
			<label>
			  <input type="checkbox" name='remember' value='yes'> Remember Me
			</label>
		  </div>
		  <a href='forgot_pass.php'>Forgot Password?</a>
		  <button type="submit" class="btn btn-default pull-right" name='loginBtn'>Sign In</button>
		</form>		
	  </section>
	</div>