<?php include("../../../non-pages/php-include/top.php"); ?>
	    <h1 class="cent"><?php echo $pageTitle ?></h1>
		
    <?php

    include_once __DIR__ . "/models/model_schools.php";
    /*include_once __DIR__ . "/includes/functions.php";
    session_start();

if (isPostRequest()) {
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');

        if(checkLogin($username, $password)){
            header('Location: upload.php');
            $_SESSION['LoggedIn'] = "true";

        }else{

            $_SESSION['LoggedIn'] = "false"; 
            echo "Please enter in a valid username and password.";

        }
    }*/

session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST'){
        if (checkLogin($_POST['username'],$_POST['password'])){
            $_SESSION['loggedIn'] = "yes";}
else{
$_SESSION['loggedIn'] = "no";}
}
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == "yes") {
        deleteAllSchools();
        header("Location: upload.php");
    }
else{
echo "bye";
    
    ?>
<head>
    <style type="text/css">
        #mainDiv {margin-left: 100px; margin-top: 100px;}
        .col1 {width: 100px; float: left;}
        .col2 {float: left;}
        .rowContainer {clear: left; height: 40px;}
        .error {margin-left: 100px; clear: left; height: 40px; color: red;}
    </style>
</head>
<div id="mainDiv">
        <form method="post" action="index.php">
           
            <div class="rowContainer">
                <h3>Please Login</h3>
            </div>
            <div class="rowContainer">
                <div class="col1">User Name:</div>
                <div class="col2"><input type="text" name="username" value="donald"></div> 
            </div>
            <div class="rowContainer">
                <div class="col1">Password:</div>
                <div class="col2"><input type="password" name="password" value="duck"></div> 
            </div>
              <div class="rowContainer">
                <div class="col1">&nbsp;</div>
                <div class="col2"><input type="submit" name="login" value="Login" class="btn btn-warning"></div> 
            </div>
            
        </form>
        
    </div>


	</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
