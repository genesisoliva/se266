<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script data-src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script defer data-src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <title>SE 266 - Genesis J Oliva</title>
  <style>
p.a {
  
}
body {
  font-family: "Times New Roman", Times, serif;
  font-size: "16px;";
  margin-left: 20px;
  margin-right: 10px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}
.navbar a {
  float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.show {
  display: block;
}
li {
  font-family: "Times New Roman", Times, serif;
  font-size: "16px;";
}



.nav {
 padding: 0px 50px;
    font-family: sans-serif;
}
 
 .nav .menu-btn {
  display:none;
 }
  
.nav-content {
 padding: 0;
 list-style-type: none;
 display: inline-block;
 margin: 0px;
}
 
 .nav-content li {
  display: inline-block;
 }
  
  .nav-content li a {
   text-decoration:none;
   padding: 14px 10px;
   display: flex;
  }
   
   .nav-content li a .fa-caret-down {
    padding: 0px 10px;
   }
 
.dropdown .close-dropdown .fa-times {
 padding-right:10px;
 float: right;
 display:none;
}
 
.dropdown:hover .dropdown-menu {
    display: block;
}
 
.dropdown-menu {
    position: absolute;
    z-index: 1;
    min-width: 130px;
 display:none;
}
 
.search-area {
 float:right;
 list-style-type: none;
 display: inline-block;
 padding: 8px;
}
 
 .search-area input {
  border-radius: 4px;
  padding: 6px;
  transition: all .5s;
 }
  
 .search-area input:focus {
  border-radius: 4px;
  outline: none;
 }
 
.btn-search {
 border-radius: 4px;
 padding: 6px;
    cursor: pointer;
 transition: all .5s;
}
 
svg:not(:root).svg-inline--fa {
    padding-right: 5px;
}
/*  CSS for style layout end*/
 
 
/* CSS Media Query for 768p start */
@media screen and (max-width: 768px) {
  
 .bottom-border-nav{
  border-bottom:0.1px solid;
 }
  
 .nav {
  padding: 0px;
 }
  
 .nav .menu-btn {
  display:block;
  padding: 10px;
  font-size:2rem;
 }
  
 .nav-elements {
  display:none;
 }
  
 .nav-sky .search-area {
  border-top: 1px solid #fff;
 }
  
 .nav-content {
  display: block;
 }
  
  .nav-content li {
   display: block;
  }
  
 .dropdown-menu {
  position: relative;
  min-width: auto;
 }
  
  .dropdown-menu a {
   padding-left: 20px !important;
  }
   
 .search-area {
  float: none;
  width: 100%;
  padding: 12px 8px;
  border-top:0.1px solid;
 }
} 
/* CSS Media Query for 768p end */
 
 
/* CSS for sky theme start*/
.nav-sky {
 color:#fff;
 background-color: #333;
 /*background-image: linear-gradient(#44adff, #8acbfd);*/
}
 
 .nav-sky .nav-content li a {
  color:#fff;
 }
  
 .nav-sky .nav-content li a:hover, .nav-sky .dropdown:hover .dropdown-link {
  /*background-image: linear-gradient(#1096ff, #5fb8ff);*/
  background-color: red;
 }
   
 .nav-sky .dropdown-menu {
  background-color: #a2d5fd;
  box-shadow: 0px 5px 10px #abdaff;
 }
  
 .nav-sky .search-area input {
  color: #fff;
  background: transparent;
  border: 1px solid #fff;
 }
  
 .nav-sky .search-area input:focus {
  box-shadow: 0px 0px 10px #fff;
 }
 
  
 .nav-sky .search-area input::placeholder {
  color:#fff;
 }
  
 .nav-sky .btn-search {
  background: transparent;
  border: 1px solid #fff;    
  color: #fff;
 }
  
 .nav-sky .btn-search:hover, .btn-search:focus {
  background-color: #0182e6;
  border: 1px solid #0182e6;    
  color: #fff;
 }
 
 .nav-sky .active {
  /*background-image: linear-gradient(#1096ff, #5fb8ff);*/
  background-color: red;

 }
 a.dropdown-link {
    padding: 0px !important;
}
</style>
</head>
<body>

<!--<header class="navbar">
  
<a href="../site/index.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn" onclick="dropDown()">Assigments
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="../week1/index.php">Week 1</a>
      <a href="../week2/index.php">Week 2</a>
      <a href="../week3/index.php">Week 3</a>
      <a href="../week4/index.php">Week 4</a>
      <a href="../week5/index.php">Week 5</a>
      <a href="../week6/index.php">Week 6</a>
      <a href="../week7/index.php">Week 7</a>
      <a href="../week8/index.php">Week 8</a>
      <a href="../week9/index.php">Week 9</a>
      <a href="../week10/index.php">Week 10</a>
    </div>
  </div> 

  <a href="../site/heroku_resources.php">Heroku Resources</a>

  <a href="../site/php_resources.php">PHP Resources</a>

  <a href="../site/git_resources.php">Git Resources</a>

  <a href="https://github.com/genesisoliva/se266">My GitHub Repo</a>
  
</header>-->

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
//function dropDown() {
  //document.getElementById("myDropdown").classList.toggle("show");
//}
// Close the dropdown if the user clicks outside of it
//window.onclick = function(e) {
 // if (!e.target.matches('.dropbtn')) {
  //var myDropdown = document.getElementById("myDropdown");
   // if (myDropdown.classList.contains('show')) {
   //   myDropdown.classList.remove('show');
   // }
  //}
//}
</script>

<div class="nav nav-sky">
    <div class="menu-btn"> <i class="fas fa-bars"></i> </div>

    <div class="nav-elements">
        <ul class="nav-content">
            <li> <a href="../site/index.php" title="Home" class="active"> <!--<i class="fas fa-home"></i>-->Home</a> </li>
            <!--<li> <a href="#" title="About"> <i class="fas fa-address-card"></i> About </a> </li>-->

            <li>
                <div class="dropdown">
                    <a href="#" class="dropdown-link" title="Gallery">
                    <!--<i class="fas fa-camera"></i> -->Assigments <!--<i class="fas fa-caret-down"> </i>-->  
                    </a>
                <div class="dropdown-menu">       
                    <a href="../week1/index.php" title="Week 1"> Week 1</a>
                    <a href="../week2/index.php" title="Week 2"> Week 2 </a>
                    <a href="../week3/index.php" title="Week 3"> Week 3 </a>
                    <a href="../week4/index.php" title="week 4"> Week 4</a>
                    <a href="../week5/index.php" title="Week 5"> Week 5</a>
                    <a href="../week6/index.php" title="Week 6"> Week 6 </a>
                    <a href="../week7/index.php" title="Week 7"> Week 7</a>
                    <a href="../week8/index.php" title="Week 8"> Week 8</a>
                    <a href="../week9/index.php" title="Week 9"> Week 9</a>
                    <a href="../week10/index.php" title="Week 10"> Week 10</a>
                </div>

                </div>
            </li>
            
            <!--<li> 
                <a href="#" title="Contact"> <i class="fas fa-phone"></i> Contact </a> 
            </li>-->

            <li> 
                <a href="../site/heroku_resources.php" title="Contact"> <!--<i class="fas fa-phone"></i>--> Heroku Resources </a> 
            </li>

            <li> 
                <a href="../site/php_resources.php" title="Contact"> <!--<i class="fas fa-phone"></i>--> PHP Resources </a> 
            </li>

            <li> 
                <a href="../site/git_resources.php" title="Contact"> <!--<i class="fas fa-phone"></i>--> Git Resources </a> 
            </li>

            <li> 
                <a href="https://github.com/genesisoliva/se266" title="Contact"> <!--<i class="fas fa-phone"></i>--> My GitHub Repo</a> 
            </li>
       
        </ul>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".menu-btn").click(function(){
            $(this).toggleClass("bottom-border");
            $(this).next(".nav-elements").slideToggle("slow");
        });
    });
</script>