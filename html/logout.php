<?php

session_start();
// $message = "You're logged out, Please Login Again";
// $message = "You are logged out. Please Login Again.";
// setcookie('emailcookie','',time()-(10*365*24*60*60));
// setcookie('passwordcookie','',time()-(10*365*24*60*60));
session_destroy();

header('location:index.php');

?>
