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
				$name = $_SESSION['name'];
				$tableQuery = mysqli_query($conn, "SELECT * FROM parenuser where status='nanny' AND firstname='$name'")or die("Стана грешкка " . mysql_error());;
				while($row = mysqli_fetch_array($tableQuery)) { ?>
				<br><br>

				
				<b>Лични Данни:</b><br><br>
				
				
				<img id="logo" src="assets/img/9f5048566507999f33aefb975a6ead9d.jpg" alt="Logo"><br>
				
				<table width=800px border=0 cellspacing=10><tr>
					<td valign=top>
						<table  border=0>
							
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
									<b>Възраст:</b>
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
									<b>Email:</b>
								</td>
								<td>
									<?php
									echo $row['email']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Пол:</b>
								</td>
								<td>
									<?php echo $row['gender']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Възможност за работа извън града:</b>
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
									</tr>
								</td>
								<tr>
									<td>
										<b>Образование:</b>
									</td>
									<td>
										<?php echo $row['education']; ?>
									</td>
								</tr>
								<tr>
									<td>
										<b>Телефонен номер:</b>
									</td>
									<td>
										<?php echo $row['tel']; ?>
									</td>
								</tr>
								<tr>
									<td>
										<b>Работен статус:</b>
									</td>
									<td>
										<?php echo $row['work_status']; ?>
									</td>
								</tr>
								<tr>
									<td valign=top>
										<b>Мотивационно поле:</b>
									</td>
									<td>
										<div class="wordwrap"> <?php echo $row['motivation']; ?></div>
									</td>
								</tr>
								
								
							</table>
						</td>
					</tr>
				</table><br>
				
				<?php } ?>
				
				<?php
				$userID = $_SESSION["userID"]
				
				?>
				<a href="edit_nanny.php"><button id="btn" type="submit" name="submit" class="btn">Редактиране на профила</button></a><br>
			</div>
			<input type="hidden" name="id" value="<?php echo $userID; ?>" />
		</div>
	</div>
	<div class="container">
		<?php include 'includes/footer.php';?>
	</div>
</body>
</html>