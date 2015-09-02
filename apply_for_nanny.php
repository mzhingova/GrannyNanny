<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Apply for Nanny</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/apply_for_nanny.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">

				<img src="assets/img/sitter.jpg" id="picture" alt="sitter" />
			

				<form action="apply_for_nanny_backend.php" method="POST" ><br>
					<label>Искате да станете Nanny при нас моля изпратете ни CV</label><br><br>
						<input type="file" name="file">
				<label>Допълнителна информация</label><br>
					<textarea id="motivation" type="text" name="motivation" ></textarea>
					<middle><button type="submit" name="submit" class="btn">Изпрати</button></middle><br>
			
				</form>

				
			</div>
		</div>
		
		<div class="container">
			<?php include 'includes/footer.php';?>
		</div>
	</body>
</html>

