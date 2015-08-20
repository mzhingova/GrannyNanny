<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link rel="stylesheet" href="assets/css/main_style.css">
	</head>
	<body>
		<?php include 'includes/header.php';?>
		<div class="content">
			<div class="container">
				<?php echo "Hello " . ($_SESSION["name"]) . " " . ($_SESSION["lastname"]) . " welcome to your profile page!";?>
				<a href="logout.php">Click here to log out</a>
			</div>
		</div>
		<?php include 'includes/footer.php';?>
	</body>
</html>
