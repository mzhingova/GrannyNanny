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
	?> <h1 class="header">Всички заявки</h1> <?php
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
		
		while($row = mysqli_fetch_array($nannyQuery)) { 
		$nanny=$row['nannyID'];
		$bookingID =$row['bookingID'];
		$nannyInfoQuery = mysqli_query($conn, "SELECT * FROM parenuser WHERE parenuser.userID = '$nanny'") or die ("Стана грешкка " . mysql_error()); ?>	
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
						<hr>
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
							</div><hr>

							<div class="buttons">
							<?php if($status=="accepted" ){ ?> 
							<a class="innervote" href="accepted_requests.php#vote<?php echo $bookingID ;?>">Оцени</a>
				<div id="vote<?php echo $bookingID ?>" class="modalDialog">
					
					<div>
					 <a href="#close" title="Close" class="close">X</a>
					<form method="GET" class="radio" action="nanny_vote.php">
						<h2>Оценете работата на Nanny</h2>
						<p>1.Не съм доволен</p>
						<p>2.Има още какво да се желае</p>
						<p>3.Задоволително</p>
						<p>4.Много съм доволен</p>
						<p>5.Доволен съм бих препоръчал на приятели</p>
						<span class="star-rating">
							<input type="radio" name="rating" checked = true  value="1"><i></i>
							<input type="radio" name="rating" value="2"><i></i>
							<input type="radio" name="rating" value="3"><i></i>
							<input type="radio" name="rating" value="4"><i></i>
							<input type="radio" name="rating" value="5"><i></i>
							<input type="hiden" name="nannyid" value="<?php echo $nanny;?>">
						</span>
					
					<button class="btn" type="submit">Оцени</button>
					
					
					</form>
					</div>
				</div>
							<br>
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
