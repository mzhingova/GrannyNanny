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
				<b>Edit your Profile</b> &nbsp;&nbsp;&nbsp;&nbsp;<a href="edit_nanny.php"><button id="btn" type="submit" name="submit" class="btn">Edit</button></a><br>
				<?php
				$name = $_SESSION['name'];
				$tableQuery = mysqli_query($conn, "SELECT * FROM parenuser where status='nanny' AND firstname='$name'")or die("Стана грешкка " . mysql_error());;
				while($row = mysqli_fetch_array($tableQuery)) { ?>
				<br><br>

				<b>Personal Information:</b><br><br>
				
				
				<img id="logo" src="assets/img/9f5048566507999f33aefb975a6ead9d.jpg" alt="Logo">
				
				<table width=800px border=0 cellspacing=10><tr>
					<td valign=top>
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
									<b>Age:</b>
								</td>
								<td>
									<?php if($row['pid'] != '') {
										echo date('Y')-(intval($row['pid']/100000000) + 1900);
									} else
									{
										echo '-';
									} ?>
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
							</tr>
							<tr>
								<td>
									<b>Sex:</b>
								</td>
								<td>
									<?php echo $row['gender']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Workout:</b>
								</td>
								<td>
									<?php echo $row['workout']; ?>
								</td>
							</tr>
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
									</tr>
								</td>
								<tr>
									<td>
										<b>Education:</b>
									</td>
									<td>
										<?php echo $row['education']; ?>
									</td>
								</tr>
								<tr>
									<td>
										<b>Tel:</b>
									</td>
									<td>
										<?php echo $row['tel']; ?>
									</td>
								</tr>
								<tr>
									<td>
										<b>Work status:</b>
									</td>
									<td>
										<?php echo $row['work_status']; ?>
									</td>
								</tr>
								<tr>
									<td valign=top>
										<b>Motivation:</b>
									</td>
									<td>
										<div class="wordwrap"> <?php echo $row['motivation']; ?></div>
									</td>
								</tr>
								
								
							</table>
						</td>
					</tr>
				</table><br>
				<td>
					<button class="btn">Ангажирай</button>
				</td>
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