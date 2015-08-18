<?php
session_start();
?>
<?php

$pageTitle = ' Profile page';

echo "Hello ".($_SESSION["name"])." ".($_SESSION["lastname"])." welcome to your profile page!";

?>