<?php 
$pageTitle = 'Log-in';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$conn = new mysqli('localhost', 'root', '', 'grannynanny');

if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn ->set_charset("utf8");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Nanny Search</title>
		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets/css/###.css">
	</head>
	<body>
		<div class="container">
			<?php include 'includes/header.php';?>
			<div class="content">
				<h1>Топ 5 Nannies</h1>
					<?php 
					$tableQuery = mysqli_query($conn, "SELECT * FROM parenuser where status='nanny' LIMIT 5")or die("Стана грешкка " . mysql_error());; 
					$query = mysqli_query($conn, "SELECT * FROM parenuser WHERE status='nanny'") or die("Стана грешкка " . mysql_error());
					
					while($row = mysqli_fetch_array($tableQuery)) { ?>					
					<br>
					<table>
					<tbody>
						<tr>
							<td rowspan="6">
								pic
							</td>
							<td>
								Име:
								<?php 
								echo $row['firstname']. " ". $row['lastname']; ?>
								
							</td>
						</tr>
						<tr>
							<td>
								Години: 
								<?php if($row['pid'] != '') {
									echo date('Y')-(intval($row['pid']/100000000) + 1900);
									} else 
									{
										echo '-'; 
										} ?>
							</td>
						</tr>
						<tr>
							<td>
								Град: 
								<?php echo $row['city']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Описание:
								<?php echo $row['motivation']; ?>
							</td>
						</tr>
						<tr>

							<?php if(isset($_SESSION['status']) && ($_SESSION['status']=="user")){?>
							<td>
								<button class="btn">Ангажирай</button>

							</td>
							<?php } ?>
						</tr>
					</tbody>
				</table>

<?php } ?>


			</div>
			</div>
			<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
		</body>
	</html>