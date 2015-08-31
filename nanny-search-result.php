<?php

if((!isset($_SESSION['status'])) || ((isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")))) {
					session_destroy(); // does not log out the nanny!!!
					header('Location: login.php');

}

require_once 'lib/database.php';

$db = new DB();

if (isset($_REQUEST['search-button'])) {
	$firstname = htmlspecialchars($_POST['firstname']);
	$city = htmlspecialchars($_POST['city']);
	$age = htmlspecialchars($_POST['age']);
	$sex = htmlspecialchars($_POST['gender']);

	$splittedAge = explode("-", $age);

	if (count($splittedAge) != 1) {
		$minAge = intval($splittedAge[0]);
		$maxAge = intval($splittedAge[1]);
	} else {
		$minAge = intval($splittedAge[0]);
		$maxAge = 100;
	}
					$per_page=4;

						if (isset($_GET['page'])) {

						$page = $_GET['page'];
						}
						else {
						$page=1;
						}
						$start_from = ($page-1) * $per_page;					
					
					
					
					
					

	if ($firstname) {
		$check = "SELECT * FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND status = 'nanny' LIMIT $start_from, $per_page";
	}

	if ($city) {
		$check = "SELECT * FROM parenuser WHERE city = '$city' AND status = 'nanny'";
	}

	if ($age) {
		$check = "SELECT * FROM parenuser WHERE status = 'nanny'";
	}

	if ($sex) {
		$check = "SELECT * FROM parenuser WHERE gender = '$sex' AND status = 'nanny'";
	}

	if ($firstname && $city) {
		$check = "SELECT * FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND city = '$city' AND status = 'nanny'";
	}

	if ($firstname && $age) {
		$check = "SELECT * FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND status = 'nanny'";
	}

	if ($firstname && $sex) {
		$check = "SELECT * FROM parenuser WHERE firstname = '" . $db->escape($firstname) . "' AND gender = '$sex' AND status = 'nanny'";
	}

	if ($city && $age) {
		$check = "SELECT * FROM parenuser WHERE city = '$city' AND status = 'nanny'";
	}

	if ($city && $sex) {
		$check = "SELECT * FROM parenuser WHERE city = '$city' AND gender = '$sex' AND status = 'nanny'";
	}

	if ($age && $sex) {
		$check = "SELECT * FROM parenuser WHERE gender = '$sex' AND status = 'nanny'";
	}

	if (!$age && !$sex && !$city && !$firstname ) {
		$check="SELECT * FROM parenuser WHERE status = 'nanny'" ;
	}
		if ($result = $db->get_results($check)) {
			$counter = 1;
			foreach ($result as $key) {

				$age = date('Y') - (intval($key->pid / 100000000) + 1900);
				echo "<div>";
				echo "<img src='uploads/$key->photo' target='_blank' alt='avatar' />";
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
					echo "<div >";
					echo "<a class='btn' href='book_nanny_form.php'>Ангажирай</a>";
					echo "</div>";
				} else if(isset($_SESSION['status']) && ($_SESSION['status'] == "admin")){
					echo "<div >";
					echo "<a class='btn' href='edit_nanny.php?id=$key->userID'>Редактирай</a>";
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
					echo "<div>";
					echo "<img src='uploads/$key->photo' target='_blank' alt='avatar' />";
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
					} else {
						echo "<div >";
						echo "<a class='btn' href='edit_nanny.php?id=$key->userID'>Редактирай</a>";
						echo "</div>";
					}

					echo "</div>";
					echo "</br>";

					$counter++;
				}
			}
		}
	
	
	//Now select all from table
$result1= $db->get_results ($check);


// Count the total records
$total_records = count($result1);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<a href='search.php?page=1'>".'First Page'."</a> ";

for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='search.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='search.php?page=$total_pages'>".'Last Page'."</a> ";
}
