<?php //include("../../../non-pages/php-include/top.php"); 
include_once __DIR__ . "/models/model_schools.php";
?>
	    <h1 class="cent"><?php echo $pageTitle ?></h1>

<?php
    // delete the session info and redirect to login.php
    deleteAllSchools ();
    session_start();
    session_unset();
    session_destroy();

    header('Location: index.php');

?>

<?php //include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
