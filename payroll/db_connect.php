<?php 
$ini = parse_ini_file( __DIR__ . '/dbconfig.ini');

//$conn = new mysqli('localhost','root','','payroll') or die("Could not connect to mysql".mysqli_error($con));


$conn = new PDO(  "mysql:host=" . $ini['server'] . 
                ";port=" . $ini['port'] . 
                ";dbname=" . $ini['dbname'], 
                $ini['username'], 
                $ini['password']);

$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
