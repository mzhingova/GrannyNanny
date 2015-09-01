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
$conn->set_charset("utf8");

?>
<?php


$to      = 'm.gyurov@abv.bg';
$subject = 'the subject';
$message = 'hello';

$headers = "From: example@example.com";

$headers = "MIME-Version: 1.0" . "\r\n" .
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
$headers .= "From: QQ@gmail.com" . "\r\n" .

$success = mail($to,$subject,$message,$headers);
   if (!$success) {
  echo "Mail to " . $to . " failed .";
   }else {
  echo "Success : Mail was send to " . $to ;
   }
 header("Refresh: 5; url=apply_for_nanny.php");
?>
