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
$_SESSION['email'] = $email;

}else{
		
echo "Invalid Login Credentials.";
}
}
		
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
<<<<<<< HEAD

=======
header("Location: user_profile.php");
>>>>>>> e12858c1b7f9d7fd150e85700d1072260345cff1
}
?>

