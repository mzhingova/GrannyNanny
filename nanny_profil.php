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
	<title>Nanny Profil</title>
	<!-- Override CSS file - add your own CSS rules -->
	<link rel="stylesheet" href="assets/css/nanny_profil.css">
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
			
			$tableQuery = mysqli_query($conn, "SELECT * FROM parenuser where status='nanny' AND userID='$userID'")or die("Стана грешкка " . mysql_error());
			while($row = mysqli_fetch_array($tableQuery)) { 
		?>
			
			
			
			<h1>Лични Данни</h1><hr>
			<figure>
				<img  class="profileimg"src="uploads/<?php echo $row['photo'] ?>" target="_blank" alt="avatar" />
				</figure>
			<div class="information">
						<p>		Име:	<?php echo $row['firstname']; ?>	</p>
						<p>		Фамилия: <?php echo $row['lastname']; ?>		</p>
						<p>Възраст:	<?php if($row['pid'] != '') { echo date('Y')-(intval($row['pid']/100000000) + 1900);
								
								} else
								{
									echo '-';
								} ?>										
						</p>
						<p>Email:		<?php echo $row['email']; ?>		</p>
						<p>Пол:			<?php echo $row['gender']; ?>		</p>
						<p>Възможност за работа извън града:		<?php echo $row['workout']; ?>	</p>
						<p>Град:		<?php echo $row['city']; ?>			</p>
						<p>Адрес:		<?php echo $row['address']; ?>		</p>
						<p>Образование: <?php echo $row['education']; ?>	</p>
						<p>Телефонен номер: <?php echo $row['tel']; ?>		</p>
						<p>Работен статус:	<?php echo $row['work_status']; ?>						</p>
						<p class="wordwrap">Мотивационно поле:	<?php echo $row['motivation']; ?>	</p>
						<p>Рейтинг: 	 <?php if($row['average'] == 0){	echo "-";
			} else { echo round($row['average'],1) . "/5"; } ?>		</p>

			<?php } ?>
			<div>
			<hr>
			
			
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