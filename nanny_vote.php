<?php 


error_reporting(E_ALL);
ini_set('display_errors', 1);


$conn = new mysqli("localhost", "root", "", "grannynanny");
if (!$conn) {
	die('Could not connect: ' . mysql_error());
	exit;
}
$conn->set_charset("utf8");

$nannyID=$_GET['nannyid'];
$ratingin=$_GET['rating'];
echo $ratingin;
echo $nannyID;
$average="";
$usernum="";


$vote = mysqli_query($conn,"SELECT * FROM parenuser where userID = '$nannyID' ")or die ("Стана грешкка " . mysql_error());
while($row= mysqli_fetch_array($vote)){
$rating = $row['rating'];	
$average=$row['average'];
$usernum=$row['usernum'];
$average=$row['average'];
}

$newusernum =$usernum +1;
$newrating=$rating+$ratingin;
$newaverage=$newrating/$newusernum;

$query = mysqli_query($conn, "UPDATE parenuser SET `usernum`='$newusernum',`rating`='$newrating',`average`='$newaverage' WHERE userID = '$nannyID'")or die ("Стана грешкка " . mysql_error());
if($query ){
	echo "Оценяшането бешеуспешно.";
	header("Refresh: 3; url=accepted_requests.php");
}
?>