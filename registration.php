<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
		<div class="header">
			<div class="container">
				<h1 class="header-heading">GrannyNanny</h1>
			</div>
		</div>
		<div class="nav-bar">
			<div class="container">
				<ul class="nav">
					<li><a href="#">Granny profile</a></li>
					<li><a href="#">Search</a></li>
					<li><a href="#"></a></li>
				</ul>
			</div>
		</div>
		<div class="container">
				<div class="main">
				    <h1>Регистрация</h1>
						<form name="regform" method="POST" action="registrationValidation.php" class="regForm" onsubmit="return validateForm()">
						<label>Име*</label>
						<input type="text" name="firstname"></input>
						<label>Фамилия*</label>
						<input type="text" name="lastname">
						<label>Gрад*</label>
						<select name="city">
						<option value="">Град</option>
						<option value="София">София</option>
						<option value="Перник">Перник</option>
						<option value="Ямбол">Ямбол</option>
						<option value="Русе">Русе</option>
						<option value="Бургас">Бургас</option>
						<option value="Варна">Варна</option>
						</select>
						<label>Кавартал</label>
						<input type="text" name="district"></input>
						<label>Улица</label>
						<input type="text" name="street"></input>
						<label>Номер на улица</label>
						<input type="number" name="num"></input>
						<label>Блок(номер/вход)</label>
						<input type="text" name="flat"></input>
						<label>Телефонен номер*</label>
						<input type="tel" name="tel" ></input>
						<label>Email*</label>
						<input type="email" name="email"></input>
						<label>Парола*</label>
						<input type="password" name="pass"></input>
						<label>Повтори  парола*</label>
						<input type="password" name="pass2"></input>
						<input type="submit" name="submit" class="btn></input>
					</form>
				</div>
			</div>
	<div class="footer">
			<div class="container">
			</div>
		</div>
		<script src="assets/js/registration.js"></script>
	</body>
</html>