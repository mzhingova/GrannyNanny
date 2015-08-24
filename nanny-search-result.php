<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "grannynanny");
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}

$conn->set_charset("utf8");
$count = 0;
$errors = array();

if (isset($_REQUEST['search-button'])) {
	$firstname = htmlentities($_GET['firstname']);
	$city = htmlentities($_GET['city']);
	$age = htmlentities($_GET['age']);
	$sex = htmlentities($_GET['gender']);

	$splittedAge = explode("-", $age);
	$minAge = 18;
	$maxAge = 125;

	if (count($splittedAge) != 1) {
		$minAge = $splittedAge[0];
		$maxAge = $splittedAge[1];
	}

	$escapedFirstName = mysqli_real_escape_string($conn, $firstname);
	$escapedCity = mysqli_real_escape_string($conn, $city);

	if ($firstname) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '$escapedFirstName' AND status = 'nanny' LIMIT 5";
	}

	if ($city) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE city = '$escapedCity' AND status = 'nanny' LIMIT 5";
	}

	if ($age) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE status = 'nanny'";
	}

	if ($sex) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE gender = '$sex' AND status = 'nanny'  LIMIT 5";
	}

	if ($firstname && $city) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '$escapedFirstName' AND city = '$escapedCity' AND status = 'nanny' LIMIT 5";
	}

	if ($firstname && $age) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '$escapedFirstName' AND status = 'nanny'";
	}

	if ($firstname && $sex) {
		$check = "SELECT firstname, lastname, city, email, pid, motivation, gender FROM parenuser WHERE firstname = '$escapedFirstName' AND gender = '$sex' AND status = 'nanny'";
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
		if ($result = mysqli_query($conn, $check)) {
			$count = 1;
			while ($row = mysqli_fetch_assoc($result)) {
				if ($row != null) {
					$age = date('Y') - (intval($row['pid'] / 100000000) + 1900);

					if ($age >= $minAge && $age <= $maxAge && $count <= 5) {
						echo "<table>";
						echo "<tbody>";
						echo "<tr>";
						echo "<td rowspan='6'>";
						echo 'Pic';
						echo "</td>";

						echo "<td>";
						echo 'Име: ' . $row['firstname'] . ' ' . $row['lastname'];
						echo "</td>";
						echo "</tr>";

						echo "<tr>";
						echo "<td>";
						echo 'Години: ' . $age;
						echo "</td>";
						echo "</tr>";

						echo "<tr>";
						echo "<td>";
						echo 'Град: ' . $row['city'];
						echo "</td>";
						echo "</tr>";

						echo "<tr>";
						echo "<td>";
						echo 'Описание: ' . $row['motivation'];
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

						$count++;

					}
				} else {
					// TODO: Redirect to No Results Page
					echo "<h1>No Results Found</h1>";
				}
			}
		}
	}
}
