﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Messages</title>
		<!-- Override CSS file - add your own CSS rules -->
		
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<link rel="stylesheet" href="assets/css/messages_style.css"> 
			<div class="content">
		<div class="wrapper">
		<?php require_once "booking_requests_navigation.php";?>
		 
		<section class="main">
		  
		   
		   <?php if (isset($_SESSION['status']) && ( $_SESSION['status'] == "nanny")) {
			   require_once "book_nanny_message.php";
			   
			   
			 }
		   else  if (isset($_SESSION['status']) && ( $_SESSION['status'] == "user")) {
			   require_once "user_booking_message.php";
		   }else
		   {
		   	}
		   	?>
		  </section>
		  
		 
		  
		</div>
		</div>
			</div>
			
					<div class="container">
					
				<?php include 'includes/footer.php';?>
			</div>
			<script src="assets/js/home_page.js"></script>
		</body>
	</html>