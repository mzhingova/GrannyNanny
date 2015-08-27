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
$userID = $row['userID'];
//prints nanny id
	echo '<b>','<tr>ID : ','<b class="editableFields" contenteditable="false">',$userID,'</tr>','<br>',
	//prints nanny First Name
	'<tr>Име : ','<b class="editableFields" contenteditable="false">','<a href="edit_nanny.php?id=',$userID,'"a>',$row['firstname'],'</a>','</tr>' ,'<br>', 
	//Prints nanny Last Name
	'<tr>Фамилия : ','<b class="editableFields" contenteditable="false">',$row['lastname'],'</tr>','<button class="buttonsRight">','Edit Profile','</button>','<br>' ,
	//prints nanny Email
	'<tr>Email : ','<b class="editableFields" contenteditable="false">', $row['email'],'</tr>','<br>',
	//prints nanny Phone number
'<tr>Град : ','<b class="editableFields" contenteditable="false">',$row['city'],'</tr>','<br>' , 
'<tr>Адрес : ','<b class="editableFields" contenteditable="false">',$row['address'],'</tr>','<br>' ,
'<tr>Пол : ','<b class="editableFields" contenteditable="false">',$row['gender'],'</tr>','<br>' ,
'<tr>Възможност за работа извън градът : ','<b class="editableFields" contenteditable="false">',$row['workout'],'</tr>','<br>' ,
'<tr>Работен статус : ','<b class="editableFields" contenteditable="false">',$row['work_status'],'</tr>','<br>' , 
'<tr>Телефон за връзка : ','<b class="editableFields" contenteditable="false">',$row['tel'],'</tr>','<br>' , 

'<tr>Образование : ','<b class="editableFields" contenteditable="false">',$row['education'],'</tr>','<br>','<br>','<br>';



}


 ?>

</table>
			<div class="container">			</div>

				<?php include 'includes/footer.php'; ?>
				
		</body>
	</html>

