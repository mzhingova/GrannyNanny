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
$isAdmin = $_SESSION['status'];
if ($isAdmin == 'admin') {
	$currentID = htmlspecialchars($_GET["id"]);

} else {
	$userID = $_SESSION['userID'];
}
?>

			<form action="updateUser.php" method="POST" onsubmit="return validateForm()">
				<b><label class="wtf">Име</label></b>
				<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
				<input type="text" name="firstname"></input>
				<b><label>Фамилия</label></b>
				<div class="patt">Mоже да съдържа само букви и да има дължина 2-16 символа.</div>
				<input type="text" name="lastname">
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
</body>
</html>