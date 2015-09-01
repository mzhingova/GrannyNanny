<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Apply for Nanny</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/###.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">
				<form action="apply_for_nanny_backend.php" method="POST" >
					<label >Ако искате да станете Nanny при нас моля изпратете ни SV</label>
					<input type="file" name="file" >
					<button type="submit" name="submit" class="btn">Изпрати</button><br><br><br>
				</form>
			</div>
		</div>
		
		<div class="container">
			<?php include 'includes/footer.php';?>
		</div>
	</body>
</html>