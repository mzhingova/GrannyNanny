<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>About us</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/###.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">



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
<?php $isAdmin = $_SESSION['status'];  
if ($isAdmin == 'admin') {
header("Refresh: 3; url=home.php");
} else if ($isAdmin == 'nanny') {
header("Refresh: 3; url=nanny_profil.php");
} else {
header("Refresh: 3; url=user.php");
}

?>
<h1>Не бяха направени промени по профилът !</h1>


							</div>
		</div>
		<div class="container">
			<?php include 'includes/footer.php';?>
		</div>
	</body>
</body>
</html>