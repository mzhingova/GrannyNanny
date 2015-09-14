	<?php

$pageTitle = 'Log-in';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = new mysqli('localhost', 'root', '', 'grannynanny');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn->set_charset("utf8");
?>
	<?php	
		if (isset($_GET['action'])){
			$book_id = $_GET['id'];
			if($_GET['action']=="reject"){
				$update_status = mysqli_query($conn, "UPDATE booking SET status='rejected' WHERE bookingID = '$book_id'")or die("Стана грешкка " . mysql_error()); 
				if($update_status){
					header("Refresh: 0.5; url=rejected_requests.php");
				}
				
			}
			if($_GET['action']=="accept"){
				$update_status = mysqli_query($conn, "UPDATE booking SET status='accepted' WHERE bookingID = '$book_id'")or die("Стана грешкка " . mysql_error()); 
				if($update_status){
					header("Refresh: 0.5; url=required_requests.php");
				}
			}
		}			
	
 ?>