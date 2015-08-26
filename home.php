
<?php 
$pageTitle = 'Log-in';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli('localhost', 'root', '', 'grannynanny');

if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link rel="stylesheet" href="assets/css/home_style.css">
			</head>
			<body>
				
	
			<div class="container">
			<?php include 'includes/header.php';?>
			<h1 class="welcome">	<?php echo "Hello " . ($_SESSION["name"]) . " " . ($_SESSION["lastname"]) . " welcome to your Home page!";?> </h1>
				


			<?php if(isset($_SESSION['status']) && ($_SESSION['status']=="admin")) {


			?>
			<div class="count"> <?php
			$queryUser = $conn->prepare("SELECT status COUNT FROM parenuser WHERE status='user'");

			if (!$queryUser) {
					echo mysqli_error($conn);
				}

			$queryUser->execute();
			$queryUser->store_result();
			$rows = $queryUser->num_rows;

			echo "Общ брой регистрирани потребители: ". $rows;

			?> </div>
			<div class="count"> <?php
			$queryNanny = $conn->prepare("SELECT status COUNT FROM parenuser WHERE status='nanny'");
			if (!$queryNanny) {
					echo mysqli_error($conn);
				}
			$queryNanny->execute();
			$queryNanny->store_result();
			$rows = $queryNanny->num_rows;

			echo "Общ брой регистрирани nannies: ". $rows;
			?></div>



			<div><img class="chart" src="assets/img/chart.jpg" alt="chart"></div>
			<?php } ?>

					</div>
					</div>
					<div class="container">
							<?php include 'includes/footer.php';?>
						</div>
				</body>
			</html>
