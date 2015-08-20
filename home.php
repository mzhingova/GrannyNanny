
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link rel="stylesheet" href="assets/css/main_style.css">
		<link rel="stylesheet" href="assets/css/home_style.css">
	</head>
	<body>
		<?php include 'includes/header.php';?>

		<div class="content">
			<div class="container">
				<?php echo "Hello " . ($_SESSION["name"]) . " " . ($_SESSION["lastname"]) . " welcome to your Home page!";?>
				
<br><br><br>

<?php if(isset($_SESSION['status']) && ($_SESSION['status']=="admin")) {?>
<div><img src="assets/img/chart.jpg" alt="chart"></div>
<?php } ?>







			</div>
		</div>
		<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
	</body>
</html>
