<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Forgotten Password</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/edit_nanny.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">
				<div class="container">
					<form name="RegForm" action="forgotten_password_validation.php" method="POST" onsubmit="return validateForm()">
					<h3>Имейл адрес: </h3>
					<input type='text' name='email' style="width: 25%; height: 10%;" />
					<label><h3>Нова парола</h3></label>
					<div class="patt">Tрябва да съдържа поне една цифра ,един специален символ , да е с дължина 5-16 символа.</div>
					<input type="password" name="pass"></input>
					<label><h3>Повтори  парола</h3></label>
					<input type="password" name="pass2"></input>
					<button type="submit" name="submit" class="btn">Запиши промените</button><br>
					</form>
				</div>
			</div>
			<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
		</body>
	</html>