
<?php
session_start();
$pageTitle = 'Log-in';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = new mysqli('localhost', 'root', '', 'grannynanny');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn->set_charset("utf8");
?>
<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$motivation = $_POST['motivation'];
$workout = $_POST['workout'];
$city = $_POST['city'];
$education = $_POST['education'];
$work_status = $_POST['work_status'];
$password = $_POST['password'];
$pass2 = $_POST['pass2'];
$pass = $_POST['pass'];
$isAdmin = $_SESSION['status'];

if (isset($_POST['submit'])) {
	if ($isAdmin == 'admin') {
		$userID = $_POST['userID'];
	} else {
		$userID = $_SESSION['userID'];
	}
}


$file = $_FILES['image']['name'];
$folder = "uploads/";

if (isset($file)) {
	$file_loc = $_FILES['image']['tmp_name'];
	$file_size = $_FILES['image']['size'];
	$file_type = $_FILES['image']['type'];

	// new file size in KB
	$new_size = $file_size / 1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file = str_replace(' ', '-', $new_file_name);
	$allowed = array('gif', 'png', 'jpg', 'jpeg');
	$ext = pathinfo($file, PATHINFO_EXTENSION);

	if (in_array($ext, $allowed)) {
		if ($new_size < 1024) {
			if (move_uploaded_file($file_loc, $folder . $final_file)) {
				$query = mysqli_query($conn, "UPDATE parenuser SET `photo`='$final_file' WHERE userID='$userID'") or die(mysql_error());
				
			}
		} else {
			echo "Прекалено голяма снимка.";
		}

	}
}
if (!empty($firstname)) {
	if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $firstname)) {
		$query = mysqli_query($conn, "UPDATE parenuser SET `firstname`='$firstname' WHERE userID='$userID'") or die(mysql_error());
		
	} else {
		echo "Моля въведете валидно име.";
	}
}
if (!empty($lastname)) {
	if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $lastname)) {
		$query = mysqli_query($conn, "UPDATE parenuser SET `lastname`='$lastname' WHERE userID='$userID'") or die(mysql_error());
		
	} else {
		echo "Моля въведете валидно фамилия.";
	}
}
if (!empty($tel)) {
	if (preg_match("/^[0-9]{5,10}$/i", $tel)) 
	{
		$query = mysqli_query($conn, "UPDATE parenuser SET `tel`='$tel' WHERE userID='$userID'") or die(mysql_error());
		
	} else {
		echo "Моля въведете валиден телефонен номер.";
	}
}
if (!empty($motivation)) {
	if (preg_match("/^.{20,255}$/i", $motivation)) {
		$query = mysqli_query($conn, "UPDATE parenuser SET `motivation`='$motivation' WHERE userID='$userID'") or die(mysql_error());

	} else {
		echo "Мотивационното писмо не може да съдържа повече от 255 и по-малко от 20 символа.";
	}
}
if (!empty($address)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `address`='$address' WHERE userID='$userID'") or die(mysql_error());
	

}
if (!empty($workout)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `workout`='$workout' WHERE userID='$userID'") or die(mysql_error());
	

}
if (!empty($city)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `city`='$city' WHERE userID='$userID'") or die(mysql_error());
	
	
}
if (!empty($education)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `education`='$education' WHERE userID='$userID'") or die(mysql_error());
	
	
}
if (!empty($work_status)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `work_status`='$work_status' WHERE userID='$userID'") or die(mysql_error());
	
	
}
if (!empty($password) && !empty($pass) && !empty($pass2)) {
	$check = "SELECT * FROM parenuser WHERE 'pass' = '$password'";
	$rs = mysqli_query($conn, $check) or die("Error in the consult.." . mysqli_error());
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);
	if ($data[0] = 1) {
		
			if ($password == $pass) {
				echo ("Моля въведете парола различна от настоящата.");
			} else if (preg_match("/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/", $pass)) {
				if ($pass === $pass2) {
					$escapedPass = mysqli_real_escape_string($conn, $pass);

					$query = mysqli_query($conn, "UPDATE parenuser SET `pass`='$escapedPass' WHERE userID='$userID'") or die(mysql_error());

				} else {
					echo ("Паролите ви не съвпадат");
				}
			}
		}
	}



header("Refresh: 2; url=nanny_profil.php"."?id=".$userID);
echo $userID;

?>