<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Потребители</title>
		<!-- Override CSS file - add your own CSS rules -->
		
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
 
 $displayfirstname = $conn->query("SELECT * FROM parenuser WHERE status='user'");
$rows = $displayfirstname->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
$userID = $row['userID'];
//prints user id
	echo '<b>','<tr>ID : ','<b class="editableFields" contenteditable="false">',$userID,'</tr>','<br>',
	//prints user First Name
	'<tr>Име : ','<b class="editableFields" contenteditable="false">','<a href="edit_user.php?id=',$userID,'"a>',$row['firstname'],'</a>','</tr>' ,'<br>', 
	//Prints user Last Name
	'<tr>Фамилия : ','<b class="editableFields" contenteditable="false">',$row['lastname'],'</tr>','<button class="buttonsRight">','Edit Profile','</button>','<br>' ,
	//prints user Email
	'<tr>Email : ','<b class="editableFields" contenteditable="false">', $row['email'],'</tr>','<br>',
	//prints user Phone number
'<tr>Телефон за връзка : ','<b class="editableFields" contenteditable="false">',$row['tel'],'</tr>','<br>' , '<br>';



}


 ?>

</table>
			<div class="container">			</div>

				<?php include 'includes/footer.php'; ?>
				
		</body>
	</html>

