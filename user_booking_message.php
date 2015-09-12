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
if (isset($_SESSION['status']) && ($_SESSION['status'] == "user")){
	$userID = $_SESSION["userID"]; 
	$parentID=0;
	$bookingID = 0;
	$status="";
	$total_records=0;
	$per_page=20;
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		
	}else {
	$page=1;
	}
	$start_from = ($page-1) * $per_page;
	
		$nanny= mysqli_query($conn,"SELECT * FROM booking where userID = '$userID'");
		$total_records = mysqli_num_rows($nanny);

		$nannyQuery = mysqli_query($conn, "SELECT * FROM booking where userID = '$userID'  LIMIT $per_page offset $start_from")or die("Стана грешкка " . mysql_error()); 
	if( ! mysqli_num_rows($nannyQuery)) {
		echo "Няма подобни заявки!";
	} else {
		?><h1 class="header">Всички заявки:</h1>
		<?php
		while($row = mysqli_fetch_array($nannyQuery)) { 
		$nanny=$row['nannyID'];
		$bookingID =$row['bookingID'];
		$nannyInfoQuery = mysqli_query($conn, "SELECT * FROM parenuser, booking WHERE parenuser.userID = '$nanny'") or die ("Стана грешкка " . mysql_error()); ?>	
		<div class="inner"> 
			<?php 
			while($row2= mysqli_fetch_array($nannyInfoQuery)){
			?><a href="#<?php echo $bookingID ;?>">Запитване №: <?php echo $bookingID. " "; ?> към
			<?php 
			echo $row2['firstname']. " ". $row2['lastname']; ?> <a/>
			<div id="<?php echo $bookingID ?>" class="modalDialog">
				<div>
					 <a href="#close" title="Close" class="close">X</a>
						<div>
						<b>Заявка номер:
						<?php
						$bookingID = $row['bookingID'];
						echo $bookingID;
						?></b>
						</div>
						<div>Информация за Nanny
						</div>						
						<div> E-mail на Nanny:
						<?php 
						echo $row2['email']; ?>
						</div>
						<div> Телефон на Nanny:
						<?php	echo $row2['tel']; ?> 
						</div>
						<div> Град на Nanny:
						<?php 
						echo $row2['city'];
						break;
						} 	?>	
						</div>
						<br>
						<div><b>Вашата информация за заявката</b></div>
							<div>Град за заявката:
							<?php 
							$status=$row['status'];
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
							echo $row['endDate']; ?>
							</div>
							<div class="buttons">
							<?php if($status=="accepted" ){ ?> <div class="inneraccepted">Приет</div>
							<?php } else if ($status=="rejected"){ ?> <div class="innerrejected">Отказан</div>
							<?php } 
								else if($status=="request") {?>
								<div class="inneraccepted">Чакащ</div>
								<?php 
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
