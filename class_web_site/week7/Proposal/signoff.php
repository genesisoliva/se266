<?php

error_reporting(E_ALL ^ E_WARNING);

    $images = filter_input ( INPUT_GET , 'image' );
    if (isset($images) && !empty($images)) {
        echo '<img src="images/'.$images.'.png">';
    }
    
    
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Good-bye!</title>
<!-- Link to external Stylesheet -->
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
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>
        <a class="btns" href="gitRepo.php">My GitHub Repo</a> 
        <a class="btns" href="login.php">Login</a>  

    </div><!-- end botton-container -->	   
        



<!-- Container Div -->
<div class="container" style="text-align:center;">


<?php
if (isset($_POST['signoff'])) { //create logoff button
    session_start();
    session_unset();
    session_destroy();

    header('Location: login.php');
}
?>

<h1>Until Next Time!</h1>
            <div class="orderItems">
                <img src="images/coffeetable<?php echo $images; ?>.png" style="height:90px;"><br>
            </div>



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