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
	$city = htmlentities($_GET['city']);
	$age = htmlentities($_GET['age']);
	$sex = htmlentities($_GET['gender']);

	$splittedAge = explode("-", $age);

	if ($splittedAge) {
		$minAge = $splittedAge[0];
		$maxAge = $splittedAge[1];
	}

	$escapedFirstName = mysqli_real_escape_string($conn, $firstname);
	$escapedCity = mysqli_real_escape_string($conn, $city);

	// TODO: Amend the SQL query and include the parameters
	$check = "SELECT firstname, lastname, city, email FROM parenuser WHERE firstname = '$escapedFirstName' AND city = '$escapedCity' AND status = 'nanny' LIMIT 5";

	if ($result = mysqli_query($conn, $check)) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<h2>";
			echo $row['firstname'] . ' ' . $row['lastname'];
			echo "</br>";
			echo $row['city'] . ' ' . $row['email'];
			echo "</h2>";
		}

	} else {
		// TODO: Redirect to No Results Page
		header("Location: QQ.php");
	}
}
