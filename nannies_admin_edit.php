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
			<?php include 'includes/header.php'; ?>
			<div class="content">

<table>

<?php

	$conn  = new mysqli("localhost", "root", "", "grannynanny");
			if(! $conn )
			{
				die('Could not connect: ' . mysql_error());
			}
 
 $displayfirstname = $conn->query("SELECT * FROM parenuser WHERE status='nanny'");
$rows = $displayfirstname->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {

//prints user id
	echo '<b>','<tr>ID : ','<b class="editableFields" contenteditable="false">',$row['userID'],'</tr>','<br>',
	//prints user First Name
	'<tr>First Name : ','<b class="editableFields" contenteditable="false">',$row['firstname'],'</tr>' ,'<br>', 
	//Prints user Last Name
	'<tr>Last Name : ','<b class="editableFields" contenteditable="false">',$row['lastname'],'</tr>','<button class="buttonsRight">','Edit Profile','</button>','<br>' ,
	//prints user Email
	'<tr>Email : ','<b class="editableFields" contenteditable="false">', $row['email'],'</tr>','<br>',
	//prints user Phone number
'<tr>Phone Number : ','<b class="editableFields" contenteditable="false">',$row['tel'],'</tr>','<br>' , '<br>'	;
}


 ?>

</table>
			<div class="container">			</div>

				<?php include 'includes/footer.php'; ?>
				
		</body>
	</html>