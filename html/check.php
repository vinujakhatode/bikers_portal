
<?php
// Report all errors except E_NOTICE
		error_reporting(E_ALL & ~E_NOTICE);
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
    <title>Checkout</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/tour.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
    .bike-img{
  margin-top: 60px;
  /* padding-bottom: 1rem; */
    }
		/* .container .col-md-7 h2{
			margin-top: 0;
		} */
  </style>
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
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link d-none">Why Us?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Pricing</a>
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


        <!-- <div class="user-right"> -->


            <?php
                $ar="SELECT * FROM cart ";
                // $ar = "SELECT * FROM users_bike WHERE email=(SELECT Email FROM user_info WHERE Name = '".$_SESSION['user']."')";
                $arr = $conn->query($ar) or die($conn-> error);
                while($row = mysqli_fetch_assoc($arr)){
									$total_days = $row['total_days'];
									$total_hours = $row['total_hours'];
										$total_time = "$total_days $total_hours";
                    $total_amount = (int)($row['total_days']*$row['price_per_day'])+($row['total_hours']*$row['price_per_hr']);

            ?>

						<div class="container">
							<h1 class="text-dark">CHECKOUT DETAILS:</h1>
							<div class="row">
								<div class="col-md-5">
									<div class="bike-img">
		                <?php if($row['image'] != ""): ?>
		                  <img src="<?= $row['image']; ?>" alt="bike image" width="400rem" height="300rem">
		                <?php else: ?>
		                  <img src="../html/bike image/default.jpg" alt="Sorry, Picture not available.">
		                <?php endif; ?>
		              </div>
								</div>
								<div class="col-md-7">
									<div class="bike-info" style="font-size: 1.3rem; font-family: 'Montserrat', sans-serif;">
		                <strong><h1 style="margin-top:20px;" class="text-dark text-center rounded">
		                  <?= $row['model_name']; ?>
		                </h1></strong>
		                <br>
		                <!-- <h2 class="text-danger">
		                  Price : RS.<?= $row['price_per_hr']; ?> /hr
		                </h2> -->

		                <p class=" text-dark">
		                  <strong>Pickup Date:</strong> <?= $row['pickup_date']; ?><br>
											<strong>Dropoff Date:</strong> <?= $row['dropoff_date']; ?><br>
											<strong>Total time:</strong> <?php echo $total_time; ?><br>
											<!-- Total Amount: <?= $row['total_amount']; ?><br> -->
											<strong>Total Amount:</strong> <i class="fa fa-rupee"></i>Rs.<?php echo $total_amount; ?><br>
		                </p>
										<p class=" text-dark">
											<i class="fa fa-location-arrow"></i><strong>Pickup location:</strong> Arya Samaj Bhavan, Katra Abdul Gani Fatehpur, Mumbai
India - 212601
										</p>
		              </div>

			                <?php } ?>
			                <a href="checkoo.php" class="btn btn-warning btn-round btn-checkout"><i class="fa fa-chevron-left"></i><h5>&nbsp Pay Now &nbsp</h5></a>
								</div>
							</div>
						</div>

    <!-- </div> -->
    </center>
</div>
























    </body>


</html>
