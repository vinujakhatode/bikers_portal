<?php

session_start();

include('config.php');

if(isset($_GET['token'])){

  $token = $_GET['token'];

  $update_query = "UPDATE user_info SET status='Active' WHERE token='$token' ";

  $query = mysqli_query($conn, $update_query);

  if($query){
    if(isset($_SESSION['msg'])){
      $_SESSION['msg'] = "Account activated successfully. You can login now!";
      header('location:index.php');
    }
    else{
      $_SESSION['msg'] = "You are logged out.";
      header('location:index.php');
    }
  }
  else {
    $_SESSION['msg'] = "Account not activated.";
    header('location:signup.php');
  }
}
 ?>
