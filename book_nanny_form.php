	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Search</title>
	<!-- Override CSS file - add your own CSS rules -->
	
	 <link rel="stylesheet" href="assets/css/site.css">
	 <link rel="stylesheet" href="assets/css/pikaday.css">
</head>
<body>
	<div class="container">
		<?php include 'includes/header.php';?>
		<div class="content">
		<label>Град</label>
		<form name="booking"   action="book_nanny.php"  method="POST">
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
				<!--- calendar-->
				 <div class="daterange">
					<label for="start">Start:</label>
					<br>
					<input type="text" id="start">
				</div>

				<div class="daterange">
					<label for="end">End:</label>
					<br>
					<input type="text" id="end">
				</div>

				<button type="submit" name="submit" class="btn">Изпрати заявка</button>
				
				</form>
				
				
			</div>
			 <script src="assets/js/pikaday.js"></script>
			 <script src="assets/js/date_range.js"></script>
			 <script>
    
    </script>
	
			<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
		</div>
		</body>
		</html>