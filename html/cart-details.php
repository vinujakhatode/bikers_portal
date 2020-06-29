<?php
// Report all errors except E_NOTICE
		error_reporting(E_ALL & ~E_NOTICE);

    ob_start();
    session_start();

    if(!isset($_SESSION['user'])){
        echo "You are logged out";
        header('location: index.php');
    }
  include('config.php')

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Font awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

   <style>
   .cart-details{
     padding-top: 3rem;
   }
   .btn-round {
 border-width: 1px;
 border-radius: 30px !important;
 padding: 11px 23px;
}

.btn-primary {
 border-width: 2px;
 font-weight: 400;
 font-size: 0.8571em;
 line-height: 1.35em;
 margin: 5px 1px;
 border: none;
 border-radius: 0.1875rem;
 padding: 11px 22px;
 cursor: pointer;
 background-color: #18D26E;
 color: #FFFFFF;
}

.btn-warning {
 border-width: 2px;
 font-weight: 400;
 font-size: 0.8571em;
 line-height: 1.35em;
 margin: 5px 1px;
 border: none;
 border-radius: 0.1875rem;
 padding: 11px 22px;
 cursor: pointer;
 background-color: #18D26E;
 color: #FFFFFF;
}

h2{
   font-size: 2.5em;
   margin-bottom: 30px;
   font-weight: 400;
   line-height: 1.1;
   color: inherit;
   font-family: 'Montserrat', sans-serif;
   padding-bottom: 1rem;
}

.btn-checkout{
  float: right;
  margin-right: 5rem;
}

.success-message{
  color: green;
  padding: 2rem;
}
   </style>
  </head>
  <body>
    <?php
      include('main_nav.php');



    ?>


    <div class="cart-details">
      <div class="container">
        <h2>Your Shopping Cart</h2>
        <a href="Book-a-bike.php" class="btn btn-primary btn-round"><i class="fa fa-chevron-left"></i>&nbsp Back</a>
        <div id="add-message">
          <p class="success-message text-dark"><?php if(isset($msg1)){echo $msg1;} ?></p>
        </div>
        <hr color="#18D26E">
      </div>

      <div class="table-responsive">
        <table class="table m-5">
          <tr>
            <th width="20%">Image</th>
            <th width="15%">Model</th>
            <th width="13%">Pick-Up Date</th>
            <th width="13%">Drop-Off Date</th>
            <th width="13%">Total Time</th>
            <th width="13%">Total Amount</th>
            <th width="13%">Action</th>
          </tr>
          <?php
                $user = $_SESSION['user'];
                $query = "SELECT * FROM cart WHERE user='$user'";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)){
                  $model_id = $row['model'];

                  $model_name = $row['model_name'];
                  $image = $row['image'];
                  $pickup_date = $row['pickup_date'];
                  $dropoff_date = $row['dropoff_date'];
                  $total_days = $row['total_days'];
                  $total_hours = $row['total_hours'];
                  $price_per_hr = $row['price_per_hr'];
                  $price_per_day = $row['price_per_day'];
                  $total_time = "$total_days $total_hours";
                  $total_amount = (int)($total_days*$price_per_day)+($total_hours*$price_per_hr);

                  $insertquery2 = "INSERT INTO orders(user, model_id, model_name, image, pickup_date, dropoff_date, total_days, total_hours, total_time, total_amount, created_on) VALUES('$user','$model_id','$model_name','$image','$pickup_date','$dropoff_date','$total_days','$total_hours','$total_time','$total_amount',CURRENT_TIMESTAMP)";
                  $execute2 = mysqli_query($conn,$insertquery2);
                  // $UPDATE = "INSERT INTO cart SET total_amout='$total_amount' WHERE model='$model_id' AND user='$user'";
                  // $perform_query = mysqli_query($conn,$UPDATE);
              ?>
              <tr >
                <td><img src="<?php echo $image ?>" alt="bike image" width="100rem" height="100rem" align="center"></td>
                <td><?php echo $model_name; ?></td>
                <td><?php echo $pickup_date; ?></td>
                <td><?php echo $dropoff_date; ?></td>
                <td><?php echo $total_time; ?></td>
                <td>Rs.<?php echo $total_amount; ?></td>
                <td><a href="remove-item.php?action=delete&model=<?php echo $model_id ;?>"><span class="text-danger">Remove</span></a></td>

              </tr>
            <?php } ?>

        </table>

        <a href="check.php" class="btn btn-warning btn-round btn-checkout"><i class="fa fa-chevron-left"></i>&nbsp Checkout</a>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </body>
</html>
