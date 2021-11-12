<?php
error_reporting(E_ALL ^ E_WARNING); 

session_start();
        
        include __DIR__ . '/model/model_customers.php';  
        include __DIR__ . '/include/functions.php';
        
       if (isPostRequest()) {

           $fName = filter_input(INPUT_POST, 'FirstName');
           $lName = filter_input(INPUT_POST, 'LastName');
           $username = filter_input(INPUT_POST, 'userName');
           $password = filter_input(INPUT_POST, 'password');
           $email = filter_input(INPUT_POST, 'eMail');
           $birthday = filter_input(INPUT_POST, 'BirthDate');
           
          
           $result = addCustomer ($fName, $lName, $username, $password, $email, $birthday);
           
       }
  ?> 

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
 <!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container"> 
<!-- Header Div  -->    
<div class="header"> 
<h2>Sign Up</h2>
</div><!-- End Header Div -->


<!--Navigation Bar -->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>        
        <a class="btns" href="menu.php">Menu</a>   
        <a class="btns" href="login.php">Login</a> 
 
    </div> <!-- end botton-container -->	   

 <!-- Container Div -->
<div class="container" style="text-align:center;"> 
    
  <h2>Sign Up</h2>
  <form class="" action="signup.php" method="post">


    <div class="">
    <label>First Name</label> 
    <input type="text" id="FirstName" value="" name="FirstName" /><br />
    <br>

    <label>Last Name</label> 
    <input type="text" id="LastName" value="" name="LastName" /><br />
    <br>




    <label>Username</label> 
    <input type="text" id="username" value="" name="userName" /><br />
    <br>


    <label>Password</label> 
    <input type="password" id="password" value="" name="password" /><br />
    <br>


    <label>Email</label> 
    <input type="text" id="eMail" value="" name="eMail" /><br />
    <br>
    

  
    <label>Birthday</label>
    <input type="date" id="BirthDate" name="BirthDate" value="dob"><br>
    </br>
    

         
      <div class="">
        <button type="submit" name="join" class="">Join</button></br>
        </br>
        <?php
            if (isPostRequest()) {
                echo "Welcome, $fName!";
            }
        ?>
      </div>
      </div><!-- End containter div -->


  </form>


</div>

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