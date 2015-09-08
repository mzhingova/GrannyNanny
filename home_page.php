<!DOCTYPE html>
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
		<aside class="aside aside-1">
			<div class="assidenav">
			
			<div><a href="home_page.php">Всички</a></div>
			<div><a href="booking_accepted_requests.php">Приети</a></div>
			<div><a href="booking_rejected_requests.php">Отказани</a></div> 
			<div><a href="booking_pending_requests.php">Чакащи</a></div>
			
			</div>
		
		</aside>
		 
		  <section class="main">
		   <h1 class="header">Заявки:</h1>
		   
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
			
		</body>
	</html>