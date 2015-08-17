<?php
session_start();
?>
<?php

$pageTitle = ' Profile page';

echo "Hello ".($_SESSION["name"])." welcome to your profile page!";

?>
<!DOCTYPE html>
<html lang="en">
	<head>

	</head>
	<body>
		
<a href="Logout.php">
click here to log out</a>


	</body>
	</html>
	