<?php
 session_start();
 ?>

<?php 
$pageTitle = 'Log-in';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli('localhost', 'root', '', 'grannynanny');

if (!$conn) {
    die('Could not connect: ' . mysql_error());
    exit;
}
$conn ->set_charset("utf8");
?>

<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$motivation = $_POST['motivation'];
$workout = $_POST['workout'];
$city = $_POST['city'];
$education = $_POST['education'];
$work_status = $_POST['work_status'];
$password = $_POST['password'];
$pass2 = $_POST['pass2'];
$pass=$_POST['pass'];
$isAdmin = $_SESSION['status'];
if ($isAdmin=='admin') {
    $userID= $_POST['userID'];
}else {
    $userID=$_SESSION['userID'];
}





if (!empty($firstname)) {
        if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $firstname)) { 
        $query=mysqli_query($conn, "UPDATE parenuser SET `firstname`='$firstname' WHERE userID='$userID'") or die(mysql_error());
        if ($query) {
            header("Refresh: 0; url=nanny_profil.php");
        }
        } 
        else {
            echo "Моля въведете валидно име.";
        }
    } 

    if (!empty($lastname)) {
        if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $lastname)) { 
        $query=mysqli_query($conn, "UPDATE parenuser SET `lastname`='$lastname' WHERE userID='$userID'") or die(mysql_error());
        if ($query) {
            header("Refresh: 0; url=nanny_profil.php");
        }
        } 
        else {
            echo "Моля въведете валидно фамилия.";
        }
    } 
if(!empty($address))
{
    mysqli_query($conn, "UPDATE parenuser SET `address`='$address' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your Address");
} 
if(!empty($tel))
{
    mysqli_query($conn, "UPDATE parenuser SET `tel`='$tel' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your Telephone");
} 
if(!empty($motivation))
{
    mysqli_query($conn, "UPDATE parenuser SET `motivation`='$motivation' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your Motivation");
} 
if(!empty($workout))
{
    mysqli_query($conn, "UPDATE parenuser SET `workout`='$workout' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your Workout");
} 
if(!empty($city))
{
    mysqli_query($conn, "UPDATE parenuser SET `city`='$city' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your City");
} 
if(!empty($education))
{
    mysqli_query($conn, "UPDATE parenuser SET `education`='$education' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your Education");
} 
if(!empty($work_status))
{
    mysqli_query($conn, "UPDATE parenuser SET `work_status`='$work_status' WHERE userID='$userID'") or die(mysql_error());
                echo("You have successfully updated your Work stauts");
} 

if(!empty($pass))
{
    mysqli_query($conn, "UPDATE parenuser SET `pass`='$pass' WHERE userID='$userID'") or die(mysql_error());
                
                echo("You have successfully updated your Password");       
}




// if(!empty($folder))
// {
 //   mysqli_query($conn, "UPDATE parenuser SET `uploads`='$folder' WHERE userID='$userID'") or die(mysql_error());
                
 //               echo("You have successfully updated your picture");
// }



?>