<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">

		<!-- icons -->
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/login_style.css">
	</head>
	<body>
		<div class="container">
		<div class="header">
			
				<h1 class="header-heading">GrannyNanny</h1>
			</div>
		</div>
		<div class="container">
		<div class="nav-bar">
			
				<ul class="nav">
					<li><a href="#">Granny profile</a></li>
					<li><a href="#">Search</a></li>
					<li><a href="#"></a></li>
					<li><a href="nanny_reg.php">Nanny registration</a></li>
				</ul>
			</div>
		</div>
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
		<div class="container">
		<div class="footer">
		</div>
	</div>
	</body>
</html>