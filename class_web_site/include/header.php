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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <title>SE 266 - Genesis J Oliva</title>

<style>
body {
  font-family: "Times New Roman", Times, serif;
  font-size: "16px;";
  margin-left: 20px;
  margin-right: 10px;
}
/* CSS for style layout start*/
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
 /*background-image: linear-gradient(#44adff, #8acbfd);*/
 background-color: #333;
}
 
 .nav-sky .nav-content li a {
  color:#fff;
 }

 .dropdown-menu a {
    color: black !important;
}
  
 .nav-sky .nav-content li a:hover, .nav-sky .dropdown:hover .dropdown-link {
  /*background-image: linear-gradient(#1096ff, #5fb8ff);*/
  background-color: red;
 }
   
 .nav-sky .dropdown-menu {
  /*background-color: #a2d5fd;*/
  background-color: #f9f9f9;
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
  background-image: linear-gradient(#1096ff, #5fb8ff);
 }
/* CSS for sky theme end*/
</style>

<style>

.dropdown {
  /*float: left;
  overflow: hidden;*/
}
.dropdown .dropbtn {

}
.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {

}
.dropdown-content {

}
.dropdown-content a {

}
.dropdown-content a:hover {
}
.show {

}
li {
  font-family: "Times New Roman", Times, serif;
  font-size: "16px;";
}
</style>

</head>
<body>
<div class="nav nav-sky">
    
   <div class="menu-btn"> <i class="fas fa-bars"></i> </div>
    
   <div class="nav-elements">
    
    <ul class="nav-content">
        <li>
         <a href="../site/index.php" title="Home" class="active"> <!--<i class="fas fa-home"></i>--> Home </a>
        </li>

        <!--<li> <a href="#" title="About"> <i class="fas fa-address-card"></i> About </a> </li>-->

        <li>
         <div class="dropdown">
            <a href="#" class="dropdown-link" title="Assigments">
                <!--<i class="fas fa-camera"></i>--> Assigments <!--<i class="fas fa-caret-down"></i>-->
            </a>
        
       <div class="dropdown-menu">
           <a href="../week1/index.php" title="Week 1"> Week 1 </a>
           <a href="../week2/index.php" title="Week 2"> Week 2 </a>
           <a href="../week3/index.php" title="Week 3"> Week 3 </a>
           <a href="../week4/index.php" title="Week 4"> Week 4 </a>
        <a href="../week5/index.php" title="Option 5"> Week 5 </a>
        <a href="../week6/index.php" title="Option 6"> Week 6 </a>
        <a href="../week7/index.php" title="Option 7"> Week 7 </a>
        <a href="../week8/index.php" title="Option 8"> Week 8 </a>
        <a href="../week9/index.php" title="Option 9"> Week 9 </a>
        <a href="../week10/index.php" title="Option 10"> Week 10 </a>
       </div>
      </div>
       
     </li>
      
     <li> <a href="../site/heroku_resources.php" title="Heroku Resources"> <!--<i class="fas fa-phone"></i>--> Heroku Resources </a> </li>

     <li> <a href="../site/php_resources.php" title="PHP Resources"> <!--<i class="fas fa-phone"></i>--> PHP Resources </a> </li>

     <li> <a href="../site/git_resources.php" title="Git Resources"> <!--<i class="fas fa-phone"></i>--> Git Resources</a> </li>

     <li> <a href="https://github.com/genesisoliva/se266" title="My GitHub Repo"> <!--<i class="fas fa-phone"></i>--> My GitHub Repo</a> </li>

     <!--<li> <a href="https://www.codingtuting.com/2019/05/create-responsive-navbar-using-html-css.html" title="Contact"> Nav Website Resocure</a> </li>-->

      
    </ul>
    
    <!--<form class="search-area">
     <input type="text" name="search" placeholder="Search Item" title="Search Item">
     <button class="btn-search" name="search-button" title="Search">Search</button>
    </form>-->
     
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



