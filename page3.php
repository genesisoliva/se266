<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: page1.php"); 
    exit; 
} 
echo 'Welcome, '.$_SESSION['username']; 
?>
