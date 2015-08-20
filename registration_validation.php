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

if (isset($_POST['submit'])) {
	$firstname = htmlentities($_POST['firstname']);
	$lastname = htmlentities($_POST['lastname']);
	$email = htmlentities($_POST['email']);
	$tel = htmlentities($_POST['tel']);
	$password = htmlentities($_POST['pass']);
	$password2 = htmlentities($_POST['pass2']);

	$address = htmlentities($_POST['address']);
	$selected_val = htmlentities($_POST['city']);
	$conn->set_charset("utf8");

	//form validation.
	//city validation
	if (empty($_POST['city'])) {
		echo "Моля изберете град.";
	} else {
		$city = $_POST['city'];
		$count++;
	}
	//frst name validation
	if (!empty($firstname)) {
		if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $firstname)) {
			$count++;

		} else {
			echo "Моля въведете валидно име.";
		}
	} else {
		echo "Моля въведете име.";
	}
	//last name validation
	if (!empty($lastname)) {
		if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $lastname)) {
			$count++;

		} else {
			echo "Моля въведете валидна фамилия.";
		}

	} else {
		echo "Моля въведете фамилия.";
	}

	/*    //address validation
	if(!empty($address)){

	//district validation
	if(empty($address)){

	echo "Моля въведете валиден квартал.";

	}*/

	//telephone validation
	if (!empty($tel)) {
		if (preg_match("/^[0-9]{5,10}$/i", $tel)) {
			$count++;
		} else {
			echo "Моля въведете валиден телефонен номер.";
		}
	} else {
		echo "Моля въведете телефонен номер.";
	}
	//email validation

	if (!empty($email)) {
		if (preg_match("/^[a-zA-Z]{1}[a-zA-Z0-9_.]+@[a-zA-Z-]+\.[a-zA-Z0-9-.]+$/", $email)) {
			$count++;
		} else {
			echo "Моля въведете валиден email.";
		}
	} else {
		echo "Моля въведете email.";
	}

	$check = "SELECT * FROM parenuser WHERE email = '$email'";
	$rs = mysqli_query($conn, $check) or die("Error in the consult.." . mysqli_error());
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);
	if ($data[0] > 1) {
		header("Location: QQ.php");
	} else {
		$count++;
	}

	// f this pass validation
	if (!empty($password) && !empty($password2)) {
		if (preg_match("/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/", $password)) {
			if ($password == $password2) {
				$count++;
			} else {
				echo "Паролите ви не съвпадат";
			}
		} else {
			echo "Моля въведете валидена парола.";
		}
	} else {
		echo "Моля въведете парола.";
	}

	if ($count > 6) {
		$escapedAddress = mysqli_real_escape_string($conn, $address);
		$escapedSelectedCity = mysqli_real_escape_string($conn, $selected_val);
		$escapedFirstName = mysqli_real_escape_string($conn, $firstname);
		$escapedLastName = mysqli_real_escape_string($conn, $lastname);
		$escapedATelephone = mysqli_real_escape_string($conn, $tel);
		$escapedPassword = mysqli_real_escape_string($conn, $password);
		$escapedEmail = mysqli_real_escape_string($conn, $email);

		$sql = "INSERT INTO `parenuser` (address, city, firstname, lastname, tel, pass, email, status) VALUES ('$escapedAddress', '$escapedSelectedCity', '$escapedFirstName', '$escapedLastName', '$escapedATelephone', '$escapedPassword', '$escapedEmail','user')";

		$result = mysqli_query($conn, $sql) or die("Error in the consult.." . mysqli_error($conn));
		if ($result) {
			header("Location: success.php");
		}
	} else {

	}
}