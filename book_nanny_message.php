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


if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")){


	$nannyID = $_SESSION["userID"]; 
	$parentID=0;
	$bookingID = 0;
	$status="";

	$nannyQuery = mysqli_query($conn, "SELECT * FROM booking where nannyID = '$nannyID'")or die("Стана грешкка " . mysql_error()); 
	while($row = mysqli_fetch_array($nannyQuery)) { 
		$book_id = $row['bookingID'];
		$status=$row['status'];?>	
		<div class="inner">
		
			<a href="#<?php echo $book_id ;?>" class="<?php echo $status; ?>">Запитване от:
			<?php 
			echo $row['book_firstname'] ;
			echo " , ";
			echo  $row['book_lastname']; ?> <a/>
			<div id="<?php echo $book_id ?>" class="modalDialog">
				<div>
					 <a href="#close" title="Close" class="close">X</a>
						<div>
						Име:
						<?php 
						echo $row['book_firstname']; ?>
						</div>
						<div>
						Фамилия:
						<?php 
						echo $row['book_lastname']; ?>
						</div>
						<div>
						Email:
						<?php 
						echo $row['book_email']; ?>
						</div>
						<div>
						Телефон за контакт:
						<?php 
						echo $row['book_tel']; ?>
						</div>
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
						?>
						</div>
							<div class="buttons">
							<?php if($status=="accepted" ){ ?> <a class="btn" disabled>Приет</a>
							<?php } else if ($status=="rejected"){ ?> <a class="btn" disabled>Отказан</a>
							<?php } 
								else if($status=="request") {
								echo "<a class='btn' href='book_nanny_message_update.php?action=accept&id=".$book_id."'>Приеми</a>";
								echo "<a class='btn' href='book_nanny_message_update.php?action=reject&id=".$book_id."'>Откажи</a>";
							} ?>
							</div>
				</div>
			</div>
		</div>
		
	<?php } ?>
	<?php	
			
	}
 ?>

        



