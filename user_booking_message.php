<?php
$pageTitle = 'Book-nanny';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$conn = new mysqli("localhost", "root", "", "grannynanny");
if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn->set_charset("utf8");

/* include 'includes/header.php'; */

if (isset($_SESSION['status']) && ($_SESSION['status'] == "user")){


	$userID = $_SESSION["userID"]; 
	$parentID=0;
	$bookingID = 0;
	$status="";

	$nannyQuery = mysqli_query($conn, "SELECT * FROM booking where userID = '$userID'")or die("Стана грешкка " . mysql_error()); 
	while($row = mysqli_fetch_array($nannyQuery)) { 
	$nanny=$row['nannyID'];
	$nannyInfoQuery = mysqli_query($conn, "SELECT * FROM parenuser, booking where parenuser.userID = '$nanny' AND booking.status = 'accepted'") or die ("Стана грешкка " . mysql_error()); ?>	
		<div class="inner"> 
			<div><h3>Запитване към:<h></div>
			
<div>Nanny:
		<?php 
while($row2= mysqli_fetch_array($nannyInfoQuery)){
		echo $row2['firstname']. " ". $row2['lastname']; ?> </div>
		<div> E-mail на Nanny:
		<?php 
			echo $row2['email']; ?>
			</div>
			<div> Телефон на Nanny
			<?php	echo $row2['tel']; ?> 
			</div>
			<div> Град на Nanny:
			<?php 
			echo $row2['city']; ?>
			</div>
			<div> Status
			<?php
			echo $row2['status']; 
			break;

			} 	?>	
		</div>
			<div>Град за заявката:
			<?php 
			echo $row['city']; ?>
			</div>
			<div>
			Адрес: 
			<?php 
			echo $row['address']; ?>
			</div>
			<div>
			Брой деца: 
			<?php echo $row['children']; ?>
			</div>
			<div>Инфо
			<?php if($row['info'] != '') {

			echo $row['info'];
			} else { echo '-';  } ?>
			</div>
			<div>
			От:
			<?php echo $row['startDate']; ?>
			</div>
			<div>
			До:
			<?php 
			echo $row['endDate']; 
			$book_id = $row['bookingID'];
			$status=$row['status'];
			echo $status . " order-ID=" . $book_id;
			?>
			
			</div>
		</div>
		
	<?php }
				
	}
 ?>