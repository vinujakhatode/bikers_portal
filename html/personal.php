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
    <title>User profile</title>
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
            <form action="personal.php" method="post" enctype="multipart/form-data">
            <input type="image" id="updatepic" src="../assests/images/updatepic2.jpg" alt="Submit" >
            </form>
            <!-- <input type="file" name="profile_pic"> -->
            
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
            <h1>Personal Information</h1>
            <?php
                $user=$_SESSION['user'];
                //$user = $_GET['Name'];
                $user_profile= $conn->query("SELECT * FROM user_info WHERE Name='$user'");
                while($user_info=$user_profile->fetch_assoc()) {
                    ?>
            
               <div class="form_group">
                   <label for="Name">Enter your name:<br><?php echo $_SESSION['user'];  ?></label>
                   <!-- <input type="text" id="Name" placeholder="Full Name"> -->
                </div>
                
                <div class="form_group">
                    <label for="Address">Enter your address:<br><?= $user_info['Address']; ?> </label>
                    <!-- <input type="address" id="Address" placeholder="Full address"> -->
                 </div>
                 <div class="form_group">
                    <label for="DOB">Enter your Data of birth:<br> <?= $user_info['DOB']; ?></label>
                    <!-- <input type="date" id="DOB" placeholder="Date of birth"> -->
                 </div>
                 <div class="form_group">
                    <label for="Adhar_no">Enter your adhar card number:<br> <?= $user_info['Adhar_no']; ?></label>
                    <!-- <input type="number" id="Adhar_no" placeholder="Adhar number"> -->
                 </div>
                 <form action="personal.php" method="post" enctype="multipart/form-data">
                 <!-- <form action="/action_page.php"> -->
                    <div class="form_group">
                        <label for="Adhar_image">Upload your adhar card:</label> 
                         <input type="file" name="adhar_pic" id="Adhar_image">
                    </div>
                    <div class="form_group">
                        <label for="Licences_image">Upload your licences card:</label> 
                         <input type="file" name="licences_pic" id="Licences_image">
                    </div>
                    <!-- <button><input type="submit" value="Submit" id="submit"></button> -->
                    <button type="submit" id="submit" name="submit">Submit</button>
                    <button id="update"><a href="update-personal.php"> Update</a></button>
            </form>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php 
    if (isset($_POST['submit'])){ 
        
        
        // $adhar = $_FILES['adhar_pic'];
        // // $licences = $_FILES['licences_pic'];
        
        // $adharfilename = $adhar['name'];
        // $adharfileerror = $adhar['error'];
        // $adharfiletmp = $adhar['tmp_name'];

        // $adharfileext = explode('.',$adharfilename);
        // $adharfilecheck = strtolower(end($adharfileext));

        // $adharfilestored = array('png','jpg','jpeg');

        // if(in_array($adharfilecheck,$adharfilestored)){

        //     $destinationfile = 'User_profile/Adhar_image'.$adharfilename;
        //     move_uploaded_file($adharfiletmp,$destinationfile);

        //     $toinsert = "INSERT INTO 'user_info'('Adhar_image') VALUES ('$destinationfile')";
        //     $final = mysqli_query($conn,$toinsert);
        // }
        $target = "User_profile/Adhar_image/".basename($_FILES['adhar_pic']['name']);
        $image = $_FILES['adhar_pic']['name'];
        
            //$sql2 = "INSERT INTO user_info (Adhar_image) VALUES ('$image')";
            $sql2 = "UPDATE user_info SET Adhar_image = '$image' WHERE Name = '".$_SESSION['user']."'";
            mysqli_query($conn, $sql2);
            if(isset($image)){
                if(move_uploaded_file($_FILES['adhar_pic']['tmp_name'], $target)){
                    $msg = "hahahha";
                }
                else{
                    $msg = "Unsuccesssful";
                }
            }

            $target = "User_profile/Licences_image/".basename($_FILES['licences_pic']['name']);
            $image = $_FILES['licences_pic']['name'];
            
                //$sql2 = "INSERT INTO user_info (Adhar_image) VALUES ('$image')";
                $sql2 = "UPDATE user_info SET Licences_image = '$image' WHERE Name = '".$_SESSION['user']."'";
                mysqli_query($conn, $sql2);
                if(isset($image)){
                    if(move_uploaded_file($_FILES['licences_pic']['tmp_name'], $target)){
                        $msg = "hahahha";
                    }
                    else{
                        $msg = "Unsuccesssful";
                        echo "<script>alert('Empty');</script>";
                    }
                }    
        
        

    }
    
    ?>
   
   </center>
</div>
</body>
</html>