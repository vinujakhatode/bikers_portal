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
    <title>Change password</title>
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
<?php 
    include("config.php");
    $user = $_SESSION["user"];
    $sql1 = "SELECT * FROM user_info WHERE Name = '$user'";
    $result = mysqli_query($conn, $sql1);
    while($row = mysqli_fetch_assoc($result)){

?>

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
            <h1>Change Password</h1>
            <form action="changepass.php" method="post" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="user-name">Enter your Old password</label>
                    <input type="password" id="user-name" name="old_pass" placeholder="Old password">
                 </div>
                 <div class="form_group">
                    <label for="user-name">Enter your New password</label>
                    <input type="password" id="user-name" name="new_pass" placeholder="New password">
                 </div>
                 <div class="form_group">
                    <label for="user-name">Confirm your New password</label>
                    <input type="password" id="user-name" name="c_pass" placeholder="Confirm new password">
                 </div>
                 <button><input type="submit" value="Submit" id="submit"></button>
            </form>
            

           
        </div>
        <div class="clearfix"></div>
        </div>
        <?php 
    if (isset($_POST['submit'])){
        // $text = $_POST['name'];
        $old_pass = mysqli_real_escape_string($conn, $_POST['old_pass']);
        $new_pass= mysqli_real_escape_string($conn, $_POST['new_pass']);
        $c_pass =  mysqli_real_escape_string($conn, $_POST['c_pass']);
        // $email_search = "SELECT * FROM user_info WHERE Name = '".$_SESSION['user']."'";
        // $query = mysqli_query($conn,$email_search);
        // $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $row['Password'];
        $pass_decode = password_verify($old_pass, $db_pass);
            if($pass_decode){
                if($new_pass === $c_pass){
                    $update = "UPDATE `user_info` SET Password='$new_pass', WHERE Name = '".$_SESSION['user']."'";
                    mysqli_query($conn,$update);
                    echo "password changed";
                    }
                    else{
                        echo "Incorrect Password";
                    }
                }
                else{
                    echo "Incorrect Old Password";
                }
            }    

            
    
     }?>
        </center>
        </div>
    
</body>

</html>