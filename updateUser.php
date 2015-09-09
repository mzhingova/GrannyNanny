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
$conn ->set_charset("utf8");
?>
<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$isAdmin = $_SESSION['status'];
$password = $_POST['password'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$current_pass = $_POST['current_pass'];
$counter = 0;

if (isset($_POST['submit'])) {
	if ($isAdmin == 'admin') {
		$userID = $_POST['userID'];
	} else {
		$userID = $_SESSION['userID'];
	}

if (!empty($firstname)) {
    if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $firstname)) {
        $query = mysqli_query($conn, "UPDATE parenuser SET `firstname`='$firstname' WHERE userID='$userID'") or die(mysql_error());
        $counter++;
    } else {
        echo "Моля въведете валидно име.";
    }
}
if (!empty($lastname)) {
    if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $lastname)) {
        $query = mysqli_query($conn, "UPDATE parenuser SET `lastname`='$lastname' WHERE userID='$userID'") or die(mysql_error());
        $counter++;
    } else {
        echo "Моля въведете валидна фамилия.";
    }
}
if (!empty($tel)) {
    if (preg_match("/^[0-9]{5,10}$/i", $tel)) 
    {
        $query = mysqli_query($conn, "UPDATE parenuser SET `tel`='$tel' WHERE userID='$userID'") or die(mysql_error());
        $counter++;
    } else {
        echo "Моля въведете валиден телефонен номер.";
    }
}
if(!empty($city))
{
    mysqli_query($conn, "UPDATE parenuser SET `city`='$city' WHERE userID='$userID'") or die(mysql_error());
    $counter++;
}
if(!empty($address))
{
    if (preg_match("/^.{5,50}$/i", $address)) {
    $query = mysqli_query($conn, "UPDATE parenuser SET `address`='$address' WHERE userID='$userID'") or die(mysql_error());
    $counter++;
    } else {
        echo ("Адресът не може да бъде по-малко от 5 символа и повече от 50.");
    }
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
}
if ($counter>0) {
echo "Всички промени бяха успешно запазени ! ";     
    } else {
        echo "Не бяха направени промени по профилът. ";
    }

if ($isAdmin == 'admin') {
header("Refresh: 3; url=search_one.php");
} else {
header("Refresh: 3; url=user.php");
}


?>