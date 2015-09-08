<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/registration_style.css">
	</head>
	<body>
		<div class="container">
		<?php include 'includes/header.php';?>
		
			<div class="content">
			
					<div class="container">
					<div>
					
						<form name="regform" method="POST" action="registration_validation.php" class="regForm" onsubmit="return validateForm()">
							 <h1>Регистрация</h1>
							 <img class="filler" alt="user image" src="assets/img/user.png"/>
							<label class="wtf">Име*</label>
							<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
							<input  id="fname"type="text" name="firstname"></input>
							<label>Фамилия*</label>
							<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
							<input id="lname" type="text" name="lastname">
							<label>Град*</label>
							<select id="city" name="city">
							<option value="">Град</option>
							<option value="София">София</option>
							<option value="Перник">Перник</option>
							<option value="Ямбол">Ямбол</option>
							<option value="Русе">Русе</option>
							<option value="Бургас">Бургас</option>
							<option value="Варна">Варна</option>
							</select>
							<label>Адрес*</label>
							<div class="patt">Може да бъде между 5 и 50 символа включително.</div>
							<input id="address" type="text" name="address"></input>
							<label>Телефонен номер*</label>
							<div class="patt">Може да бъде между 5 и 10 цифри включително.</div>
							<input id="tel" type="tel" name="tel" ></input>

							<label>Email*</label>
							<input id="email" type="email" name="email"></input>
							<label>Парола*</label>
							<div class="patt">Tрябва да съдържа поне една цифра ,един специален символ , да е с дължина 5-16 символа.</div>
							<input id="pass" type="password" name="pass"></input>
							<label>Повтори  парола*</label>
							<input id="pass2" type="password" name="pass2"></input>
							<button id="btn" type="submit" name="submit" class="btn">Регистрирай</button>
						</form>
					</div>
			</div>
		</div>
	<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
		<script type="text/javascript" src="assets/js/registration.js"></script>
	</body>
</html>