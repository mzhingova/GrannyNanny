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
			<h1>Търси по:</h1><br>
			Име
			<input type="text" name="firstname"></input>
			<label>Град</label>
			<select class="city" name="city">
				<option value=""></option>
				<option value="София">София</option>
				<option value="Перник">Перник</option>
				<option value="Ямбол">Ямбол</option>
				<option value="Русе">Русе</option>
				<option value="Бургас">Бургас</option>
				<option value="Варна">Варна</option>
			</select>
			<label>Години</label>
			<select name="age">
				<option value=""></option>
				<option value="18-25">18-25</option>
				<option value="26-35">26-35</option>
				<option value="36-45">36-45</option>
				<option value="46+">46+</option>
			</select>
			<label>Пол</label>
			<select name="gender">
				<option value=""></option>
				<option value="Мъж">Мъж</option>
				<option value="Жена">Жена</option>
			</select>
			<div id="rating">
				<label>Рейтинг</label>
				<input type="checkbox" name="rating" value="1" ></input>
			</div>
			<button class="btn">Търси</button>
			<div class="container"><br>
				<?php include 'includes/footer.php';?>
			</div>
		</body>
		</html>