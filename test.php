<?php
$pageTitle = 'Log-in';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = new mysqli('localhost', 'root', '', 'grannynanny');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn ->set_charset("utf8");
?>



<?php



	$conn  = new mysqli("localhost", "root", "", "grannynanny");
			if(! $conn )
			{
				die('Could not connect: ' . mysql_error());
			}

 echo $displayAuser = $conn->query("SELECT * FROM parenuser WHERE userID='$userID'");



   ?>








