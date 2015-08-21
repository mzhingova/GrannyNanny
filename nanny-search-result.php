<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "grannynanny");
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}

$conn->set_charset("utf8");
$count = 0;
$errors = array();

if (isset($_REQUEST['search-button'])) {
	$firstname = htmlentities($_GET['firstname']);

	$escapedFirstName = mysqli_real_escape_string($conn, $firstname);

	$check = "SELECT firstname, lastname FROM parenuser WHERE firstname = '$escapedFirstName' AND status = 'nanny' LIMIT 5";
	$rs = mysqli_query($conn, $check) or die("Error in the consult.." . mysqli_error());
	$data = mysqli_fetch_array($rs, MYSQLI_ASSOC);

	var_dump($data);

	if (!$data) {
		header("Location: QQ.php");
	} else {
		foreach ($data as $key => $value) {
			echo "<h2>";
			echo strtoupper($key) . ' -> ' . $value;
			echo "</h2>";
		}
	}
}
