<?php
//include php scripts
include_once 'helpers/Connection.php';
include_once 'helpers/directories.php';
//processing of the form & validation
?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
		<form method='post' action='process.php'>
			<label for="usernameField">Username</label>
			<input type="text" class="form-control" id="usernameField" placeholder="Username" name='un-text'>
			<label for="passwordField">Password</label>
			<input type="password" class="form-control" id="passwordField" placeholder="Password" name='pw-text'>
		  <!--<button type="submit" class="btn btn-default pull-right" name='loginBtn'>Sign In</button>-->
		  <input type="button" value="login" name="loginbutton">
		</form>		
	</div>
