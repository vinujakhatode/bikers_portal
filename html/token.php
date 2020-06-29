<?php 
    require "./boot.php";
   $clientToken = $gateway->clientToken()->generate([]); 
   echo json_encode($clientToken);
    
?>