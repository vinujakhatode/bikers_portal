<?php
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
    <title>Bike Details</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- date picker css -->
    <link rel="stylesheet" href="../assests/css/jquery.datetimepicker.min.css">
    <!--Font awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <style>

    .view-Details{
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

h2{
    font-size: 2.5em;
    margin-bottom: 30px;
    font-weight: 400;
    line-height: 1.1;
    color: inherit;
    font-family: 'Montserrat', sans-serif;
    padding-bottom: 1rem;
}

.bike-img{
  padding-top: 1rem;
  padding-bottom: 1rem;
  /* border: 1px solid black; */
}
.view-Details .row .col-md-7 .pull-left{
  padding-left: 7rem;
}
.view-Details .row .col-md-7 .pull-right{
  padding-right: 7rem;
  padding-left: 3rem;
}
.card-img-top {
    flex-shrink: 0;
    width: 100%;
    height: 200px;
}
.card-deck{
  height: 32rem;
}



#footer{
  margin-top: 3rem;
}

h4, .h4 {
    font-size: 1.714em;
    line-height: 1.45em;
    margin-top: 30px;
    margin-bottom: 15px;
}
h1, h2, h3, h4, h5, h6 {
    font-weight: 400;
}
.btn-round {
    border-width: 1px;
    border-radius: 30px !important;
    padding: 11px 23px;
}
.btn-warning {
    background-color: #FFB236;
    color: #FFFFFF;
}
.modal-content .modal-body+.modal-footer {
    padding-top: 0;
}
.modal-content .modal-footer {
    border-top: none;
    padding-right: 24px;
    padding-bottom: 16px;
    padding-left: 24px;
    -webkit-justify-content: space-between;
    justify-content: space-between;
}
.btn-round {
    border-width: 1px;
    border-radius: 30px !important;
    padding: 11px 23px;
}
.btn-primary {
    background-color: #f96332;
    color: #FFFFFF;
}

.success-message{
  /* border: 1px solid red; */
  color: green;
  padding-left: 2rem;
}

    </style>
  </head>
  <body>
    <?php
      include('main_nav.php');


  if(isset($_POST['add-to-cart'])){
    $model_id = $_GET['model_id'];
    $query = "SELECT * FROM bikes_info WHERE model_id = '$model_id'";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)){
      $user = $_SESSION['user'];
      $model = $row['model_id'];
      $model_name = $row['model_name'];
      $image = $row['image'];
      $pickup_date = $_POST['pickup_date'];
      $dropoff_date = $_POST['dropoff_date'];
      // $total_days = $_POST['total_days'];
      // $total_hours = $_POST['total_hours'];
      $price_per_hr = $row['price_per_hr'];
      $price_per_day = $row['price_per_day'];
      $current_date = date("Y-m-d H:i:s");

      $pickup_date = new DateTime($pickup_date);
      $dropoff_date = new DateTime($dropoff_date);
      $diff = $dropoff_date->diff($pickup_date);

      $pickup_date = $pickup_date->format('Y-m-d H:i:s');
      $dropoff_date = $dropoff_date->format('Y-m-d H:i:s');

      $total_days = $diff->d.' days'."\n";
      $total_hours = $diff->h.' hours'."\n";

      $check_item = "SELECT * FROM cart WHERE model='$model' AND user='$user'";
      $p_check = mysqli_query($conn,$check_item);

      $item_count =  mysqli_num_rows($p_check);

       if($item_count>0){
         $msg = "Bike ride is alredy booked.";
       }
       else {
         $insertquery = "INSERT INTO cart(user, model, model_name, image, pickup_date, dropoff_date, total_days, total_hours, price_per_hr, price_per_day, created_on) VALUES('$user','$model','$model_name','$image','$pickup_date','$dropoff_date','$total_days','$total_hours','$price_per_hr','$price_per_day',CURRENT_TIMESTAMP)";
         $execute = mysqli_query($conn,$insertquery);
         // $insertquery2 = "INSERT INTO orders(user, model_id, model_name, image, pickup_date, dropoff_date, total_days, total_hours, created_on) VALUES('$user','$model','$model_name','$image','$pickup_date','$dropoff_date','$total_days','$total_hours',CURRENT_TIMESTAMP)";
         // $execute2 = mysqli_query($conn,$insertquery2);
         $msg = "Bike ride added to cart.";
       }
    }
  }

?>

    <div class="view-Details">
      <div class="container">
        <h2>Bike Details</h2>
        <div id="add-message">
          <p class="success-message"><?php if(isset($msg)){echo $msg;} ?></p>
        </div>
        <a href="Book-a-bike.php" class="btn btn-primary btn-round"><i class="fa fa-chevron-left"></i>&nbsp Back</a>
        <hr color="#18D26E">
        <div class="row">
          <div class="col-md-5 py-2">
            <?php
              $model_id = $_GET['model_id'];
              $query = "SELECT * FROM bikes_info WHERE model_id = '$model_id'";
              $result = mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($result)){
            ?>
              <div class="bike-img">
                <?php if($row['image'] != ""): ?>
                  <img src="<?= $row['image']; ?>" alt="bike image" width="420rem" height="320rem">
                <?php else: ?>
                  <img src="../html/bike image/default.jpg" alt="Sorry, Picture not available.">
                <?php endif; ?>
              </div>
            <?php } ?>
          </div>
          <div class="col-md-7 py-2">
             <?php
                $query = "SELECT * FROM bikes_info WHERE model_id = '$model_id'";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)){
             ?>
             <div class="bike-info" style="font-size: 1.3rem; font-family: 'Montserrat', sans-serif;">
               <strong><h1 style="margin-top:20px;" class="text-dark text-center rounded p-1">
                 <?= $row['model_name']; ?>
               </h1></strong>
               <br>
               <h2 class="text-danger text-center">
                 Price : RS.<?= $row['price_per_hr']; ?> /hr
               </h2>

               <p class="text-center text-dark">
                 Brand : <?= $row['brand_name']; ?><br>
                 Category : <?= $row['category_id']; ?><br>
                 Mileage : <?= $row['mileage']; ?><br>
                 Engine : <?= $row['engine']; ?><br>
                 Power : <?= $row['power']; ?><br>
                 Fuel Type : <?= $row['type_of_fuel']; ?><br>
                 Price per day : RS.<?= $row['price_per_day']; ?> /day<br>
                 Availability : <?= $row['count']; ?> bikes
               </p>
             </div>
             <br>
             <form name="add-to-cart-form" class="form-submit"  method="post">
               <!-- <h6>*NOTE - If you're booking bike only for some hours then enter total number of hours in hours field only. <strong>Do not enter '0'.</strong></h6> -->
               <div class="row mb-5 mt-4">
                 <div class="col-md-6">
                   <label for="pick-up-date" class="label control-label text-dark"><strong>Pick Up Date</strong></label>
                   <input type="text" id="picker1" name="pickup_date" class="form-control" width="rem">
                 </div>
                 <div class="col-md-6">
                   <label for="pick-up-date" class="label control-label text-dark"><strong>Drop Off Date</strong></label>
                   <input type="text" id="picker2" name="dropoff_date" class="form-control" width="rem">
                 </div>
                 <!-- <div class="row mt-3 mb-5">
                   <div class="col-md-6">
                     <label for="total_days" class="label control-label text-dark">No. of days</label>
                     <input type="text" name="total_days" class="form-control" width="rem">
                   </div>
                   <div class="col-md-6">
                     <label for="total_hours" class="label control-label text-dark">No. of Hours</label>
                     <input type="text" name="total_hours" class="form-control" width="rem">
                   </div> -->
               </div>

               <div class="pull-left">
                 <button class="btn btn-danger"><i class="fa fa-heart-o"></i>
                   <a href="#" class="text-light">&nbsp Add to Wishlist</a>
                 </button>
               </div>
               <div class="pull-right">
                 <input type="hidden" name="model" value="<?= $row['model_id'] ?>">
                 <input type="hidden" name="model_name" value="<?= $row['model_name'] ?>">
                 <input type="hidden" name="image" value="<?= $row['image'] ?>">
                 <!-- <input type="hidden" name="pickup_date" value="<?= $row['mileage'] ?>">
                 <input type="hidden" name="dropoff_date" value="<?= $row['mileage'] ?>">
                 <input type="hidden" name="total_days" value="<?= $row['mileage'] ?>">
                 <input type="hidden" name="total_hours" value="<?= $row['mileage'] ?>"> -->
                 <input type="hidden" name="price_per_hr" value="<?= $row['price_per_hr'] ?>">
                 <input type="hidden" name="price_per_day" value="<?= $row['price_per_day'] ?>">
                 <button type="submit" name="add-to-cart" class="btn btn-success btn-block text-light add-item-btn">
                   <i class="fa fa-motorcycle"></i>&nbsp;&nbsp;&nbsp;Book Ride</button>
               </div>
             </form>
           <?php } ?>
          </div>
        </div>
      </div>
      <div class="container">
        <hr color="#18D26E">
        <h2>Recommended bikes for you:</h2>
        <?php
          $recommend = "SELECT * FROM recommend WHERE model_id = '$model_id'";
          $recommend_result = mysqli_query($conn,$recommend);
          while($row = mysqli_fetch_array($recommend_result)){
            $a=$row['bike1'];
            $b=$row['bike2'];
            $c=$row['bike3'];
            $d=$row['bike4'];
        ?>
        <div class="row">
          <div class="col-md-3">
            <?php
            $ar="SELECT * FROM bikes_info WHERE model_id='$a' ";
            $arr = $conn->query($ar) or die($conn-> error);
            $arres=$arr->fetch_assoc();
            // $model_id = $arres['model_id'];
            ?>
            <div class="card-deck">
              <div class="card border-secondary">
                <img width="auto" height="150px" src="<?= $arres['image']; ?>" class="card-img-top">
                <div class="p-2">
                  <h4 style="margin-top:20px;" class="text-dark text-center rounded p-1">
                    <?= $arres['model_name']; ?>
                  </h4>
                </div>
                <div class="card-body">
                  <h4 class="card-title text-danger">
                    Price : RS.<?= $arres['price_per_hr']; ?> /hr
                  </h4>
                  <p class="text-dark">
                    Brand : <?= $arres['brand_name']; ?><br>
                    Mileage : <?= $arres['mileage']; ?><br>
                    Availability : <?= $arres['count']; ?> bikes
                  </p>
                  <div class="pull-left">
                    <button class="btn btn-outline-danger"><i class="fa fa-heart-o"></i></button>
                  </div>
                  <div class="pull-right">
                    <button class="btn btn-success btn-block">
                      <a href="bike-details.php?model_id=<?php echo $arres['model_id'];?>" class="text-light p-4">View Details</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <?php
            $ar="SELECT * FROM bikes_info WHERE model_id='$b' ";
            $arr = $conn->query($ar) or die($conn-> error);
            $arres=$arr->fetch_assoc()
            ?>
            <div class="card-deck">
              <div class="card border-secondary">
                <img width="auto" height="150px" src="<?= $arres['image']; ?>" class="card-img-top">
                <div class="p-2">
                  <h4 style="margin-top:20px;" class="text-dark text-center rounded p-1">
                    <?= $arres['model_name']; ?>
                  </h4>
                </div>
                <div class="card-body">
                  <h4 class="card-title text-danger">
                    Price : RS.<?= $arres['price_per_hr']; ?> /hr
                  </h4>
                  <p class="text-dark">
                    Brand : <?= $arres['brand_name']; ?><br>
                    Mileage : <?= $arres['mileage']; ?><br>
                    Availability : <?= $arres['count']; ?> bikes
                  </p>
                  <div class="pull-left">
                    <button class="btn btn-outline-danger"><i class="fa fa-heart-o"></i></button>
                  </div>
                  <div class="pull-right">
                    <button class="btn btn-success btn-block">
                      <a href="bike-details.php?model_id=<?php echo $arres['model_id'];?>" class="text-light p-4">View Details</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <?php
            $ar="SELECT * FROM bikes_info WHERE model_id='$c' ";
            $arr = $conn->query($ar) or die($conn-> error);
            $arres=$arr->fetch_assoc()
            ?>
            <div class="card-deck">
              <div class="card border-secondary">
                <img width="auto" height="150px" src="<?= $arres['image']; ?>" class="card-img-top">
                <div class="p-2">
                  <h4 style="margin-top:20px;" class="text-dark text-center rounded p-1">
                    <?= $arres['model_name']; ?>
                  </h4>
                </div>
                <div class="card-body">
                  <h4 class="card-title text-danger">
                    Price : RS.<?= $arres['price_per_hr']; ?> /hr
                  </h4>
                  <p class="text-dark">
                    Brand : <?= $arres['brand_name']; ?><br>
                    Mileage : <?= $arres['mileage']; ?><br>
                    Availability : <?= $arres['count']; ?> bikes
                  </p>

                  <div class="pull-left">
                    <button class="btn btn-outline-danger"><i class="fa fa-heart-o"></i></button>
                  </div>
                  <div class="pull-right">
                    <button class="btn btn-success btn-block">
                      <a href="bike-details.php?model_id=<?php echo $arres['model_id'];?>" class="text-light p-4">View Details</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <?php
            $ar="SELECT * FROM bikes_info WHERE model_id='$d' ";
            $arr = $conn->query($ar) or die($conn-> error);
            $arres=$arr->fetch_assoc()
            ?>
            <div class="card-deck">
              <div class="card border-secondary">
                <img width="auto" height="150px" src="<?= $arres['image']; ?>" class="card-img-top">
                <div class="p-2">
                  <h4 style="margin-top:20px;" class="text-dark text-center rounded p-1">
                    <?= $arres['model_name']; ?>
                  </h4>
                </div>
                <div class="card-body">
                  <h4 class="card-title text-danger">
                    Price : RS.<?= $arres['price_per_hr']; ?> /hr
                  </h4>
                  <p class="text-dark">
                    Brand : <?= $arres['brand_name']; ?><br>
                    Mileage : <?= $arres['mileage']; ?><br>
                    Availability : <?= $arres['count']; ?> bikes
                  </p>
                    <div class="pull-left">
                      <button class="btn btn-outline-danger"><i class="fa fa-heart-o"></i></button>
                    </div>
                    <div class="pull-right">
                      <button class="btn btn-success btn-block">
                        <a href="bike-details.php?model_id=<?php echo $arres['model_id'];?>" class="text-light p-4">View Details</a>
                      </button>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

    </div>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>SAWARI</h3>
                        <p>SAWARI IS HERE TO REDEFINE THE WAY YOU TRAVEL! RENT A BIKE ON AN HOURLY, DAILY, WEEKLY OR EVEN MONTHLY BASIS.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Explore</h4>
                        <ul>
                            <li>
                                <!-- <i class="fa fa-arrow-right"></i><a href="index.php">&nbsp;Home</a> -->
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="index.php">&nbsp;Home</a>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="#deals">&nbsp;Offer</a></i>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="blogs.php">&nbsp;Blogs</a></i>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="faq.php">&nbsp;FAQ</a></i>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Company</h4>
                        <ul>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="about.php">&nbsp;About Us</a>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="contact.php">&nbsp;Contact Us</a>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="terms&con.php">&nbsp;Terms and Conditions</a></i>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="policy.php">&nbsp;Privacy and Policy</a></i>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Connect</h4>
                        <p>We've gone Social! 'Like' our page on social media platform and join in the conversation with other customers just like you.</p>
                        <div class="social-links">
                            <a href="#" class="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#" class="linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#" class="telegram">
                                <i class="fa fa-telegram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assests/js/jquery.datetimepicker.full.min.js"></script>
    <script type="text/javascript">
      jQuery.datetimepicker.setLocale('id')
      $('#picker1').datetimepicker({
        timepicker: true,
        datepicker: true,
        format:'y-m-d H:i',
        value: '2020-5-10 9:21',
        hours12: false,
        step:30,
        yearStart: 2020,
        yearEnd: 2050
      });

      $('#picker2').datetimepicker({
        timepicker: true,
        datepicker: true,
        format:'y-m-d H:i',
        value: '2020-5-10 9:21',
        hours12: false,
        step:30,
        yearStart: 2020,
        yearEnd: 2050
      });


    </script>
  </body>
</html>
