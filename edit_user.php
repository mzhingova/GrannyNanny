<?php
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
		} else if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")) {
			session_destroy();
			header('Location: login.php');
		}
			$isAdmin = $_SESSION['status'];
			if ($isAdmin == 'admin') {
				$userID = $_GET["id"];
			} else {
				$userID = $_SESSION['userID'];
			}
			?>
			<form name="regform" action="updateUser.php" method="POST" onsubmit="return validateForm()" enctype='multipart/form-data'>
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
				<div class="patt">Може да бъде между 5 и 50 символа включително.</div>
				<input type="text" name="address"></input>

				<b><label>Телефонен номер</label></b>
				<div class="patt">Може да бъде между 5 и 10 цифри включително.</div>
				<input type="tel" name="tel" ></input>

				<b><label>Настояща парола</label></b>
				<input type="password" name="password"></input>

				<b><label>Нова парола</label></b>
				<div class="patt">Tрябва да съдържа поне една цифра ,един специален символ , да е с дължина 5-16 символа.</div>
				<input type="password" name="pass"></input>
				<b><label>Повтори  парола</label></b>
				<input type="password" name="pass2"></input>
				<input type="hidden" name="userID" value="<?php echo $userID?>">
				<button type="submit" name="submit" class="btn">Запиши промените</button><br><br><br>
			</div>

	<?php     $get_current_pass = mysqli_query($conn, "SELECT pass FROM parenuser WHERE userID='$userID'");
    $row = mysqli_fetch_object($get_current_pass);
    $current_pass = $row->pass; ?>
 	<input type="hidden" name="current_pass" value="<?php echo $current_pass;?>">
			
			<?php $userID = $_SESSION["userID"]?>
			<input type="hidden" name="id" value="<?php echo $userID;?>">
		</form>
	</div>
</div>

<div class="container">
	<?php include 'includes/footer.php';?>
</div>
<script type="text/javascript" src="assets/js/edit_user.js"></script>
</body>
</html>