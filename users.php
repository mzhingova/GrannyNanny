<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Потребители</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/###.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">

<table>
								
<?php
	$conn  = new mysqli("localhost", "root", "", "grannynanny");
			if(! $conn )
			{
				die('Could not connect: ' . mysql_error());
			}
 $displayfirstname = $conn->query("SELECT * FROM parenuser");
$rows = $displayfirstname->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
	echo '<tr>ID : ',$row['userID'],'</tr>','<br>','<tr>First Name : ',$row['firstname'],'</tr>' ,'<br>', '<tr>Last Name : ',$row['lastname'],'</tr>','<br>','<tr>Email : ', $row['email'],'</tr>','<br>',
'<tr>Gender : ',$row['gender'],'</tr>','<br>','<tr>Phone Number : ',$row['tel'],'</tr>','<br>' , '<br>'	;

}
 ?>


</table>

			</div></div>
			<div class="container">
				<?php include 'includes/footer.php';?>
				
			</div>
		</body>
	</html>