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
				<h1>Топ 5 Nanny</h1>
				<table>
					<tbody>
						<tr>
							<td rowspan="6">
								pic
							</td>
							<td>
								Име:
								<?php> <?>
							</td>
						</tr>
						<tr>
							<td>
								Години:
							</td>
						</tr>
						<tr>
							<td>
								Пол:
							</td>
						</tr>
						
						<tr>
							<td>
								Град:
							</td>
						</tr>
						<tr>
							<td>
								Описание:
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
			</div>
			<div class="container">
				<?php include 'includes/footer.php';?>
			</div>
		</body>
	</html>