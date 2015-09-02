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
			
			<div>Всички
			</div>
			<div>Приети
			</div>
			<div>Отказани
			</div>
			<div>Чакащи
			</div>
			
			</div>
		
		</aside>
		 
		  <section class="main">
		   <h1 class="header">Header</h1>
		   <?php require_once "book_nanny_message.php"?>
		  </section>
		  
		 
		  
		</div>
		</div>
			</div>
			
					<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
			
		</body>
	</html>