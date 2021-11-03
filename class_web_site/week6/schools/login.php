<?php

error_reporting(E_ALL ^ E_WARNING);

    session_start();
    
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";
    
    
    if (isPostRequest()) {
        $username = filter_input(INPUT_POST, 'userName');
        $password = filter_input(INPUT_POST, 'password');

        if(checkLogin($username, $password)){

            header('Location: upload.php');
            $_SESSION['LoggedIn'] = "true";

        }
    } 

    
     
?>




<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W6 | Login</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="includes/style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>Login</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>
<br>
<br>
 <!--    <?php if(basename($_SERVER['PHP_SELF']) == 'upload.php'): ?><?php endif; ?><a class="btns"  href="upload.php">Upload</a>
    <?php if(basename($_SERVER['PHP_SELF']) == 'search.php'): ?><?php endif; ?><a class="btns" href="search.php">Search</a>
    <a class="btns" href="login.php">Log Off</a> -->    

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;">  
<form method="post" action="login.php">
           
            <div class="">
                <h3></h3>
            </div>
            <div class="">
                <div class="loginLabel">User Name:</div>
                <div class=""><input type="text" name="userName" value="donald"></div> 
            </div>
            <div class="">
                <div class="loginLabel">Password:</div>
                <div class=""><input type="password" name="password" value="duck"></div> 
            </div>
              <div class="">
                <div class="">&nbsp;</div>
                <div class=""><input type="submit" name="login" value="Login" class=""></div> 
            </div>
            
</form>


</div> <!-- End Container Div -->



<!-- Footer -->
<footer class="footer">
  <p>This document was last modified <span id="lastMod"></span>.</p>
  <p class="crName">&#169; Gina Martin SE266</p>
</footer>
<!-- End Footer Div -->



<script>
document.getElementById("lastMod").innerHTML = document.lastModified;
</script>

</body>
</html>