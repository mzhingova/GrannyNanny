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

$id = $_SESSION['id'];
if ($_POST['city']) {
    $country = $_POST['city'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $workout = $_POST['workout'];
    $education = $_POST['education'];
    $tel = $_POST['tel'];
    $work_status = $_POST['work_status'];
    $motivation = $_POST['motivation'];
   
    $sql = mysql_query("UPDATE parenuser SET country='$city', firstname='$firstname', lastname='$lastname', address='$address', workout='$workout', education='$education', tel='tel', work_status='work_status', motivation='motivation' WHERE id='$id'");








?>
<?php } ?>
