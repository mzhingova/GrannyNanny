<?php
require_once 'lib/database.php';
require_once 'config/config.php';

$db = new DB();

if (isset($_REQUEST['search-button'])) {
	$firstname = htmlspecialchars($_GET['firstname']);
	$city = htmlspecialchars($_GET['city']);
	$age = htmlspecialchars($_GET['age']);
	$sex = htmlspecialchars($_GET['gender']);

	$splittedAge = explode("-", $age);

	if (count($splittedAge) != 1) {
		$minAge = $splittedAge[0];
		$maxAge = $splittedAge[1];
	} else {
		$minAge = $splittedAge[0];
		$maxAge = 100;
	}

	if ($firstname) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND status = 'nanny' LIMIT 5";
	}

	if ($city) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE city = '$city' AND status = 'nanny' LIMIT 5";
	}

	if ($age) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE status = 'nanny'";
	}

	if ($sex) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE gender = '$sex' AND status = 'nanny'  LIMIT 5";
	}

	if ($firstname && $city) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND city = '$city' AND status = 'nanny' LIMIT 5";
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
		echo "<h1>Моля въведете ИМЕ, ГРАД, ВЪЗРАСТ ИЛИ ПОЛ</h1>";
	} else {
		if ($result = $db->get_results($check)) {
			$counter = 1;

			foreach ($result as $key) {
				$age = date('Y') - (intval($key->pid / 100000000) + 1900);

				if ($age >= $minAge && $age <= $maxAge && $counter <= 5) {
					echo "<table>";
					echo "<tbody>";
					echo "<tr>";
					echo "<td rowspan='6'>";
					echo 'Pic';
					echo "</td>";

					echo "<td>";
					echo 'Име: ' . $key->firstname . ' ' . $key->lastname;
					echo "</td>";
					echo "</tr>";

					echo "<tr>";
					echo "<td>";
					echo 'Години: ' . $age;
					echo "</td>";
					echo "</tr>";

					echo "<tr>";
					echo "<td>";
					echo 'Град: ' . $key->city;
					echo "</td>";
					echo "</tr>";

					echo "<tr>";
					echo "<td>";
					echo 'Описание: ' . $key->motivation;
					echo "</td>";
					echo "</tr>";

					echo "<tr>";

					if (isset($_SESSION['status']) && ($_SESSION['status'] == "user")) {
						echo "<td>";
						echo "<button class='btn'>Ангажирай</button>";
						echo "</td>";
					}

					echo "</tr>";

					echo "</table>";
					echo "</tbody>";

					$counter++;
				}
			}

		}
	}
}
