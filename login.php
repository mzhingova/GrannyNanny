<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login Page</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/login_style.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">
			<img class="loginimg"src="assets/img/loginNanny.jpg"/>
				<h1>Вход </h1>
				<form action='login_authentication.php' method='post'>
					<font color="black">
					<h3>Имейл адрес: </h3><input type='text' name='email' style="width: 25%; height: 10%;" /><br>
					<h3>Парола: </h3><input type='password' name='pass' style="width: 25%; height: 10%;" />
					<button id="btn" type="submit" name="submit" class="btn">Вход</button><br><br>
					<a href="registration.php" >
						 Натиснете тук за Регистрация!</a> <br>
					<a href="forgotten_password.php">Натиснете тук за Забравена Парола</a><br><br>
					
						
				
					

					
						</font>
					</form>
				</div>
			</div>
			<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
		</body>
	</html>