<?php
$pageTitle = 'Log-in';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = new mysqli('localhost', 'root', '', 'grannynanny');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn->set_charset("utf8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Nanny</title>
	<!-- Override CSS file - add your own CSS rules -->
	<link rel="stylesheet" href="assets/css/edit_nanny.css">
</head>
<body>
	<div class="container">
		<?php include 'includes/header.php';?>
		<div class="content">
			<?php
		if (!isset($_SESSION['status'])){
			header('Location: login.php');
		} else if (isset($_SESSION['status']) && ($_SESSION['status'] == "user")) {
			session_destroy();
			header('Location: login.php');
		}

			$isAdmin = $_SESSION['status'];
			if ($isAdmin == 'admin') {
				$currentID = htmlspecialchars($_GET["id"]);

			} else {
				$userID = $_SESSION['userID'];
			}
			?>

			<form name="regform" action="update.php" method="POST" onsubmit="return validateForm()" enctype='multipart/form-data'>
				<label class="wtf">Име</label>
				<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
				<input type="text" name="firstname"></input>
				<label>Фамилия</label>
				<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
				<input type="text" name="lastname">
				<label >Снимка</label>
				<input type="file" name="image" >

				<label>Град</label>
				<select name="city">
					<option value=""></option>
					<option value="София">София</option>
					<option value="Перник">Перник</option>
					<option value="Ямбол">Ямбол</option>
					<option value="Русе">Русе</option>
					<option value="Бургас">Бургас</option>
					<option value="Варна">Варна</option>
				</select>
				<label>Адрес</label>
				<input type="text" name="address"></input>

				<label>Телефонен номер</label>
				<input type="tel" name="tel" ></input>

				<label>Образование</label>
				<select name="education">
					<option value=""></option>
					<option value="Средно">Средно</option>
					<option value="Средно специално">Средно специално</option>
					<option value="Висше">Висше</option>
				</select>
				<div>
					<label>Работен статус</label><br>
					<select name="work_status">
						<option value=""></option>
						<option value="Пълен">Пълен работен ден</option>
						<option value="Половин">Половин работен ден</option>
						<option value="Безработен">Безработен</option>
					</select>
				</div>
				<div id="workout">
					<label>Възможност за работа извън града</label>
					<select name="workout">
						<option value=""></option>
						<option value="Да">Да</option>
						<option value="Не">Не</option>
					</select>
				</div><br>

				<label>Мотивационно поле</label><br>
				<textarea id="motivation" type="text" name="motivation" ></textarea><br>

				<label>Настояща парола</label>
				<input type="password" name="password"></input>

				<label>Нова парола</label>
				<div class="patt">Tрябва да съдържа поне една цифра ,един специален символ , да е с дължина 5-16 символа.</div>
				<input type="password" name="pass"></input>
				<label>Повтори  парола</label>
				<input type="password" name="pass2"></input>
				<input type="hidden" name="userID" value="<?php echo $currentID?>">
				<button type="submit" name="submit" class="btn">Запиши промените</button><br><br><br>
			</div>

			<?php $userID = $_SESSION["userID"]?>
			<input type="hidden" name="id" value="<?php echo $userID;?>">
		</form>
	</div>
</div>

<div class="container">
	<?php include 'includes/footer.php';?>
</div>
<script type="text/javascript" src="assets/js/edit_nanny.js"></script>
</body>
</html>