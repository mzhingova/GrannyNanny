<?php
/*
if((!isset($_SESSION['status'])) || ((isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")))) {
session_destroy(); // does not log out the nanny!!!
header('Location: login.php');

}*/

require_once 'lib/database.php';

$db = new DB();
$total_records=0;
$per_page=4;
		if (isset($_GET['page'])) {
		$page = $_GET['page'];
		}else {
		$page=1;
		}

	$search=false;
	$start_from = ($page-1) * $per_page;

		
if (isset($_REQUEST['search-button'])) {

	$firstname = $db->escape($_GET['firstname']);
	$city = htmlspecialchars($_GET['city']);
	$age = htmlspecialchars($_GET['age']);
	$sex = htmlspecialchars($_GET['gender']);
	$search=true;
	
	$splittedAge = explode("-", $age);

		if (count($splittedAge) != 1) {
			$minAge = intval($splittedAge[0]);
			$maxAge = intval($splittedAge[1]);
		} else {
			$minAge = intval($splittedAge[0]);
			$maxAge = 100;
		}

		if(preg_match_all("/[_]+/", $firstname)){
			
			$firstname = preg_replace("/_/", "\\_", $firstname);
		} 
		if(preg_match_all("/[%]+/", $firstname)){
			
			$firstname = preg_replace("/%/", "\\%", $firstname);
		}
}	

		 
if ($search){
		
		$select_nanny = "SELECT * FROM parenuser WHERE status='nanny'";

		if ($firstname){
			$select_nanny .= " AND (firstname LIKE '%$firstname%' OR lastname LIKE '%$firstname%')";
			
		}

		if ($city) {
			$select_nanny .= " AND city = '$city'";

		}

		if ($age) {
			$select_nanny .= " AND (age between $minAge AND $maxAge)";
			
		}

		if ($sex) {
			$select_nanny .= " AND gender = '$sex'";
			
		}
		
		$select_nanny .= "ORDER BY average DESC";

		$nannies = $db->get_results($select_nanny);
		
		// Count the total records
		$total_records = count($nannies);

		$select_nanny .= " LIMIT $per_page offset $start_from";

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
			echo 'Рейтинг:  ' . round($key->average,1) . "/5";
			}
			echo "</div>";

			echo "<div>";

			if (isset($_SESSION['status']) && ($_SESSION['status'] == "user")) {

				echo "<div >";
				echo "<a class='btn' href='book_nanny_form.php?id=$key->userID'>Ангажирай</a>";
				echo "<a class='btns' href='nanny_calendar_user_view.php?id=$key->userID'>Виж календар</a>";
				echo "<a class='btns' href='nanny_profil.php?id=$key->userID'>Виж профил</a>";
				echo "</div></br>";
				
				
				
			} else if (isset($_SESSION['status']) && ($_SESSION['status'] == "admin")) {
				echo "<div >";
				echo "<a class='btn' href='edit_nanny.php?id=$key->userID'>Редактирай</a>";
				echo "<a class='btns' href='nanny_calendar_user_view.php?id=$key->userID'>Виж календар</a>";
				echo "<a class='btns' href='nanny_profil.php?id=$key->userID'>Виж профил</a>";
				echo "</div><br>";
				
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


		if(isset($_GET['search'])&& $_GET['search']=="true" ){
			$url=$_SERVER['REQUEST_URI']."&page=" ;
			for ($i=1; $i<=$total_pages; $i++) {
				echo " <a href=".$url.$i.">".$i."</a> ";
			} 
		}
		
}

?>

	

