<?php

class Connection {
	/*********************************************************************************************
	 * DATABASE CONNECTION
     *********************************************************************************************/
	public static function conn() {
		$host="ict.neit.edu";//$host = "localhost";
		$port=5500;//$port = "3306";
		$dbname="se266_genesis";//$dbname = "hospital";
		$dsn = "mysql:host=$host;port=$port;dbname=$dbname";
		$username="se266_genesis";//$username = "alansary";
		$password="genesis";//$password = "123456";
		try {
			$conn = new PDO($dsn, $username, $password);
			$conn->exec('set names utf8');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//return $conn;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
		return $conn;

	}
}
