<?php
    ob_start();
    require_once 'config.php';
?>
<?php
//processing of the form & validation

if(isset($_POST['resetBtn']))
{
	$form_errors = array(); //initialize array
	
	//field validation
	$required_fields = array('username', 'new_password', 'confirm_password');
	//call function to check empty fields & merge return data into $form_errors
	$form_errors = array_merge($form_errors, check_empty_fields($required_fields));
	
	//check for minimum length
	$fields_to_check_length = array('new_password' => 5, 'confirm_password' => 5);
	//call function to check min lenght
	$form_errors = array_merge($form_errors, check_min_lenght($fields_to_check_length));
	
	//email validation
	$form_errors = array_merge($form_errors, check_mail($_POST));
	
	
	//check error array is empty
	if(empty($form_errors)){
		//collect form data into variable
		$email=$_POST['username'];
		$pass1=$_POST['new_password'];
		$pass2=$_POST['confirm_password'];
		
		//Check if new_password and confirm_password are the same
		if($pass1 != $pass2)
		{
			$result = flashMessage('New password and Confirm Password do not match');
		}

		else {
			try {
				//verify input email exists in the database
                $sqlQuery = "SELECT username FROM users WHERE username = :username";
                $conn = Connection::conn();
				//PDO prepared statement: sanitize data		
				$stm = $conn->prepare($sqlQuery);
				$stm->execute(array(':username' => $email)); //execute prepared query
				
				//check recor exists
				if($stm->rowCount()==1){
					//hashing password
					$hash_pass = password_hash($pass1, PASSWORD_DEFAULT);
					
					//update password
                    $sqlUpdate = "UPDATE users SET password=:pass WHERE username=:username";
                    $conn = Connection::conn();
					$stm = $conn->prepare($sqlUpdate);
					$stm->execute(array(':pass' => $hash_pass, ':username' => $email)); //execute prepared query
					
					//call sweet alert - print msg
					echo $result="<script type=\"text/javascript\">
							swal({
							  title: \"Updated!\",
							  text: \"Password reset successfully\",
							  type: 'success',
							  confirmButtonText: \"Thank You!\"
                            });
                            setTimeout(function(){
								window.location.href = 'login.php';
							}, 2000);
						  </script>";
				}
				else {
					echo $result="<script type=\"text/javascript\">
							swal({
							  title: \"Failed!\",
							  text: \"Username does not exist in the database\",
							  type: 'error',
							  confirmButtonText: \"!\"
							});
						  </script>";
				}
			} catch(PDOException $ex){
				$result = flashMessage("An error occured: " .$ex->getMessage());
			}
		}
	}
	else {
		if(count($form_errors)==1){
			$result = flashMessage('There was 1 error in the form');
		}
		else {
			$result = flashMessage("<p style='text-align: left !important;'>There were " .count($form_errors) ." errors in the form</p>");
		}
	}
}		

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo language("admin_reset", $_SESSION['lang']); ?>">
    <meta name="author" content="Genesis J Oliva">
    <link rel="shortcut icon" href="<?php echo $ico; ?>settings.png">

    <title><?php echo language("admin_reset", $_SESSION['lang']); ?></title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo $css; ?>bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo $css; ?>bootstrap-theme.min.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo $css; ?>elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo $css; ?>style.css" rel="stylesheet">
    <link href="<?php echo $css; ?>style-responsive.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>custom.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>sweetalert.css" rel="stylesheet" />
    <script src="<?php echo $js; ?>sweetalert.min.js"></script>
</head>
<body>
    <div class='container'>
    <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">        
        <div class="login-wrap">

        <div>
			<?php if(isset($result)) echo $result; ?>
			<?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
            <div class='clearfix'></div>
	    </div>

            <!--Logo-->
            <p class="login-img"><i class="icon_lock_alt"></i></p>

            <!--Username-->
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name='username' placeholder="<?php echo language("reset-username", $_SESSION['lang']); ?>">
            </div>

            <!--Password-->
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="passwordField2" type="password" class="form-control" name='confirm_password' placeholder="<?php echo language("reset-password", $_SESSION['lang']); ?>">
            </div>

			<div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="passwordField2" type="password" class="form-control" name='new_password' placeholder="<?php echo language("reset-password1", $_SESSION['lang']); ?>">
            </div>

            <!--Login Button-->
            <button class="btn btn-primary btn-lg btn-block" type="submit" name='resetBtn'><?php echo language("reset", $_SESSION['lang']); ?></button>

			<div class="text-left">
        		<div class="credits">
            		<a href="login.php">Back</a>
        		</div>
    		</div>
    </form>
    </div>
</body>

