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

$total_records=0;
	$per_page=20;
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		
	}else {
	$page=1;
	}
	$start_from = ($page-1) * $per_page;


if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")){

?><h1 class="header">Всички заявки</h1>
<?php
	$nannyID = $_SESSION["userID"]; 
	$parentID=0;
	$bookingID = 0;
	$status="";

		$nanny= mysqli_query($conn,"SELECT * FROM booking where nannyID = '$nannyID'");
		$total_records = mysqli_num_rows($nanny);
		
	$nannyQuery = mysqli_query($conn, "SELECT * FROM booking where nannyID = '$nannyID'")or die("Стана грешкка " . mysql_error()); 
	if( ! mysqli_num_rows($nannyQuery)) {
		echo "Няма подобни заявки!";
	} else {
	while($row = mysqli_fetch_array($nannyQuery)) { 
		$book_id = $row['bookingID'];
		$status=$row['status'];?>
		
		<div class="inner">
		
			<a href="#<?php echo $book_id ;?>" >Запитване №: <?php echo $book_id. " "; ?> от
			<?php 
			echo $row['book_firstname'] ;
			echo " , ";
			echo  $row['book_lastname']; ?> </a>
			<div id="<?php echo $book_id ?>" class="modalDialog">
				<div class="dialoginf">
					 <a href="#close" title="Close" class="close">X</a>
						<div><b>
						Заявка номер:
						<?php
						$book_id = $row['bookingID'];
						$status=$row['status'];
						echo $book_id;
						?>
						</b>
						</div>
						<div>Заявка от</div>
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
						<b><hr>
						<div>Запитване за:</b></div>
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
						<div>Инфо:
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
							<hr>
							<?php if($status=="accepted" ){ ?> <div class="inneraccepted">Приет</div>
							<?php } else if ($status=="rejected"){ ?> <div class="innerrejected">Отказан</div><br>
							<?php } 
								else if($status=="request") {
								echo "<a class='inneraccepted' href='book_nanny_message_update.php?action=accept&id=".$book_id."'>Приеми</a>";
								echo "<a class='innerrejectedinall' href='book_nanny_message_update.php?action=reject&id=".$book_id."'>Откажи</a>";
							} ?>
						</div>
						

				</div>
			</div>
				<?php if($status=="accepted"){ ?>
			<div class="accepted">Приет</div>
			<?php } else if($status=="rejected"){ ?>
			<div class="rejected">Отказан</div>
			<?php } else if($status=="request"){ ?>
			<div class="required">Чакащ</div>
			<?php }?>
			
		</div>
		
	<?php } 
	}
	?><div class="pagination"><?php

$total_pages = ceil($total_records / $per_page);

			$url=$_SERVER['PHP_SELF']."?page=" ;
			for ($i=1; $i<=$total_pages; $i++) {
				echo " <a href=" . $url . $i . ">" . $i . "</a> ";
			} 	
			?> </div><?php
			
}
 ?>

        



