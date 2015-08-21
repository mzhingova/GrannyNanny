<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Начална страница</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/index_style.css">
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
							<h3>Като потребител ще можете да:</h3><br>
							Търсите Nanny които да наемете<br>
							Разглеждате профилите на Nanny<br>
						    Коментирате и оценявате представянето на Nanny с който сте работили<br><br>
							<a href="registration.php">Регистрирай се</a>
						</div>
						<div class="col3">
							<h3>Като Nanny ще можете да:</h3><br>
							Получавате предложения за работа от нашите потребители<br>
							Управлявате своя собствен работен календар<br>
							Бъдете най-доброто Nanny <br><br>
							
							<a href="apply_for_nanny.php">Кандидатствай за Nanny</a>
						</div>
					</div>
					<img src="assets/img/nanny1.jpg" alt="nanny">
				</div>
				
					<div class="container">
						<?php include 'includes/footer.php';?>
					</div>
				
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
		<script src="assets/js/main.js">
	</body>
</html>