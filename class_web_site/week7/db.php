<?php

$ini = parse_ini_file( __DIR__ . '/dbconfig.ini');

$db = new PDO(  "mysql:host=" . $ini['server'] . 
                ";port=" . $ini['port'] . 
                ";dbname=" . $ini['dbname'], 
                $ini['username'], 
                $ini['password']);

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Connection {
	/*********************************************************************************************
	 * DATABASE CONNECTION
     *********************************************************************************************/
	public static function conn() {
		$server = "ict.neit.edu";
		$port = "5500";
		$dbname = "se266_genesis";
		$dsn = "mysql:host=$server;port=$port;dbname=$dbname";
		$username = "se266_genesis";
		$password = "genesis";
		try {
			$conn = new PDO($dsn, $username, $password);
			$conn->exec('set names utf8');
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

foreach($conn->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $conn = null;

			return $conn;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}

?>
