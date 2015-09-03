<?php
$pageTitle = 'Book-nanny';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$conn = new mysqli("localhost", "root", "", "grannynanny");
if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn->set_charset("utf8");

include 'includes/header.php';

$count = 0;
$errors = array();

$userID = $_SESSION['userID'];
$nannyID = $_SESSION['nannyID'];

//var_dump($nannyID);
//var_dump($userID);
var_dump($_SESSION['firstname']);

if (isset($_POST['submit'])) {
	$address = $_POST['address'];
	$children = $_POST['children'];
	$info = $_POST['info'];
	$startDate = $_POST['startDate'];
	$endDate = $_POST['endDate'];
	$book_firstname = $_POST['book_firstname'];
	$book_lastname = $_POST['book_lastname'];
	$book_email = $_POST['book_email'];
	$book_tel = $_POST['book_tel'];
	
	if (!empty($address)) {
		$count++;
	} else {
		echo "Моля въведете адрес!";
	}
	if (!empty($children)) {
		$count++;
	}
	if (!empty($startDate)) {
		$count++;
	}
	if (!empty($endDate)) {
		$count++;
	}

if (empty($_POST['city'])) {
		echo "Моля изберете град.";
	} else {
		$city = $_POST['city'];
		$count++;
	}
}



var_dump($count);
	if ($count > 4) {
		$status = 'request';
		/*$escapedAddress = mysqli_real_escape_string($conn, $address);
		$escapedSelectedCity = mysqli_real_escape_string($conn, $selected_val);
		$escapedFirstName = mysqli_real_escape_string($conn, $firstname);
		$escapedLastName = mysqli_real_escape_string($conn, $lastname);
		$escapedATelephone = mysqli_real_escape_string($conn, $tel);
		$escapedPassword = mysqli_real_escape_string($conn, $password);
		$escapedEmail = mysqli_real_escape_string($conn, $email);*/

		$sql = "INSERT INTO `booking` (userID, nannyID, city, address, children, info, startDate, endDate, status, book_firstname, book_lastname, book_email, book_tel) VALUES ('$userID', '$nannyID', '$city', '$address', '$children', '$info', '$startDate', '$endDate', '$status', '$book_firstname', '$book_lastname', '$book_email', '$book_tel')";

		$result = mysqli_query($conn, $sql) or die("Error in the consult.." . mysqli_error($conn));
		if ($result) {
			header("Location: success_booking.php");
		}
	} else {
 			header("Location: error_booking.php");
	}
	
	//include 'includes/footer.php';

	?>