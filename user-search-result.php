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

	$search=false;
	$start_from = ($page-1) * $per_page;


if (isset($_REQUEST['search-button'])) {
	$firstname = $db->escape($_GET['firstname']);
	$city = htmlspecialchars($_GET['city']);
	$address = $db->escape($_GET['address']);
	$email = $db->escape($_GET['email']);
	$lastname = $db->escape($_GET['lastname']);
		$search=true;
		$regEx = "/[_]+/"; 
		$regEx2 = "/[%]+/";


		if(preg_match_all($regEx, $email)){
			$email = preg_replace("/_/", "\\_", $email);
		} 
		if(preg_match_all($regEx, $firstname)){
			
			$firstname = preg_replace("/_/", "\\_", $firstname);
		} 
		if(preg_match_all($regEx, $address)){
			
			$address = preg_replace("/_/", "\\_", $address);
		} 
		if(preg_match_all($regEx2, $email)){
			$email = preg_replace("/%/", "\\%", $email);
		} 
		if(preg_match_all($regEx2, $firstname)){
			
			$firstname = preg_replace("/%/", "\\%", $firstname);
		} 
		if(preg_match_all($regEx2, $address)){
			
			$address = preg_replace("/%/", "\\%", $address);
		} 

}
	
if ($search){
	$select_user = "SELECT * FROM parenuser WHERE status='user' ";
	if ($firstname) {
		$select_user .= "AND (firstname LIKE '%$firstname%' OR lastname LIKE '%$firstname%')";
	}

	if ($city) {
		$select_user .= "AND city = '$city'";
	}

	if ($address) {
		$select_user .= "AND address LIKE '%$address%'";
	}

	if ($email) {
		$select_user .= "AND email LIKE '%$email%'";
	}
	
		$users = $db->get_results($select_user);
		$total_records = count($users);
		$select_user .= " LIMIT $per_page offset $start_from";
	
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
	echo "Няма намерени резултати, моля опитайте отново";
}else {
		header("Location: error_booking.php");
	}
	
		//Using ceil function to divide the total records on per page
		$total_pages = ceil($total_records / $per_page);

		if(isset($_GET['search'])&& $_GET['search']=="true"){
			$url=$_SERVER['REQUEST_URI']."&page=" ;
			for ($i=1; $i<=$total_pages; $i++) {
				echo "<a href=".$url.$i."> ".$i."</a> ";
			} 
		}
}

	
	

?>
	

