
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
$current_pass = $_POST['current_pass'];
$counter = 0;

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

	$ext = strtolower($ext);
	if (in_array($ext, $allowed)) {
		if ($new_size < 1024) {
			if (move_uploaded_file($file_loc, $folder . $final_file)) {
				$query = mysqli_query($conn, "UPDATE parenuser SET `photo`='$final_file' WHERE userID='$userID'") or die(mysql_error());
				$counter++;
			}
		} else {
			echo "Прекалено голяма снимка. Максималният разрешен размер е '1 MB'";
		}

	}
}
if (!empty($firstname)) {
	if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $firstname)) {

		 if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")){
        $_SESSION["name"] = $firstname;
           }
		$query = mysqli_query($conn, "UPDATE parenuser SET `firstname`='$firstname' WHERE userID='$userID'") or die(mysql_error());
		$counter++;
	} else {
		echo "Моля въведете валидно име.";
	}
}
if (!empty($lastname)) {
	if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $lastname)) {
		 
		 if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")){
        $_SESSION["lastname"] = $lastname;
           }
		$query = mysqli_query($conn, "UPDATE parenuser SET `lastname`='$lastname' WHERE userID='$userID'") or die(mysql_error());
		$counter++;
	} else {
		echo "Моля въведете валидна фамилия.";
	}
}
if (!empty($tel)) {
	if (preg_match("/^[0-9]{5,10}$/i", $tel)) {
		$query = mysqli_query($conn, "UPDATE parenuser SET `tel`='$tel' WHERE userID='$userID'") or die(mysql_error());
		$counter++;
	} else {
		echo "Моля въведете валиден телефонен номер.";
	}
}
if (!empty($motivation)) {
	if (preg_match("/^.{20,255}$/i", $motivation)) {
		$query = mysqli_query($conn, "UPDATE parenuser SET `motivation`='$motivation' WHERE userID='$userID'") or die(mysql_error());
		$counter++;
	} else {
		echo "Мотивационното писмо не може да съдържа повече от 255 и по-малко от 20 символа.";
	}
}
if (!empty($address)) {
if (preg_match("/^.{5,50}$/i", $address)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `address`='$address' WHERE userID='$userID'") or die(mysql_error());
	$counter++;
	} else {
		echo ("Адресът не може да бъде по-малко от 5 символа и повече от 50.");
	}
}
if (!empty($workout)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `workout`='$workout' WHERE userID='$userID'") or die(mysql_error());
	$counter++;
}
if (!empty($city)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `city`='$city' WHERE userID='$userID'") or die(mysql_error());
	$counter++;
}
if (!empty($education)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `education`='$education' WHERE userID='$userID'") or die(mysql_error());
	$counter++;
} 
if (!empty($work_status)) {
	$query = mysqli_query($conn, "UPDATE parenuser SET `work_status`='$work_status' WHERE userID='$userID'") or die(mysql_error());
	$counter++;
}
if (!empty($password) && !empty($pass) && !empty($pass2)) {

    $check = "SELECT * FROM parenuser WHERE 'pass' = '$password' AND userID='$userID'";

    $get_current_pass = mysqli_query($conn, "SELECT pass FROM parenuser WHERE userID='$userID'");
    $row = mysqli_fetch_object($get_current_pass);
    $current_pass = $row->pass;



    $rs = mysqli_query($conn, $check) or die("Error in the consult.." . mysqli_error());
    $data = mysqli_fetch_array($rs, MYSQLI_BOTH);
    $data_two = mysqli_fetch_row($rs);

    if ($data[0] = 1) {
        
             if (preg_match("/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/", $pass)) {
                if (($pass == $pass2) && ($current_pass == $password)) {
                    $escapedPass = mysqli_real_escape_string($conn, $pass);

                    $query = mysqli_query($conn, "UPDATE parenuser SET `pass`='$escapedPass' WHERE userID='$userID'") or die(mysql_error());
                    $counter++;
                } else {
                    echo ("Паролите ви не съвпадат");
                }
            
            } else {
                echo "Неправилна парола въведена";
            }
        }
    } 
    if ($counter>0) {
header("Refresh: 0; url=changes_made_success.php");   	
    } else {
    	header("Refresh: 0; url=changes_made_fail.php"); 
    }




?>