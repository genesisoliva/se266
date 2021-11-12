<?php

error_reporting(E_ALL ^ E_WARNING);

    session_start();
    
    include_once __DIR__ . "/model/model_customers.php";
    include_once __DIR__ . "/include/functions.php";
    
    
    if (isPostRequest()) {
        $username = filter_input(INPUT_POST, 'userName');
        $password = filter_input(INPUT_POST, 'password');

        if(checkLogin($username, $password)){

            header('Location: upload.php');
            $_SESSION['LoggedIn'] = "true";

        }else{

            //header('Location: login.php');
            $_SESSION['LoggedIn'] = "false"; 
            echo "Please enter in a valid username and password.";

        }
    } 

    
     
?>




<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>G & K Cafe</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="menu.php">Menu</a>   
        <a class="btns" href="signup.php">Sign Up</a>

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;">  
<form method="post" action="login.php">
           
            <div class="">
                <h3>Login</h3>
            </div>
            <div class="">
                <div class="loginLabel">User Name:</div>
                <div class=""><input type="text" name="userName" value="coffecustomer"></div> 
            </div>
            <div class="">
                <div class="loginLabel">Password:</div>
                <div class=""><input type="password" name="password" value="coffee"></div> 
            </div>
    
                <div class="">&nbsp;</div>
                <div class=""><button type="submit" name="login" value="Login" class="">Login</button>
                    <?php
                        if (isPostRequest()) {

                            echo "Welcome back!";

                            header('Location: menu.php');
                        }
                    ?>
                
                </div> 
            
      </div>
    </div>
  </form>
            
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