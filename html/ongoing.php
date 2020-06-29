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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ongoing Bikes</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/tour.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<section id="header">
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="../assests/images/SAWARI-logo-4.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-colspan="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="main-page.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-none">Why Us?</a>
                    </li>
                    <li class="nav-item">
                        <a href="bike-price-user.php" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="blogs.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-none">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.php" class="nav-link">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<div id="usermain" class="usermain">
    <center>
    <div id="border-box">
        <div class="user-left">
            <img id="profile" src="../html/user image/user-profile.png">
            <img id="updatepic" src="../assests/images/updatepic2.jpg" >
            <div class="personal">
                <a href="personal.php?Name=<?php echo $_SESSION['user'];?>"" >Personal Info</a>
            </div>
            <div class="useropt">
               <a href="changepass.php">Change password</a>
           </div>
           <div class="useropt">
               <a href="userbike.php">User Bike</a>
           </div>
           <div class="useropt">
               <a href="history.php">History</a>
           </div>
           <div class="last">
               <a href="ongoing.php">Ongoing Bikes</a>
           </div>
        </div>
        <div class="user-right">
        <h1>Ongoing Bikes:</h1>
        
           <div class="table-responsive">
            <table class="table m-5">
            <tr>
            <th width="20%">Image</th>
            <th width="15%">Model</th>
            <th width="15%">Pick-Up Date</th>
            <th width="15%">Drop-Off Date</th>
            <th width="13%">Total Time</th>
            <th width="13%">Total Amount</th>
            
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
                  //For present date to compare history and ongoing
                  

                  $insertquery2 = "INSERT INTO orders(user, model_id, model_name, image, pickup_date, dropoff_date, total_days, total_hours, total_time, total_amount, created_on) VALUES('$user','$model_id','$model_name','$image','$pickup_date','$dropoff_date','$total_days','$total_hours','$total_time','$total_amount',CURRENT_TIMESTAMP)";
                  $execute2 = mysqli_query($conn,$insertquery2);
                  // $UPDATE = "INSERT INTO cart SET total_amout='$total_amount' WHERE model='$model_id' AND user='$user'";
                  // $perform_query = mysqli_query($conn,$UPDATE);
              ?>
              <?php
         $present_date=date("Y-m-d H:i:s");
         // echo "$present_date";
         if($present_date < $dropoff_date){ 
              ?>
             
         
              <tr>
                <td><img src="<?php echo $image ?>" alt="bike image" width="100rem" height="100rem" align="center"></td>
                <td><?php echo $model_name; ?></td>
                <td><?php echo $pickup_date; ?></td>
                <td><?php echo $dropoff_date; ?></td>
                <td><?php echo $total_time; ?></td>
                <td>Rs.<?php echo $total_amount; ?></td>
                </tr>
            <?php }
             }
           ?>
           </table>
        </div>

           
        </div>
        <div class="clearfix"></div>
        </div>
        </center>
        </div>
    
</body>
</html>