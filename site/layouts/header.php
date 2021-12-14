<?php
  require_once 'config.php';
  require_once 'include/header.php';
  
  if (!isset($_SESSION['user_id'])) 
  {
    header('Location: login.php');
  }
?>

<div class="container">
  <?php require_once 'include/navbar.php'; ?>
