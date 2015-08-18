<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login page</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/login_style.css">
	</head>
	<body>
		<?php include 'includes/header.php';?>
		<div class="container">
			<div class="content">
				<h1>Вход </h1>
		        <form action='login_authentication.php' method='post'>
		            <font color="black">
		                <h3>Имейл адрес: </h3><input type='text' name='email' style="width: 25%; height: 10%;" /><br><br>
		                <h3>Парола: </h3><input type='password' name='pass' style="width: 25%; height: 10%;" /><br><br>
		                <input type='submit' style="width: 15%; height: 30px;" name='submit' value='Вход'/><br><br>
		                <a href="forgotten_password.php">Забравена Парола</a><br><br>
		                Нямате акаунт?<a href="registration.php" style="color: black">
		                <span class="glyphicon glyphicon-user"> Регистрирайте се! </span></a>
		            </font>
		        </form>
			</div>
		</div>
		<?php include 'includes/footer.php';?>
	</body>
</html>