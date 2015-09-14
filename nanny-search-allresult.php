<?php

require_once 'lib/database.php';

$db = new DB();
$total_records=0;
$per_page=4;
		if (isset($_GET['page'])) {
		$page = $_GET['page'];
		}else {
		$page=1;
		}

	$start_from = ($page-1) * $per_page;

		$select_nanny = "SELECT * FROM parenuser WHERE status='nanny' ";

		$nannies = $db->get_results($select_nanny);
		$total_records = count($nannies);
		$select_nanny .= " LIMIT $per_page offset $start_from";

		echo "<h4>"."Списък на всички nannies"."</h4>";

		if ($nannies = $db->get_results($select_nanny)) {

		$counter = 1;
		foreach ($nannies as $key) {
			echo "<div>";
			echo "<img src='uploads/$key->photo' target='_blank' alt='avatar' />";
			echo "</div>";

			echo "<div>";
			echo 'Име: ' . $key->firstname . ' ' . $key->lastname;
			echo "</div>";

			echo "<div>";
			echo 'Години: ' . $key->age;
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
			if($key->average == 0){
				echo 'Рейтинг:  ' . "-";
			} else {
			echo 'Рейтинг:  ' . $key->average . "/5";
			}
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
		else if ( !($db->get_results($select_nanny))){
	echo "Няма намерени резултати, моля опитайте отново";
		}
		else {
		header("Location: error_booking.php");
		}

		//Using ceil function to divide the total records on per page
		$total_pages = ceil($total_records / $per_page);

			$url=$_SERVER['REQUEST_URI']."?&page=" ;
			for ($i=1; $i<=$total_pages; $i++) {
				echo " <a href=".$url.$i.">".$i."</a> ";
			} 
		
		


?>

	