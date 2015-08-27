<?php
$pageTitle = 'Log-in';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = new mysqli('localhost', 'root', '', 'grannynanny');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn ->set_charset("utf8");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Edit Nanny</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/###.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">
				<form action="update.php" method="POST" onsubmit="return validateForm()">

				
						<b><label class="wtf">Име</label></b>
						<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
						<input type="text" name="firstname"></input>
						<b><label>Фамилия</label></b>
						<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
						<input type="text" name="lastname">
						<b><label >Ваша снимка</label></b>
						<input type="file" name="image" >
						
						<b><label>Град</label></b>
						<select name="city">
						<option value=""></option>
						<option value="София">София</option>
						<option value="Перник">Перник</option>
						<option value="Ямбол">Ямбол</option>
						<option value="Русе">Русе</option>
						<option value="Бургас">Бургас</option>
						<option value="Варна">Варна</option>
						</select>
						<b><label>Адрес</label></b>
						<input type="text" name="address"></input>

						<b><label>Телефонен номер</label></b>
						<input type="tel" name="tel" ></input>

						<b><label>Образование</label></b>
						<select name="education">
						<option value=""></option>
						<option value="Средно">Средно</option>
						<option value="Средно специално">Средно специално</option>
						<option value="Висше">Висше</option>
						</select>
						<div>
						<b><label>Работен статус</label></b><br>
						<select name="work_status">
						<option value=""></option>
						<option value="Пълен">Пълен работен ден</option>
						<option value="Половин">Половин работен ден</option>
						<option value="Безработен">Безработен</option>
						</select>
						</div>
						<div id="workout">
						<b><label>Възможност за работа извън града</label></b>
						<select name="workout">
							<option value=""></option>
							<option value="Да">Да</option>
							<option value="Не">Не</option>
						</select>
						</div><br>

						<b><label>Мотивационно поле</label></b><br>
						<textarea id="motivation" type="text" name="motivation" ></textarea><br>

						
						<b><label>Парола</label></b>
						<div class="patt">Tрябва да съдържа поне една цифра ,един специален символ , да е с дължина 5-16 символа.</div>
						<input type="password" name="pass"></input>
						<b><label>Повтори  парола</label></b>
						<input type="password" name="pass2"></input>
						<button type="submit" name="submit" class="btn">Регистрирай</button><br><br><br>
				</div>

<?php
$userID = $_SESSION["userID"]

				 
				?>
				<input type="hidden" name="id" value="<?php echo $userID; ?>">
</form>
			</div>
		</div>
		
		<div class="container">
			<?php include 'includes/footer.php';?>
		</div>
	</body>
</html>