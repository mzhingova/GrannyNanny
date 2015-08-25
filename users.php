<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Потребители</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/###.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
//prints user id
	echo '<tr>ID : ','<div contenteditable="true">',$row['userID'],'</div>','</tr>','<br>',
	//prints user First Name
	'<tr>First Name : ',$row['firstname'],'</tr>' ,'<br>', 
	//Prints user Last Name
	'<tr>Last Name : ',$row['lastname'],'</tr>','<br>',
	//prints user Email
	'<tr>Email : ', $row['email'],'</tr>','<br>',
	//prints user Gender
'<tr>Gender : ',$row['gender'],'</tr>','<br>',
	//prints user Phone number
'<tr>Phone Number : ',$row['tel'],'</tr>','<br>' , '<br>'	;

}
 ?>




</table>

			</div></div>
			<div class="container">
				<?php include 'includes/footer.php';?>
				
			</div>
		</body>
	</html>