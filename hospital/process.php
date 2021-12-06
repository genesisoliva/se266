<?php
include_once('helpers/Connection.php');

if(isset($_POST['loginbutton']))
{
    $con = Connection::conn();
    $un = $_POST['un-text'];
    $pw = $_POST['pw-text'];

    checkLogin($con, $un, $pw)
}

function insertFunction($con, $un, $pw){

}

function checkLogin($con, $un, $pw){
    $query = $con->prepare("")
}
?>
