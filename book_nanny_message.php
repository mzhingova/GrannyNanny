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

include 'includes/header.php';

if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")){

var_dump($_SESSION['status']);
$nannyID = $_SESSION["userID"]; 
var_dump($nannyID);
$nannyQuery = mysqli_query($conn, "SELECT * FROM booking where nannyID = '$nannyID'")or die("Стана грешкка " . mysql_error()); 
				while($row = mysqli_fetch_array($nannyQuery)) { ?>				
					<br>
					<table>
					<tbody>
						<tr>
							<td>
								Град:
								<?php 
								echo $row['city']; ?>
								
							</td>
						</tr>
						<tr>
							<td>
								Адрес: 
								<?php 
								echo $row['address']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Брой деца: 
								<?php echo $row['children']; ?>
							</td>
						</tr>
						<tr>
							<td>
							Допълнителна информация:
							<?php if($row['info'] != '') {
								echo $row['info'];
								} else { echo '-';  } ?>
						</td>
						</tr>

						<tr>
							<td>
								От:
								<?php echo $row['startDate']; ?>
							</td>
						</tr>
						<tr>
							<td>
								До:
								<?php 
								echo $row['endDate']; ?>
								
							</td>
						</tr>
						<tr>
							<td>
								<button class="btn">Приеми</button>
								<button class="btn">Откажи</button>


	<!--<a href="edit_user.php"><button id="btn" type="submit" name="submit" class="btn">Редактиране на профила</button></a><br>
			</div>
			<input type="hidden" name="id" value="<?php echo $userID; ?>" /> -->

								
							</td>
							<?php } }?>
						</tr>
					</tbody>
				</table>



<!-- 
$tableQuery = mysqli_query($conn, "SELECT * FROM booking where status='nanny' LIMIT $start_from, $per_page")or die("Стана грешкка " . mysql_error()); 
					$query = mysqli_query($conn, "SELECT * FROM parenuser WHERE status='nanny'") or die("Стана грешкка " . mysql_error()); -->