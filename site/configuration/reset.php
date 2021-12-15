<?php
function check_empty_fields($required_fields_array){
	//array to strore any error msg from the form
	$form_errors = array();
	
	//loop through required fields array
	foreach($required_fields_array as $name_of_field)
	{
		if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL)
		{
			$form_errors[] = "- ". $name_of_field ." is a required field";
		}
	}
	return $form_errors;
}

function check_min_lenght($fields_to_check_length)
{
	//array to strore error msg
	$form_errors = array();
	
	//loop through required fields array
	foreach($fields_to_check_length as $name_of_field => $min_length_required){
		if(strlen(trim($_POST[$name_of_field])) < $min_length_required){
			$form_errors[] = "- ". $name_of_field ." is too short, must be at least {$min_length_required} characters long";
		}
	}
	return $form_errors;
}

function check_mail($data)
{
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

function show_errors($form_errors_array)
{
	$errors = "<ul style='
    padding: 0;'>";
	
	//loop through error array and display items in a list
	foreach($form_errors_array as $the_error){
		$errors .= "<li> {$the_error} </li>";
	}
	$errors .= "</ul>";
	return $errors;
}

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

?>
<?php