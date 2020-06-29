<?php
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
    <title>User bike</title>
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
                <a href="personal.php?Name=<?php echo $_SESSION['user'];?>" >Personal Info</a>
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
            <h1>Bike details:</h1>
            <div class="row">
                <div class="col-md-5 py-2">
            <?php
              $sql1 = "SELECT * FROM users_bike WHERE Email=(SELECT Email FROM user_info WHERE Name = '".$_SESSION['user']."')";
              $result = mysqli_query($conn, $sql1);
              while($row = mysqli_fetch_array($result)){
            ?>
              <div class="bike-img">
                <?php if($row['image'] != ""): ?>
                  <img src="../html/user_bike/<?= $row['image']; ?>" alt="bike image" width="300px" height="300px">
                <?php else: ?>
                  <img src="../html/bike image/default.jpg" alt="Sorry, Picture not available.">
                <?php endif; ?>
              </div>
            <?php } ?>
          </div>
          <div class="col-md-7 py-2">
                  <?php
                  include("config.php");
                    // $user = $_SESSION["user"];
                    $sql1 = "SELECT * FROM users_bike WHERE Email=(SELECT Email FROM user_info WHERE Name = '".$_SESSION['user']."')";
                    $result = mysqli_query($conn, $sql1);
                    while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <div class="bike-info" style="font-size: 1.3rem; font-family: 'Montserrat', sans-serif;">
               <strong><h1 style="margin-top:20px;" class="text-dark text-center rounded p-1">
                 <?= $row['model_name']; ?>
               </h1></strong>
               <p class="text-center text-dark">
                 Brand : <?= $row['brand_name']; ?><br>
                 Category : <?= $row['category']; ?><br>
                 Mileage : <?= $row['mileage']; ?><br>
                 Engine : <?= $row['engine']; ?><br>
                 Power : <?= $row['power']; ?><br>
                 Fuel Type : <?= $row['type_of_fuel']; ?><br>
                 
               </p>
             </div>
                    <?php } ?>
                  </div>
        </div>
    </center>
</div>
    </body>
    </html>