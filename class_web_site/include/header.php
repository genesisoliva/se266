<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>SE 266 - Genesis J Oliva</title>
</head>
<body>
<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn" onclick="dropDown()">Assignments
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="../week1/index.php">Assignment 1</a>
      <a href="../week2/index.php">Assignment 2</a>
      <a href="../week3/index.php">Assignment 3</a>
      <a href="../week4/index.php">Assignment 4</a>
      <a href="../week5/index.php">Assignment 5</a>
      <a href="../week6/index.php">Assignment 6</a>
      <a href="../week7/index.php">Assignment 7</a>
      <a href="../week8/index.php">Assignment 8</a>
      <a href="../week9/index.php">Assignment 9</a>
      <a href="../week10/index.php">Assignment 10</a> 
    </div>
  </div> 
  <a href="../site/heroku_resources.php">Heroku Resources</a>
  <a href="../site/php_resources.php">PHP Resources</a>
  <a href="../site/git_resources.php">Git Resources</a>
  <a href="https://github.com/genesisoliva/se266">My GitHub Repo</a>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropDown() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>