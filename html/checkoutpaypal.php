<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://js.braintreegateway.com/web/dropin/1.22.1/js/dropin.min.js"></script>
  <script>
    
    $.ajax({
      url: "token.php",
      type: "get",
      dataType: "json",
      success: function(data){
       
        var button = document.querySelector('#submit-button');

        braintree.dropin.create({
          authorization: data,
          container: '#dropin-container'
        }, function (createErr, instance) {
          button.addEventListener('click', function () {
            instance.requestPaymentMethod(function (err, payload) {
              // Submit payload.nonce to your server
            });
          });
        });
          }
        });
    
  </script>
  <title>Document</title>
</head>
<body>
  <div id="dropin-container" style="width: 50%;"></div>
  <button id="submit-button" >Request payment method</button>
</body>
</html>
