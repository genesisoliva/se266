<?php
    error_reporting(E_ALL ^ E_WARNING);
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php"; 
    session_start();
  
  
  
          if (isset ($_FILES['file1'])) {

              $tmp_name = $_FILES['file1']['tmp_name'];
              $path = getcwd() .DIRECTORY_SEPARATOR . 'uploads';
              $new_name = $path . DIRECTORY_SEPARATOR . $_FILES['file1']['name'];
              move_uploaded_file($temp_name, $new_name);
              insertSchoolsFromFile($new_name);
              header('Location: search.php');
              exit; 
          } 
      

    include_once __DIR__ . "/header.php";
 

?> 


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Upload</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>Upload</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>        
        <a class="btns" href="githubR.php">GitHub Resources</a>   
        <a class="btns" href="phpR.php">PHP References</a>  
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="otherThings.php">Other Things</a>  
        <a class="btns" href="login.php">Log Off</a> 

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;">  

 
    <h2>Upload File</h2>
    <p>
        Please specify a file to upload and then be patient as the upload may take a while.
    </p>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file1">
        <input type="submit" value="Upload">

      <?php

        if (isset ($_FILES['file1'])){

          include_once __DIR__ . "/includes/footer.php";

        }

          
      ?>

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