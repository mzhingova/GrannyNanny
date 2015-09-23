<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = new mysqli('localhost', 'root', '', 'grannynanny');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn ->set_charset("utf8");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>User Profil</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/###.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">
				<?php
				$isAdmin = $_SESSION['status'];
				if ($isAdmin == 'admin') {
					$userID = $_GET["id"];
				} else {
					$userID = $_SESSION['userID'];
				}
				?>
				<?php
				$tableQuery = mysqli_query($conn, "SELECT * FROM parenuser where status='user' AND userID='$userID'")or die("Стана грешкка " . mysql_error());;
				while($row = mysqli_fetch_array($tableQuery)) { ?>
				<br><br>
				
				<h1>Лични Данни</h1><hr>
				<p>Име: 			<?php echo $row['firstname']; ?>	</p>
				<p>Фамилия:			<?php echo $row['lastname']; ?>		</p>
				<p>Email:			<?php echo $row['email']; ?>		</p>
				<p>Град:			<?php echo $row['city']; ?>			</p>
				<p>Адрес:			<?php echo $row['address']; ?>		</p>
				<p>Телефонен номер: <?php echo $row['tel']; ?>			</p>
					
				<p>
				<hr>
				<?php 
				echo "<a href='edit_user.php?firstname=".$row['firstname'].",lastname=".$row['lastname'].",city=".$row['city']."'><button id='btn' type='submit' name='submit' class='btn'>Редактиране на профила</button></a><br>"
				?>
				<?php } ?>
				</p>
				<?php
				$userID = $_SESSION["userID"]
				
				?>
				
			</div>
			<input type="hidden" name="id" value="<?php echo $userID; ?>" />
		</div>
	</div>
	<div class="container">
		<?php include 'includes/footer.php';?>
	</div>
</body>
</html>