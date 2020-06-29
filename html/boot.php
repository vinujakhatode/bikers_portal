<?php 
//auto loading the packages
require "./lib/autoload.php";
// require_once "./lib/Braintree.php";
// require "./index.php";
$gateway = new Braintree\Gateway([
    'environment' => 'sandbox',
  'merchantId' => '3qb88n6vx52r8bk6',
  'publicKey' => 'wswj7nz5vn8np2x3',
  'privateKey' => '19cac29fb5ac7f44aa341be57a0a063b'
  ]);
   
// $noncefromClient = $_POST["paymentMethodNonce"];
// $result = $gateway->transaction()->sale([
//     'amount' => '1000.00',
//     'paymentMethodNonce' => $_POST['payment_method_nonce'],
//     'options' => [ 'submitForSettlement' => true ]
// ]);

// if ($result->success) {
//     print_r("success!: " . $result->transaction->id);
//     header("Loaction: success.php");
// } else if ($result->transaction) {
//     print_r("Error processing transaction:");
//     print_r("\n  code: " . $result->transaction->processorResponseCode);
//     print_r("\n  text: " . $result->transaction->processorResponseText);
// } else {
//     print_r("Validation errors: \n");
//     print_r($result->errors->deepAll());
// }
?>