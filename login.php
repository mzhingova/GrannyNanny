<?php  

require('connection/connection.php');
	
if (isset($_POST['email']) and isset($_POST['pass'])){
	
$email = $_POST['email'];
$password = $_POST['pass'];
		
$query = "SELECT * FROM `parenuser` WHERE email='$email' AND pass='$password'";

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);

		
if ($count == 1){
$_SESSION['email'] = $email;

}else{
		
echo "Invalid Login Credentials.";
}
}
		
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
header("Location: congratulations.php");
}
?>

