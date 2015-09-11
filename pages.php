<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Pages</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/pages.css">
		
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">
			<div class="newButton"><a href="index.php"><button class="btn">Index</button></a> - Стартовата страница на приложението</div>
			<div class="newButton"><a href="apply_for_nanny.php"><button class="btn">Apply For Nanny</button></a> - Кандидатствай за Nanny</div>
			<div class="newButton"><a href="search.php"><button class="btn">Nanny Search</button></a> - Търси Nanny</div>
			<div class="newButton"><a href="search_one.php"><button class="btn">User Search</button></a> - Търси Потребител</div>
			<div class="newButton"><a href="help.php"><button class="btn">Help</button></a> - Помощ</div>
			<div class="newButton"><a href="about_us.php"><button class="btn">About Us</button></a> - За Нас</div>
			<div class="newButton"><a href="registration.php"><button class="btn">Registration</button></a> - Регистрация за потребител</div>
			<div class="newButton"><a href="login.php"><button class="btn">Login</button></a> - Логни се</div>
			<div class="newButton"><a href="home_page.php"><button class="btn">Home Page</button></a> - Страница с заявки</div>
			<div class="newButton"><a href="calendar.php"><button class="btn">Calendar</button></a> - Календар</div>
			<div class="newButton"><a href="forgotten_password.php"><button class="btn">Forgotten Password</button></a> - Забравена Парола</div>
			<div class="newButton"><a href="nanny_reg.php"><button class="btn">Nanny Registration</button></a> - Регистрирай Nanny</div>
			</div>
			<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
		</body>
	</html>