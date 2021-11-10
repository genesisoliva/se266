<?php
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;
  $_SESSION['start'] = time();
  $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
  echo "Bienvenido! " . $_SESSION['username'];

  header('location:page2.php');
  exit();
