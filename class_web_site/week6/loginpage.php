<?php 
    session_start(); 
    //include("../../../non-pages/php-include/top.php"); ?>
	    <!--<h1 class="cent"><?php echo $pageTitle ?></h1>-->
		
    <?php

    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";
    

    
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
        <form method="post" action="loginpage.php">
           
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
            <?php
            if (isPostRequest()) {
                $username = filter_input(INPUT_POST, 'username');
               $password = filter_input(INPUT_POST, 'password');
        
               $new = sha1("school-salt".$password);
               $password = "";
        
                if(checkLogin($username, $new)){
                    header('Location: upload.php');
                    $_SESSION['Login'] = true;
                   // deleteAllSchools ();
                }else{
        
                    $_SESSION['Login'] = false; 
                    echo "<div class='error'>Please enter in a valid username and password.</div>";
                }
            }
            ?>
            
        </form>
        
    </div>


	</main>

<?php //include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
