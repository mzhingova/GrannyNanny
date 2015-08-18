<?php  
session_start();
?>
<?php
$pageTitle = 'Log-in';


error_reporting(E_ALL); ini_set('display_errors', 1);
	
	$conn  = mysqli_connect('localhost', 'root', '', 'grannynanny');
			if(! $conn )
			{
				die('Could not connect: ' . mysql_error());
				exit;
			}
			
	
if (isset($_POST['email']) and isset($_POST['pass']))
{
	$email = $_POST['email'];
	$password = $_POST['pass'];
		
	$query = mysqli_query($conn,"SELECT * FROM parenuser WHERE email='$email' AND pass='$password'") or die(mysql_error());
	$count = mysqli_num_rows($query);
	if(!$query)
	{
		echo mysqli_error($conn);
	}
	
	if ($count == 1)
	{
		while($row = $query->fetch_assoc())
		{
			$_SESSION["name"] = $row['firstname'];
			//$_SESSION["pass"] = $row['pass'];
			header('Location: user_profile.php');
		}	

	}

else
{
	echo "Invalid Login Credentials.";
}
} 
 		
?>

