<?php
require_once 'lib/database.php';

$db = new DB();

if (isset($_REQUEST['search-button'])) {
	$firstname = htmlspecialchars($_GET['firstname']);
	$city = htmlspecialchars($_GET['city']);
	$age = htmlspecialchars($_GET['age']);
	$sex = htmlspecialchars($_GET['gender']);

	$splittedAge = explode("-", $age);

	if (count($splittedAge) != 1) {
		$minAge = intval($splittedAge[0]);
		$maxAge = intval($splittedAge[1]);
	} else {
		$minAge = intval($splittedAge[0]);
		$maxAge = 100;
	}

	if ($firstname) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND status = 'nanny'";
	}

	if ($city) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE city = '$city' AND status = 'nanny'";
	}

	if ($age) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE status = 'nanny'";
	}

	if ($sex) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE gender = '$sex' AND status = 'nanny'";
	}

	if ($firstname && $city) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND city = '$city' AND status = 'nanny'";
	}

	if ($firstname && $age) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND status = 'nanny'";
	}

	if ($firstname && $sex) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND gender = '$sex' AND status = 'nanny'";
	}

	if ($city && $age) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE city = '$city' AND status = 'nanny'";
	}

	if ($city && $sex) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE city = '$city' AND gender = '$sex' AND status = 'nanny'";
	}

	if ($age && $sex) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE gender = '$sex' AND status = 'nanny'";
	}

	if (!isset($check)) {
		if ($result = $db->get_results("SELECT * FROM parenuser where status = 'nanny'")) {
			$counter = 1;
			foreach ($result as $key) {

				$age = date('Y') - (intval($key->pid / 100000000) + 1900);
				echo "<div class='table'>";
				echo "<div>";
				echo 'Pic';
				echo "</div>";

				echo "<div>";
				echo 'Име: ' . $key->firstname . ' ' . $key->lastname;
				echo "</div>";

				echo "<div>";
				echo 'Години: ' . $age;
				echo "</div>";

				echo "<div>";
				echo 'Град: ' . $key->city;
				echo "</div>";

				echo "<div class='motivation'>";
				echo 'Описание: ' . $key->motivation;
				echo "</div>";

				echo "<div>";
				echo 'Пол: ' . $key->gender;
				echo "</div>";

				echo "<div>";

				if (isset($_SESSION['status']) && ($_SESSION['status'] == "user")) {
					echo "<div>";
					echo "<button class='btn'>Ангажирай</button>";
					echo "</div>";
				}
				echo "</div>";
				echo "</br>";
			}
		}
	} else {
		if ($result = $db->get_results($check)) {
			$counter = 1;

			foreach ($result as $key) {

				$age = date('Y') - (intval($key->pid / 100000000) + 1900);

				if ($age >= $minAge && $age <= $maxAge && $counter <= 5) {
					echo "<div class='table'>";
					echo "<div>";
					echo 'Pic';
					echo "</div>";

					echo "<div>";
					echo 'Име: ' . $key->firstname . ' ' . $key->lastname;
					echo "</div>";

					echo "<div>";
					echo 'Години: ' . $age;
					echo "</div>";

					echo "<div>";
					echo 'Град: ' . $key->city;
					echo "</div>";

					echo "<div>";
					echo 'Пол: ' . $key->gender;
					echo "</div>";

					echo "<div class='motivation'>";
					echo 'Описание: ' . $key->motivation;
					echo "</div>";

					echo "<div>";

					if (isset($_SESSION['status']) && ($_SESSION['status'] == "user")) {
						echo "<div>";
						echo "<button class='btn'>Ангажирай</button>";
						echo "</div>";
					}
					echo "</div>";
					echo "</br>";

					$counter++;

				}
			}
		}
	}
}
