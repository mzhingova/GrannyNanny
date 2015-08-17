<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/nany_registration_style.css">
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
					<li><a href="registration.php">Регистрирайте се.</a></li>
					<li><a href="#">Granny profile</a></li>
					<li><a href="#">Search</a></li>
					<li><a href="nanny_reg.php">Nanny registration</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
				<div >
				   
						<form name="regform" method="POST" action="nanny_validation.php" class="regForm" onsubmit="return validateForm()">
						 <h1>Регистрация</h1>
						<label class="wtf">Име*</label>
						<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
						<input type="text" name="firstname"></input>
						<label>Фамилия*</label>
						<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
						<input type="text" name="lastname">
						<label>Град*</label>
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
						<label>ЕГН*</label>
						<input type="number" name="pid" ></input>
						
						<label>Образование*</label>
						<select name="education">
						<option value=""></option>
						<option value="Средно">Средно</option>
						<option value="Средно специално">Средно специално"</option>
						<option value="Висше">Висше</option>
						</select>
						<div>
						<label>Работен статус*</label><br>
						<select name="work_status">
						<option value=""></option>
						<option value="Пълен">Пълен работен ден </option>
						<option value="Половин">половин работен ден </option>
						<option value="Безработен">Безработен </option>
						</select>
						</div>
						<div id="gender">
						<label>Пол*</label><br>
						Жена<input type="radio" name="gender" value="fmale" ></input>
						Мъж <input type="radio" name="gender" value="male" ></input>
						</div>
						<div id="workout">
						<label>Възможност за работа извън града</label>
						<input type="checkbox" name="workout" value="да" ></input>
						</div>
						
						<label>Мотивационно поле*</label>
						<input type="text" name="motivation" ></input>
						
						<label>Email*</label>
						<input type="email" name="email"></input>
						<label>Парола*</label>
						<div class="patt">Tрябва да съдържа поне една цифра ,един специален символ , да е с дължина 5-16 символа.</div>
						<input type="password" name="pass"></input>
						<label>Повтори  парола*</label>
						<input type="password" name="pass2"></input>
						<input type="submit" name="submit" class="btn">Регистрирай</input>
					</form>
				</div>
			</div>
	<div class="footer">
			<div class="container">
			</div>
		</div>
		
		<script type="text/javascript" src="assets/js/nany_registration.js"></script>
	</body>
</html>