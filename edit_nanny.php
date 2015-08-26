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
				<form action="update.php" method="POST">

				<table  border=0 >
					
					<tr>
						<td>
							<b>Име:</b>
						</td>
						<td>
							<input type="text" name="firstname" style="width: 80%">
						</td>
					</tr>
					<tr>
						<td>
							<b>Фамилия:</b>
						</td>
						<td>
							<input type="text" name="lastname" style="width: 80%">
						</td>
					</tr>
						<tr>
						<td>
							<b>Възможност за работа<br> извън града:</b>
						</td>
						<td>
							<select name="workout" style="width: 90%">
								<option value=""></option>
								<option value="Да">Да</option>
								<option value="Не">Не</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<b>Град:</b>
						</td>
						<td>
							<select name="city" style="width: 90%">
								<option value=""></option>
								<option value="София">София</option>
								<option value="Перник">Перник</option>
								<option value="Ямбол">Ямбол</option>
								<option value="Русе">Русе</option>
								<option value="Бургас">Бургас</option>
								<option value="Варна">Варна</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<b>Адрес:</b>
						</td>
						<td>
							<input type="text" name="address" style="width: 80%">
						</tr>
					</td>
					<tr>
						<td>
							<b>Образование:</b>
						</td>
						<td>
							<select name="education" style="width:90%">
								<option value=""></option>
								<option value="Средно">Средно</option>
								<option value="Средно специално">Средно специално</option>
								<option value="Висше">Висше</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<b>Телефонен номер:</b>
						</td>
						<td>
							<input type="text" name="tel" style="width: 80%">
						</td>
					</tr>
					<tr>
						<td>
							<b>Работен статус:</b>
						</td>
						<td>
							<select name="work_status" style="width: 90%">
								<option value=""></option>
								<option value="Пълен">Пълен работен ден </option>
								<option value="Половин">Половин работен ден </option>
								<option value="Безработен">Безработен </option>
							</select>
						</td>
					</tr>
					<tr>
						<td valign=top>
							<b>Мотивационно поле:</b>
						</td>
						<td>
							<div class="wordwrap">
								<textarea id="motivation" type="text" name="motivation" style="width:80%"></textarea>
							</td>
						</tr>
						<!--<tr>
							<td>
								<b>Настояща парола:</b>
							</td>
							<td>
								<input type="password" name="currentPass" style="width: 80%">
							</td>
						</tr> -->
						<tr>
							<td>
								<b>Нова парола:</b>
							</td>
							<td>
								<input type="password" name="pass" style="width: 80%">
							</td>
						</tr>
						<tr>
							<td>
							<!--	<b>Повтори  парола:</b>
							</td>
							<td>
								<input type="password" name="repeatPass" style="width: 80%">
							</td>
						</tr> -->
					</table>
					
					
					<input type="submit" id="submit" name="update" value="З А П И С" class="btn" />
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