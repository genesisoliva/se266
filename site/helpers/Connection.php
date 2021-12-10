<?php

class Connection {
	/*********************************************************************************************
	 * DATABASE CONNECTION
     *********************************************************************************************/
	public static function conn() {
		$host = "localhost";
		$port = "3306";
		$dbname = "se266_genesis";
		$dsn = "mysql:host=$host;port=$port;dbname=$dbname";
		$username = "se266_genesis";
		$password = "genesis";
		try {
			$conn = new PDO($dsn, $username, $password);
			$conn->exec('set names utf8');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
