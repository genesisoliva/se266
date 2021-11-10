<?php include("../../../non-pages/php-include/top.php"); ?>
	    <h1 class="cent"><?php echo $pageTitle ?></h1>

<?php
    // delete the session info and redirect to login.php
    session_start();
    session_unset();
    session_destroy();

    header('Location: index.php');
?>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>