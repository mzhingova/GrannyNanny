<?php  
error_reporting(E_ALL); ini_set('display_errors', 1);
	
	$conn  = new mysqli("localhost", "root", "", "grannynanny");
			if(! $conn )
			{
				die('Could not connect: ' . mysql_error());
			}

	
if (isset($_POST['email']) and isset($_POST['pass'])){
	
$email = $_POST['email'];
$password = $_POST['pass'];
		
$query = "SELECT * FROM `parenuser` WHERE email='$email' AND pass='$password'";

$result = mysqli_query($conn,$query) or die(mysql_error());
$count = mysqli_num_rows($result);

		
if ($count == 1){

while($row=mysqli_fetch_array($result)){
	echo  "Hello ".$row['firstname'];
}
}
else{
		
echo "Invalid Login Credentials.";
}
}
		
?>
