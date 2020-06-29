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
            <h1>Add bike details:</h1>
            <form action="userbike.php" method="post" enctype="multipart/form-data">
            <div id="bike-detail-left">
            <?php
                $user=$_SESSION['user'];
                //$user = $_GET['Name'];
                $user_profile= $conn->query("SELECT * FROM user_info WHERE Name='$user'");
                while($user_info=$user_profile->fetch_assoc()) {
                    ?>
            
            <div class="form_group">
                <label for="brand_name">Brand name</label> 
                 <input type="text" name="brand" id="brand_name" placeholder="Brand name">
            </div>
            <div class="form_group">
                <label for="model_year">Model year</label> 
                 <input type="text" name="year" id="model_year" placeholder="Year">
            </div>
            
            <div class="form_group">
                <label for="power">Power</label> 
                 <input type="text" name="power" id="power" placeholder="Power">
            </div>
            <div class="form_group">
                <label for="type_of_fuel">Type of fuel</label> 
                 <input type="text" name="fuel" id="type_of_fuel" placeholder="Fuel Type">
            </div>
            <div class="form_group">
                <label for="gear_count">Gear count:</label>
                <select name="gear" id="gear_count">
                <option value="0">0</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                </select>
                </div>

            </div>
        
        <div id="bike-detail-right">
            <div class="form_group">
                    <label for="model_name">Model name</label>
                    <input type="text" name="model" id="model_name" placeholder="Model name">
                 </div>
                 <div class="form_group">
                    <label for="mileage">Mileage</label> 
                     <input type="text" name="mileage" id="mileage" placeholder="Mileage">
                </div>
                
                <div class="form_group">
                    <label for="engine">Engine in CC</label> 
                     <input type="text" name="engine" id="engine" placeholder="Engine CC">
                </div>

                <div class="form_group">
                    <label for="category">Choose a bike category:</label>
                    <select name="category" id="category">
                    <option value="Normal_bike">Normal Bike</option>
                    <option value="Scooter">Scooter</option>
                    <option value="Sports_bike">Sports bike</option>
                    </select>
                    </div>
                <div class="form_group">
                    <label for="bike_pic">Upload bike image:</label>
                    <input type="file" name="bike_img" id="bike_pic">
                </div>    
                <div>
                
                </div>    
                </div>
                <button id="userbikesubmit"><input type="submit" name="submit" value="Submit" id="submit"></button>
                </form>
                <?php } ?>
                <h1><a href="view_bike.php">View bikes:</a></h1>
            </div>
            
        </div>
        
        <div class="clearfix"></div>
        </div>
        <?php 
        if (isset($_POST['submit'])){ 
            $brand= mysqli_real_escape_string($conn, $_POST['brand']);
            $model_year = mysqli_real_escape_string($conn, $_POST['year']);
            $power = mysqli_real_escape_string($conn, $_POST['power']);
            $fuel = mysqli_real_escape_string($conn, $_POST['fuel']);
            $gear_count = mysqli_real_escape_string($conn, $_POST['gear']);
            $model = mysqli_real_escape_string($conn, $_POST['model']);
            $mileage = mysqli_real_escape_string($conn, $_POST['mileage']);
            $engine = mysqli_real_escape_string($conn, $_POST['engine']);
            $category = mysqli_real_escape_string($conn, $_POST['category']);
            $target = "user_bike/".basename($_FILES['bike_img']['name']);
            $image = $_FILES['bike_img']['name'];

            $insertquery = "UPDATE `users_bike` SET `brand_name`='$brand',`model_name`= '$model',`category`= '$category',`mileage`= '$mileage',`model_year`= '$model_year',`power`= '$power',`type_of_fuel`= '$fuel',`gear_count`='$gear_count',`engine`='$engine',`image`='$image' WHERE Email=(SELECT Email FROM user_info WHERE Name = '".$_SESSION['user']."')";
            mysqli_query ($conn,$insertquery);
            if(isset($image)){
                if(move_uploaded_file($_FILES['bike_img']['tmp_name'], $target)){
                    $msg = "hahahha";
                }
                else{
                    $msg = "Unsuccesssful";
                }
            }
        }
        ?>

        </center>
        </div>
    <?php ?>
</body>
</html>