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
?><h1  class="header">Отказани заявки</h1>
<?php

	$nannyID = $_SESSION["userID"]; 
	$parentID=0;
	$bookingID = 0;
	$status="";
$nanny= mysqli_query($conn,"SELECT * FROM booking where nannyID = '$nannyID' and status='rejected' ");
		$total_records = mysqli_num_rows($nanny);
	$nannyQuery = mysqli_query($conn, "SELECT * FROM booking where nannyID = '$nannyID' AND status='rejected' LIMIT $per_page offset $start_from")or die("Стана грешкка " . mysql_error()); 
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
			echo  $row['book_lastname']; ?> <a/>
			<div id="<?php echo $book_id ?>" class="modalDialog">
				<div>
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
						<hr>
						<div><b>Запитване за:</b></div>
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
						<hr>
					</div>
			</div>
		</div>
		
	<?php } 
		?><div class="pagination"><?php

		$total_pages = ceil($total_records / $per_page);

			$url=$_SERVER['PHP_SELF']."?page=" ;
			for ($i=1; $i<=$total_pages; $i++) {
				echo " <a href=" . $url . $i . ">" . $i . "</a> ";
			} 	
			?> </div><?php
}
			
	} else if (isset($_SESSION['status']) && ($_SESSION['status'] == "user")){

	?>
	<h1  class="header">Отказани заявки</h1>
<?php
	$userID = $_SESSION["userID"]; 
	$parentID=0;
	$bookingID = 0;
	$status="";
	$user= mysqli_query($conn,"SELECT * FROM booking where userID = '$userID' AND status='rejected'");
	$total_records = mysqli_num_rows($user);
	
	$nannyQuery = mysqli_query($conn, "SELECT * FROM booking where userID = '$userID' AND status='rejected'  LIMIT $per_page offset $start_from")or die("Стана грешкка " . mysql_error()); 
	if( ! mysqli_num_rows($nannyQuery)) {
	echo "Няма подобни заявки!";
} else {

		while($row = mysqli_fetch_array($nannyQuery)) { 
	$nanny=$row['nannyID'];
	$nannyInfoQuery = mysqli_query($conn, "SELECT * FROM parenuser, booking WHERE parenuser.userID = '$nanny' ") or die ("Стана грешкка " . mysql_error()); ?>	
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
						<div>Информация за Nanny</div>
						<div> E-mail на Nanny:
						<?php 
						echo $row2['email']; ?>
						</div>
						<div> Телефон на Nanny
						<?php	echo $row2['tel']; ?> 
						</div>
						<div> Град на Nanny:
						<?php 
						echo $row2['city'];
						break;
						} 	?>	
						</div>
						<hr>
						<div><b>Вашата информация за заявката</b></div>	
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
						echo $row['endDate']; ?>
						</div>
						<hr>
				<div class="innerrejected">Отказан</div><br>
			</div>
			<div class="innerrejected">Отказан</div><br>
			</div>
		</div>
		
		
	<?php }
		?><div class="pagination"><?php

$total_pages = ceil($total_records / $per_page);

			$url=$_SERVER['PHP_SELF']."?page=" ;
			for ($i=1; $i<=$total_pages; $i++) {
				echo " <a href=" . $url . $i . ">" . $i . "</a> ";
			} 	
			?> </div><?php

}
				
	}		
	 else {
		header("Location: error_booking.php");
	}

 ?>