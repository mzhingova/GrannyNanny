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

$nannyQuery = mysqli_query($conn, "SELECT * FROM booking where nannyID = '$nannyID'")or die("Стана грешкка " . mysql_error()); 
				while($row = mysqli_fetch_array($nannyQuery)) { ?>				
						
							<div class="inner">
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
								echo $row['endDate']; ?>
								</div>
								
								<div calss="buttons">
								<button class="btn">Приеми</button>
								<button class="btn">Откажи</button>
								</div>
							</div>
						

	<!--<a href="edit_user.php"><button id="btn" type="submit" name="submit" class="btn">Редактиране на профила</button></a><br>
			</div>
			<input type="hidden" name="id" value="<?php echo $userID; ?>" /> -->

								
							
							<?php } }?>
					



<!-- 
$tableQuery = mysqli_query($conn, "SELECT * FROM booking where status='nanny' LIMIT $start_from, $per_page")or die("Стана грешкка " . mysql_error()); 
					$query = mysqli_query($conn, "SELECT * FROM parenuser WHERE status='nanny'") or die("Стана грешкка " . mysql_error()); -->