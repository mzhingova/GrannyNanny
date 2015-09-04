<?php

if((!isset($_SESSION['status'])) || ((isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")))) {
session_destroy(); // does not log out the nanny!!!
header('Location: login.php');

}

require_once 'lib/database.php';

$db = new DB();
$total_records=0;
$per_page=4;
		if (isset($_GET['page'])) {
		$page = $_GET['page'];
		echo "PAGE NUMBER " . $page;
		}else {
		$page=1;
		}
		
<<<<<<< HEAD
		
if (isset($_REQUEST['search-button'])) {
=======
			$firstname = "";
	$city = "";
	$age = 0;
	$sex = "";
		
if (isset($_REQUEST['search-button'])) {
		$start_from = ($page-1) * $per_page;
		$select_nanny = "SELECT * FROM parenuser WHERE status='nanny' ";
>>>>>>> 272133ecc866eadff44d2f2d4a45c1573531729f

	$firstname = htmlspecialchars($_GET['firstname']);
	$city = htmlspecialchars($_GET['city']);
	$age = htmlspecialchars($_GET['age']);
	$sex = htmlspecialchars($_GET['gender']);

}
		$splittedAge = explode("-", $age);

		if (count($splittedAge) != 1) {
			$minAge = intval($splittedAge[0]);
			$maxAge = intval($splittedAge[1]);
		} else {
			$minAge = intval($splittedAge[0]);
			$maxAge = 100;
		}
			
		

		$start_from = ($page-1) * $per_page;
		$select_nanny = "SELECT * FROM parenuser WHERE status='nanny' ";

		if ($firstname){
			$select_nanny .= " AND firstname LIKE '%$firstname%'";
			
		}

		if ($city) {
			$select_nanny .= " AND city = '$city'";

		}

		if ($age) {
			$select_nanny .= " AND age = '$age'";
			
		}

		if ($sex) {
			$select_nanny .= " AND gender = '$sex'";
			
		}

		$nannies = $db->get_results($select_nanny);
		
		// Count the total records
		$total_records = count($nannies);
		

		$select_nanny .= " LIMIT $per_page offset $start_from";

		if ($nannies = $db->get_results($select_nanny)) {

		$counter = 1;
		foreach ($nannies as $key) {

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
				echo "<a class='btn' href='book_nanny_form.php?id=$key->userID'>Ангажирай</a>";
				echo "</div>";
			} else if (isset($_SESSION['status']) && ($_SESSION['status'] == "admin")) {
				echo "<div >";
				echo "<a class='btn' href='edit_nanny.php?id=$key->userID'>Редактирай</a>";
				echo "</div>";
			}

			echo "</div>";
			echo "</br>";
			$counter++;
		}
		}
		
		//Using ceil function to divide the total records on per page
		$total_pages = ceil($total_records / $per_page);

		$url=$_SERVER['PHP_SELF']."?page=" ;

		for ($i=1; $i<=$total_pages; $i++) {
			
			echo " <a href=".$url.$i.">".$i."</a> ";
		} 

	

