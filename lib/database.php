<?php

class DB {
	static $conn;

	public function __construct() {
		self::$conn = mysqli_connect(DB_HOST, DB_USER,
			DB_PASS, DB_NAME);

		mysqli_query(self::$conn, "SET NAMES utf8");
	}

	public function get_results($sql) {
		$result = mysqli_query(self::$conn, $sql);
		$return = array();
		while ($row = mysqli_fetch_object($result)) {
			$return[] = $row;
		}
		return $return;
	}

	public function query($sql) {
		mysqli_query(self::$conn, $sql);
		if (mysqli_error(self::$conn)) {
			echo '<p>Error in database</p>';
			die();
		}
	}

	public function escape($str) {
		return mysqli_real_escape_string(self::$conn, $str);
	}
}