<?php include("../../../non-pages/php-include/top.php"); ?>
	    <h1 class="cent"><?php echo $pageTitle ?></h1>

<?php
    // delete the session info and redirect to login.php
    /*session_start();
    session_unset();
    session_destroy();

    header('Location: index.php');*/

session_start();
    if(filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST')
    {
        if(isset($_POST['logoff'])) 
        {
            $_SESSION['loggedIn'] = "no";
        }
    }
    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == "no")
    {
        session_destroy();
        header("Location: http://se266-sherry-j-2020.herokuapp.com/");
    }

?>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
