	<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Book Nanny</title>
	<!-- Override CSS file - add your own CSS rules -->
		<?php
			$pageTitle = 'Book-Nanny-Form';
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
			$conn = new mysqli('localhost', 'root', '', 'grannynanny');
			if (!$conn) {
				die('Could not connect: ' . mysql_error());
				exit;
			}
			$conn ->set_charset("utf8");
			?>
	 <link rel="stylesheet" href="assets/css/book_nanny_form_style.css">
	 
</head>
<body>
	<div class="container">
		<?php include 'includes/header.php';?>
		<div class="content">

		<label>Град</label>
		<form name="book_nanny"   action='book_nanny.php'  method="POST">

				<select class="city" name="city">
					<option value=""></option>
					<option value="София">София</option>
					<option value="Перник">Перник</option>
					<option value="Ямбол">Ямбол</option>
					<option value="Русе">Русе</option>
					<option value="Бургас">Бургас</option>
					<option value="Варна">Варна</option>
				</select>
				<label>Адрес*</label>
				<input type="text" name="address"></input>
				<label>Брой деца*</label>
				<input type="number" name="children"></input>
				<label>Допълнителна информация</label>
				<textarea name="info"></textarea>
				<label>Дата*</label><br>
				<!--- calendar-->
				 <div >
					<label class="daterange" for="start">От:</label>
					
					<input class="daterange" type="text" id="start" name="startDate">
				</div>

				<div >
					<label class="daterange" for="end">До:</label>
					
					<input class="daterange" type="text" id="end" name="endDate">
				</div><br>


					<?php 
					
					$userID = $_SESSION['userID'];
					$tableQuery = mysqli_query($conn, "SELECT * FROM parenuser where userID='$userID'")or die("Стана грешкка " . mysql_error());;
					while($row = mysqli_fetch_array($tableQuery)) { ?>
					<label>Име</label>
					<input value="<?php echo $row['firstname']; ?>" type="text"  readonly>
					<label>Фамиля</label>
					<input value="<?php echo $row['lastname']; ?>" type="text"  readonly>
					<label>Email</label>
					<input value="<?php echo $row['email']; ?>" type="text"  readonly>
					<label>Телефон</label>
					<input value="<?php echo $row['tel']; ?>" type="text"  readonly>
					

					<?php 
									} 
					?>
				   <button type="submit" name="submit" class="btn">Ангажирай</button>

				<?php
				$_SESSION['nannyID'] = $_GET["id"];				 
				?>
				<input type="hidden" name="id" value="<?php echo $nannyID; ?>">

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