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
$email = $_POST['email'];
$pass2 = $_POST['pass2'];
$pass=$_POST['pass'];
if (!empty($email)) {
    $check = "SELECT * FROM parenuser WHERE email = '$email'";
    $rs = mysqli_query($conn, $check) or die("Error in the consult.." . mysqli_error());
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
    if ($data[0] = 1)
        if (!empty($pass) && !empty($pass2)) {
            if (preg_match("/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/", $pass))
            {
                if ($pass == $pass2) {
                    $query=mysqli_query($conn, "UPDATE parenuser SET `pass`='$pass' WHERE email='$email'") or die(mysql_error());
                    if ($query) {
                        header("Refresh: 0; url=login.php");
                    }
                }
                else
                {
                    echo ("Паролите ви не съвпадат");
                }
            }
            else
                echo("Моля въведете валидна парола");
        }
    }
    ?>