<?php
require_once 'lib/database.php';

$db = new DB();

if (isset($_REQUEST['search-button'])) {
	$firstname = htmlspecialchars($_POST['firstname']);
	$city = htmlspecialchars($_POST['city']);
	$address = htmlspecialchars($_POST['address']);
	$email = htmlspecialchars($_POST['email']);

	//checks for both first- and lastname
	if ($firstname) {
		$check = "SELECT * FROM parenuser WHERE firstname LIKE '%$firstname%' AND status = 'user'";
	}

	if ($city) {
		$check = "SELECT * FROM parenuser WHERE city = '$city' AND status = 'user'";
	}

	if ($address) {
		$check = "SELECT * FROM parenuser WHERE address LIKE '%$address%' AND status = 'user'";
	}

	if ($email) {
		$check = "SELECT * FROM parenuser WHERE email LIKE '%$email%' AND status = 'user'";
	}

	if ($firstname && $city) {
		$check = "SELECT * FROM parenuser WHERE firstname LIKE '%$firstname%' AND city = '" .$db->escape($city) . "' AND status = 'user'";
	}

	if ($firstname && $address) {
		$check = "SELECT * FROM parenuser WHERE firstname LIKE '%$firstname%' AND address LIKE '%$address%' AND status = 'user'";
	}

	if ($firstname && $email) {
		$check = "SELECT * FROM parenuser WHERE firstname LIKE '%$firstname%' AND email LIKE '%$email%' AND status = 'user'";
	}

	if ($city && $address) {
		$check = "SELECT * FROM parenuser WHERE city = '$city' AND address LIKE '%$address%' AND status = 'user'";
	}

	if ($city && $email) {
		$check = "SELECT * FROM parenuser WHERE city = '$city' AND email LIKE '%$email%' AND status = 'user'";
	}

	if ($address && $email) {
		$check = "SELECT * FROM parenuser WHERE email LIKE '%$email%' AND address LIKE '%$address%' AND status = 'user'";
	}

	if (!$firstname && !$address && !$city && !$email) {

		$check = "SELECT * FROM parenuser WHERE status = 'user'";
	} 
	if ($result = $db->get_results($check)) {
			$counter = 1;
			foreach ($result as $key) {
				echo "<div>";
				echo 'Име: ' . $key->firstname . ' ' . $key->lastname;
				echo "</div>";

				echo "<div>";
				echo 'Град: ' . $key->city;
				echo "</div>";

				echo "<div>";
				echo 'Адрес: ' . $key->address;
				echo "</div>";

				echo "<div>";
				echo 'Email: ' . $key->email;
				echo "</div>";

				
				echo "</div>";

				echo "<div>";


					echo "<div >";
					echo "<a class='btn' href='edit_user_with_admin_status.php?id=$key->userID'>Редактирай</a>";
					echo "</div>";
				

				echo "</div>";
				echo "</br>";

				}
			
		
	} elseif (count($result==0)) {
		echo "Няма намерени резултати, моля опитайте отново";
	}

}

	else {
			$check = "SELECT * FROM parenuser WHERE status = 'user'";

		if ($result = $db->get_results($check)) {
			$counter = 1;

			foreach ($result as $key) {

				

					echo "<div>";
					echo 'Име: ' . $key->firstname . ' ' . $key->lastname;
					echo "</div>";

					echo "<div>";
					echo 'Град: ' . $key->city;
					echo "</div>";

					echo "<div>";
					echo 'Адрес: ' . $key->address;
					echo "</div>";

					echo "<div>";
					echo 'Email: ' . $key->email;
					echo "</div>";

					echo "<div>";

					if (isset($_SESSION['status']) && ($_SESSION['status'] == "user")) {
						echo "<div>";
						echo "<button class='btn'>Ангажирай</button>";
						echo "</div>";
					} else {
						echo "<div>";
						echo "<a class='btn' href='edit_user_with_admin_status.php?id=$key->userID'>Редактирай</a>";
						
						echo "</div>";
					}

					echo "</div>";
					echo "</br>";

					$counter++;
				}
			}
			
		}
	

