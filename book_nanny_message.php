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


$nannyQuery = mysqli_query($conn, "SELECT * FROM booking where nannyID = '$nannyID'")or die("Стана грешкка " . mysql_error()); 
				while($row = mysqli_fetch_array($nannyQuery)) { ?>	

	
					
						
								<div class="inner">
									<div>Запитване от:</div>
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
									<br><br>
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

        					<form name = "accepted" method ="POST" action = "">
									<div calss="buttons">
									<button type="submit" name="accept" value="<?php $book_id ?>" class="btn">Приеми</button>
									<button type="submit" name="reject" value="<?php $book_id ?>" class="btn">Откажи</button>
									</div>
								</div>
							</form>
							<?php $book_id = $row['bookingID']; ?>
							<?php } ?>
<?php if (isset($_POST['accept'])){
$update_status = mysqli_query($conn, "UPDATE booking SET status='accepted' WHERE bookingID = '$book_id'")or die("Стана грешкка " . mysql_error()); 
	}
	if (isset($_POST['reject'])){
$update_status = mysqli_query($conn, "UPDATE booking SET status='rejected' WHERE bookingID = '$book_id'")or die("Стана грешкка " . mysql_error()); 

	}
 ?>

        


	<!--<a href="edit_user.php"><button id="btn" type="submit" name="submit" class="btn">Редактиране на профила</button></a><br>
			</div>
			<input type="hidden" name="id" value="<?php echo $userID; ?>" /> -->

							
							<?php 
							 
							}
							?>
					

					