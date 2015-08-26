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
							<b>First name:</b>
						</td>
						<td>
							<input type="text" name="firstname" style="width: 80%">
						</td>
					</tr>
					<tr>
						<td>
							<b>Last name:</b>
						</td>
						<td>
							<input type="text" name="lastname" style="width: 80%">
						</td>
					</tr>
						<tr>
						<td>
							<b>Workout:</b>
						</td>
						<td>
							<select name="city" style="width: 90%">
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
							<b>Address:</b>
						</td>
						<td>
							<input type="text" name="address" style="width: 80%">
						</tr>
					</td>
					<tr>
						<td>
							<b>Education:</b>
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
							<b>Tel:</b>
						</td>
						<td>
							<input type="text" name="tel" style="width: 80%">
						</td>
					</tr>
					<tr>
						<td>
							<b>Work status:</b>
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
							<b>Motivation:</b>
						</td>
						<td>
							<div class="wordwrap">
								<textarea id="motivation" type="text" name="motivation" style="width:80%"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<b>New Password:</b>
							</td>
							<td>
								<input type="password" name="new_password" style="width: 80%">
							</td>
						</tr>
						<tr>
							<td>
								<b>Repeat <br>New Password:</b>
							</td>
							<td>
								<input type="password" name="new_password" style="width: 80%">
							</td>
						</tr>
					</table>
					
					
					<input type="submit" id="submit" name="update" value="update" class="btn" />
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