<?php
session_start();
?>
<?php

$pageTitle = ' Profile page';

echo "Hello ".($_SESSION["name"])." welcome to your profile page!";

?>