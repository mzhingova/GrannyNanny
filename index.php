<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/main_style.css">
	</head>
	<body>
		<p class="main">
			<div class="container">
				<?php include 'includes/header.php';?>
				<div class="content">
					<div class="container">
						<div class="col1">
							<center><h2>Добре Дошли!</h2></center><br>
						</div></p>
					</div>
				</div>
				<div class="content">
					<div class="container">
						<div class="col2">
							<h3>As a User you can:</h3><br>
							Search for Nanny to hire<br>
							See full profile of Nannies<br>
							Comment and rate Nannies you worked with<br>
							<br><a href="registration.php">Registration</a>
						</div>
						<div class="col3">
							<h3>As a Nanny you can:</h3><br>
							Recieve job offers from users<br>
							Manage your availability from personal calendar<br>
							Be visible in our Nanny Profiles page<br><br>
							
							<a href="#">Apply for Nanny</a>
						</div>
					</div>
					<img src="assets/img/nanny1.jpg" alt="nanny">
				</div>
				<div class="content">
					<div class="container">
						<div class="footer">
							<a href="https://twitter.com/">
							<img id="social_media" title="Twitter" alt="Twitter" src="assets/img/twitter.png"/></a>
							<a href="https://facebook.com">
							<img id="social_media" title="Facebook" alt="Facebook" src="assets/img/facebook.png"/></a>
							<style:"color=white"><?php include 'includes/footer.php';?></style>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
		<script src="assets/js/main.js">
	</body>
</html>