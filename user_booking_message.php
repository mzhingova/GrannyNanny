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
	while($row = mysqli_fetch_array($nannyQuery)) { ?>	
		<div class="inner">
			<div>Запитване за:</div>
			<div>Град:
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
			<div class="buttons">
			<?php if($status=="accepted" ){ ?> <a class="btn" disabled>Приет</a>
			<?php } else if ($status=="rejected"){ ?> <a class="btn" disabled>Отказан</a>
			<?php } 
				else { 
			} ?>
			</div>
		</div>
		
	<?php } ?>
	<?php	
		if (isset($_GET['action'])){
			$book_id = $_GET['id'];
			if($_GET['action']=="reject"){
				$update_status = mysqli_query($conn, "UPDATE booking SET status='rejected' WHERE bookingID = '$book_id'")or die("Стана грешкка " . mysql_error()); 
				if($update_status){
					header("Refresh: 1; url=home_page.php");
				}
				
			}
			if($_GET['action']=="accept"){
				$update_status = mysqli_query($conn, "UPDATE booking SET status='accepted' WHERE bookingID = '$book_id'")or die("Стана грешкка " . mysql_error()); 
				if($update_status){
					header("Refresh: 1; url=home_page.php");
				}
			}
		}			
	}
 ?>