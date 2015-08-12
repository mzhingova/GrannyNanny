
<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
   
</head>
<body>

<?php
include('registrationValidation.php');
echo $email;
?>
<form method="POST" action="registrationValidation.php" class="regForm">
	<label >Име</label>
	<input type="text" name="firstname"></input>
	<label>Фамилия</label>
	<input type="text" name="lastname">
	<label>Фрад</label>
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
	<label>Телефонен номер</label>
	<input type="tel" name="tel" ></input>
	<label>Email</label>
	<input type="email" name="email"></input>
	<label>Парола</label>
	<input type="password" name="pass"></input>
	<label>Повтори  парола</label>
	<input type="password" name="pass2"></input>
	<input type="submit" name="submit"></input>
</form>
</body>

</html>