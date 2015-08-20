<?php
session_start();

$pageTitle = 'Log-in';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect('localhost', 'root', '', 'grannynanny');

if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
if (isset($_POST['email']) and isset($_POST['pass'])) {
	$email = htmlentities($_POST['email']);
	$password = htmlentities($_POST['pass']);

	$escapedPassword = mysqli_real_escape_string($conn, $password);
	$escapedEmail = mysqli_real_escape_string($conn, $email);

	$query = mysqli_query($conn, "SELECT * FROM parenuser WHERE email='$escapedEmail' AND pass='$escapedPassword'") or die("Стана грешкка " . mysql_error());
	$count = mysqli_num_rows($query);
	if (!$query) {
		echo mysqli_error($conn);
	}
	if ($count == 1) {
		while ($row = $query->fetch_assoc()) {
			$_SESSION["name"] = $row['firstname'];
			$_SESSION["lastname"] = $row['lastname'];
			$_SESSION["status"] = $row['status'];
			if ($_SESSION["status"] == "nanny") {
				header('Location: user_profile.php');
			} else if ($_SESSION["status"] == "user") {
				header('Location: user_profile.php');
			} else if ($_SESSION["status"] == "admin") {
				header('Location: user_profile.php');
			}
		}
	} else {
		header('Location: error.php');
		//echo "Invalid Login Credentials.";
	}
}