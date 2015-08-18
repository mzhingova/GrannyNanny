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
				<div >
				   
						<form name="regform" method="POST" action="registration_validation.php" class="regForm" onsubmit="return validateForm()">
						 <h1>Регистрация</h1>
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
						<label>Кавартал</label>
						<input id="district" type="text" name="district"></input>
						<label>Улица</label>
						<input id="street" type="text" name="street"></input>
						<label>Номер на улица</label>
						<input id="num" type="number" name="num"></input>
						<label>Блок(номер/вход)</label>
						<input id ="flat" type="text" name="flat"></input>
						<label>Телефонен номер*</label>
						<input id="tel" type="tel" name="tel" ></input>
						<?php 
							session_start();
							?>
							<?php
							if (isset($_SESSION["email"])){
								echo "QQ" ;
							} else{}
							?>
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
	<div class="footer">
			<div class="container">
			</div>
		</div>
		<script type="text/javascript" src="assets/js/registration.js"></script>
	</body>
</html>