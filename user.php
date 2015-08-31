<?php
$pageTitle = 'Log-in';
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
		<title>Nanny Profil</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/###.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">
				<?php
				$userID = $_SESSION['userID'];
				$tableQuery = mysqli_query($conn, "SELECT * FROM parenuser where status='user' AND userID='$userID'")or die("Стана грешкка " . mysql_error());;
				while($row = mysqli_fetch_array($tableQuery)) { ?>
				<br><br>

				
				<b>Лични Данни:</b><br><br>
				
<table  border=0>
							
							<tr>
								<td>
									<b>First name:</b>
								</td>
								<td>
									<?php
									echo $row['firstname']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Last name:</b>
								</td>
								<td>
									<?php
									echo $row['lastname']; ?>
								</td>
							</tr>
							
							<tr>
								<td>
									<b>Email Address:</b>
								</td>
								<td>
									<?php
									echo $row['email']; ?>
								</td>
							
						</table>
						
						<td valign=top>
							<table border=0>
								
								<tr>
									<td>
										<b>City:</b>
									</td>
									<td>
										<?php echo $row['city']; ?>
									</td>
								</tr>
								<tr>
									<td>
										<b>Address:</b>
									</td>
									<td>
										<?php
										echo $row['address']; ?>
								</td>
							
								
							</table>
							</table>
						
						<td valign=top>
							<table border=0>
								
								<tr>
									<td>
										<b>Телефонен Номер:</b>
									</td>
									<td>
										<?php echo $row['tel']; ?>
									</td>
								</tr>
								<tr>
								
							</table><br>
				
				<?php } ?>
				
				<?php
				$userID = $_SESSION["userID"]
				
				?>
				<a href="edit_user.php"><button id="btn" type="submit" name="submit" class="btn">Редактиране на профила</button></a><br>
			</div>
			<input type="hidden" name="id" value="<?php echo $userID; ?>" />
		</div>
	</div>
	<div class="container">
		<?php include 'includes/footer.php';?>
	</div>
</body>
</html>









