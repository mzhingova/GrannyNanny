	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Search</title>
	<!-- Override CSS file - add your own CSS rules -->
	<link rel="stylesheet" href="assets/css/search_style.css">
</head>
<body>
	<div class="container">
		<?php include 'includes/header.php';?>
		<div class="content">
		<label>Град</label>
		<form method="" id="">
				<select class="city" name="city">
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
				<label>Брой деца</label>
				<input type="number" name="childnum"></input>
				<label>Допълнителна информация</label>
				<textarea name="informafion">
				</textarea><br>
				<label>Дата</label>
				От<input type="date" name="fromdate"></input>
				До<input type="date" name="тоmdate"></input>
				<button type="submit">QQ</button>
				</form>
				
				
		</div>
			<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
		</div>
		</body>
		</html>