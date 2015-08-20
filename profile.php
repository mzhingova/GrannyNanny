 <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/registration_style.css">
	</head>
	<body>
		<div class="container">
		<?php include 'includes/header.php';?>
			<div class="content">
					<div class="container">
					<div >




<?php 
if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny")){
	echo "nanny";?>
	<!-- <a  href='loginout.php' value="izhof" >Профил</a> -->

<?php
} else if(isset($_SESSION['status']) && ($_SESSION['status']=="user")) {
	echo "user"; ?>
		<!-- <a  href='login.php'  >Кандидатствай за Nanny</a> -->
		<?php } else {
			echo "admin"; ?>
		<?php } ?>

		</li>


		

					</div>
			</div>
		</div>
				<div class="container">
				<div class="nav-bar">
		<?php include 'includes/footer.php';?>
	</div>
</div>
		<script type="text/javascript" src="assets/js/registration.js"></script>
	</body>
</html>

<!-- 

<?php
session_start();
?>
<?php

$pageTitle = ' Profile page';

echo "Hello ".($_SESSION["name"])." ".($_SESSION["lastname"])." welcome to your profile page!";

?> -->