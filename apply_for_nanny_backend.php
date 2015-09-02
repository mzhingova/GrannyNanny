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


$to      = 'example@example.com';
$subject = 'the subject';
$message = 'hello';

$headers = "From: example@example.com";

$headers = "MIME-Version: 1.0" . "\r\n" .
$headers = "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
$headers = "From: QQ@gmail.com" . "\r\n" .

$success = mail($to,$subject,$message,$headers);
   if (!$success) {
  echo "Mail to " . $to . " failed .";
   }else {
  echo "Success : Mail was send to " . $to ;
   }

   
   if (!empty($motivation)) {
		if (preg_match("/^.{20,255}$/i", $motivation)) {
		} else {
			echo "Мотивационното писмо не може да съдържа повече от 255 и по малко от 20 символа.";
		}
	}
 header("Refresh: 5; url=apply_for_nanny.php");
?>