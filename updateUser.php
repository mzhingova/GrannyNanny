<?php
 session_start();
 ?>

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

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$isAdmin = $_SESSION['status'];

if (isset($_POST['submit'])) {
	if ($isAdmin == 'admin') {
		$userID = $_POST['userID'];
	} else {
		$userID = $_SESSION['userID'];
	}


if(!empty($firstname))
{
	if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $firstname)) {
    mysqli_query($conn, "UPDATE parenuser SET `firstname`='$firstname' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your First name");
}
} 
if(!empty($lastname))
{
	if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $lastname)) {
    mysqli_query($conn, "UPDATE parenuser SET `lastname`='$lastname' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your Last name");
	}
} 
if(!empty($tel))
{
	if (preg_match("/^[0-9]{5,10}$/i", $tel)) {
    mysqli_query($conn, "UPDATE parenuser SET `tel`='$tel' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your Telephone");
	}
} 
 
if(!empty($city))
{
    mysqli_query($conn, "UPDATE parenuser SET `city`='$city' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your City");
} 

if(!empty($address))
{
    mysqli_query($conn, "UPDATE parenuser SET `address`='$address' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your Address");
} 

header("Refresh: 1; url=user.php");

}
?>

