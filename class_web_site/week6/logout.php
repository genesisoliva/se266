<?php 
include_once __DIR__ . "/models/model_schools.php";
    // delete the session info and redirect to login.php
    deleteAllSchools ();
    session_start();
    session_unset();
    session_destroy();

    header('Location: loginpage.php');

?>
