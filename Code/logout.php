<?php
session_start();
session_unset();
session_destroy();
ob_start();
header("location:Non_main.php");
ob_end_flush(); 
include 'Non_main.php';
//include 'home.php';
exit();
?>