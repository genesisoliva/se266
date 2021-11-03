<?php
    session_start();

    if($_SESSION['LoggedIn'] == "false"){
      header('Location: login.php');
    }
?>




<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>W6 | Log Off</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>Log Off</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>

    <br>
    <?php if(basename($_SERVER['PHP_SELF']) == 'upload.php'): ?><?php endif; ?><a class="btns"  href="upload.php">Upload</a>
    <?php if(basename($_SERVER['PHP_SELF']) == 'search.php'): ?><?php endif; ?><a class="btns" href="search.php">Search</a>
    <a class="btns" href="login.php">Log Off</a>  

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;">  




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