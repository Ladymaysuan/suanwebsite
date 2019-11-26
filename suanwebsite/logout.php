<?php
include_once('config.php');
$title = "logout";
include_once('header.php');


$br = "<br/>";
session_start();
session_destroy();
?>

<center><h1>Logged Out Successfully</h1><br><br><a href="index.php">HomePage</a></center>




<?php
include_once('footer.php');
?>