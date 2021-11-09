<?php include("../../../non-pages/php-include/top.php"); ?>
	    <h1 class="cent"><?php echo $pageTitle ?></h1>
		
		<?php
    error_reporting(E_ALL ^ E_WARNING);
    session_start();
    include_once __DIR__ . "/models/model_schools.php";

    if (isPostRequest()) {
       
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


	</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
