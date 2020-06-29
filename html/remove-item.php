<?php

ob_start();
    session_start();

    if(!isset($_SESSION['user'])){
        echo "You are logged out";
        header('location: index.php');
    }
  include('config.php');

    if(($_GET['action'] == 'delete') && isset($_GET['model'])){

      $user = $_SESSION['user'];

      $query = "DELETE FROM cart WHERE model = '".$_GET['model']."' AND user='$user' ";
      $result = mysqli_query($conn,$query);

      $query1 = "DELETE FROM orders WHERE model_id = '".$_GET['model']."' AND user='$user' ";
      $result = mysqli_query($conn,$query1);
      if($query){
        $msg1 = "Bike removed successfully.";
        echo "<meta http-equiv='refresh' content='0;url=cart-details.php'>";
      }
      else{
        $msg1 = "Error occured while removing bike.";
      }
    }
 ?>
