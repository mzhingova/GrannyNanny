<?php
if (isset($_POST['submit'])){
 if (isset($_POST['accept'])){
$update_status = mysqli_query($conn, "UPDATE booking SET status='accepted' WHERE bookingID = '$book_id'")or die("Стана грешкка " . mysql_error()); 
if($update_status){
	header("Refresh: 5; url=home_page.php");
}
}
	
	if (isset($_POST['reject'])){
$update_status = mysqli_query($conn, "UPDATE booking SET status='rejected' WHERE bookingID = '$book_id'")or die("Стана грешкка " . mysql_error()); 
if($update_status){
	header("Refresh: 5; url=home_page.php");
}
	}
}
}
}

 ?>