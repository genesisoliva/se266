<?php include("../../../non-pages/php-include/top.php"); ?>
	    <h1 class="cent"><?php echo $pageTitle ?></h1>
		
		<?php
    error_reporting(E_ALL ^ E_WARNING);
    session_start();
    include_once __DIR__ . "/models/model_schools.php";

    if (isPostRequest())
            {
                if (isset($_POST['uname']) && isset($_POST['pword']) && $_POST['uname'] != "" && $_POST['pword'] != "") {
                    $result = "";
                    $user = IsValidUser(filter_input(INPUT_POST, 'uname'), sha1(filter_input(INPUT_POST, 'pword')));
                    if ($user == true) {
                        $_SESSION["User"] = filter_input(INPUT_POST, 'uname');
                        header('Location: upload.php');
                    } else {
                        $result = "Invalid username or password";
                    }
                } else {
                    $result = "Please enter a username and password";
                }
            }
        
     
?>
<form method="post" action="index.php">
    <h3>Please Login</h3>
            <div class="rowContainer">
            User Name:<input type="text" name="userName" value="donald">
            </div>
            <div class="rowContainer">
                Password:<input type="password" name="password" value="duck">
            </div>
              <div class="rowContainer">
                  <input type="submit" name="login" value="Login" class="btn btn-warning">
            </div>
            
        </form>

<br /><center><h3><?php if (isPostRequest()) {echo $result;} ?></h3></center>


	</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
