<?php 

namespace App\Models;

class sql extends PDO {
	private $conn;

	public function __construct() {
		$conn = new PDO("mysql:host=".MYSQL_HOST.';dbname='.MYSQL_DBNAME, MYSQL_USERNAME, MYSQL_PASSWORD);
	}
}