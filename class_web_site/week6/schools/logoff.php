<?php
if (isset($_POST['logoff'])) { //create logoff button
    session_start();
    session_unset();
    session_destroy();

    header('Location: login.php');
}
?>