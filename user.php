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
	$userID = htmlspecialchars($_GET["id"]);

} else {
	$userID = $_SESSION['userID'];
}
?>

				<?php
				
				$tableQuery = mysqli_query($conn, "SELECT * FROM parenuser where status='user' AND userID='$userID'")or die("Стана грешкка " . mysql_error());;
				while($row = mysqli_fetch_array($tableQuery)) { ?>
				<br><br>

				
				<b>Лични Данни:</b><br><br>
				
<table  width=800px border=0 cellspacing=10>
							
							<tr>
								<td>
									<b>Име:</b>
								</td>
								<td>
									<?php
									echo $row['firstname']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Фамилия:</b>
								</td>
								<td>
									<?php
									echo $row['lastname']; ?>
								</td>
							</tr>
							
							<tr>
								<td>
									<b>Email:</b>
								</td>
								<td>
									<?php
									echo $row['email']; ?>
								</td>
							</tr>
						
						
								
								<tr>
									<td>
										<b>Град:</b>
									</td>
									<td>
										<?php echo $row['city']; ?>
									</td>
								</tr>

								<tr>
									<td>
										<b>Адрес:</b>
									</td>
									<td>
										<?php
										echo $row['address']; ?>
										</td>
								</tr>
								
				<td></td><td></td>
						
								
								<tr>
									<td>
										<b>Телефонен номер:</b>
									</td>
									<td>
										<?php echo $row['tel']; ?>
									</td>
								</tr>
								
							</table><br>
				<a href="edit_user.php"><button id="btn" type="submit" name="submit" class="btn">Редактиране на профила</button></a><br>
				<?php } ?>
				
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









