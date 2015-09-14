<?php

require_once 'lib/database.php';

$db = new DB();
$total_records=0;
$per_page=5;
		if (isset($_GET['page'])) {
		$page = $_GET['page'];
		}else {
		$page=1;
		}

	$start_from = ($page-1) * $per_page;
	
	$select_user = "SELECT * FROM parenuser WHERE status='user' ";
	
		$users = $db->get_results($select_user);
		$total_records = count($users);
		$select_user .= " LIMIT $per_page offset $start_from";
			echo "<h4>"."Списък на всички потребители"."</h4>";
	if ($users = $db->get_results($select_user)) {
			$counter = 1;
			foreach ($users as $key) {
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

					echo "<div >";
					echo "<a class='btn' href='edit_user.php?id=$key->userID'>Редактирай</a>";
					echo "</div>";
				

				echo "</div>";
				echo "</br>";
				$counter++;

				}
				
	}  	else if ( !($db->get_results($select_user))){
	echo "Няма намерени потребители";
}else {
		header("Location: error_booking.php");
	}
	
		//Using ceil function to divide the total records on per page
		$total_pages = ceil($total_records / $per_page);
			$url=$_SERVER['REQUEST_URI']."?&page=" ;
			for ($i=1; $i<=$total_pages; $i++) {
				echo "<a href=".$url.$i."> ".$i."</a> ";
		}


	
	

?>
	

