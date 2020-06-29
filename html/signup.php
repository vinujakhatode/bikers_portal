<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAWARI</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Font awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <style>
      .error-message {
          text-align:center;
          color:#FF0000;
        }
    </style>
</head>
<body>
<?php

    if(isset($_POST['submit']))
    {
        if(isset($_POST['Name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['password1']) and isset($_POST['password2']) and isset($_POST['date']))
        {
            include('config.php');
            $name = mysqli_real_escape_string($conn, $_POST['Name']);
            $user_id = mysqli_real_escape_string($conn, $_POST['email']);
            $contact = mysqli_real_escape_string($conn, $_POST['phone']);
            $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
            $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
            $d_o_b = mysqli_real_escape_string($conn, $_POST['date']);

            $password = password_hash($password1, PASSWORD_BCRYPT);
            $cpassword = password_hash($password2, PASSWORD_BCRYPT);

            $token = bin2hex(random_bytes(20));

            $emailquery = "SELECT * FROM user_info where Email='$user_id'";
            $query = mysqli_query($conn,$emailquery);

            $emailcount = mysqli_num_rows($query);

            if($emailcount>0)
            {
              $message = "Email already exists!!";
            }
            else {
              if($password1 === $password2){
                $insertquery = " INSERT INTO user_info(Name, Email, Contact_no, Password, C_password, DOB, token, status) VALUES('$name', '$user_id', '$contact', '$password', '$cpassword', '$d_o_b', '$token', 'Inactive')";
                $insertInUserBike = "INSERT INTO users_bike (Email) VALUES ('$user_id')";
                mysqli_query($conn, $insertInUserBike);
                $iquery = mysqli_query($conn,$insertquery);
                if($iquery){
                  $send_to = $_POST['email'];
                  $subject = "Account Activation";
                  $body = "Hi, $name . Click on the link given below to activate your account
                  http://localhost/final_project/html/activate.php?token=$token";
                  $sendermail = "From: sawarirental@gmail.com";
                  if(mail($send_to, $subject, $body, $sendermail)){
                    $_SESSION['msg'] = "Check your mail to activate your account. Email sent to $send_to";
                    header('location:index.php');
                }
                else{
                  $message = "Registration Failed";
                }
              }
              else{
                $message = "Password do not match";
              }
            }
        }
    }
  }
?>

<?php
require('navbar.php');
 ?>

    <section class="main">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div id="box" class="col-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 mt-4">
                    <form name="registration" onSubmit="return passValidate()" id="register" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <h2 class="text-center">Sign Up</h2>
                        <div class="error-message"><?php if(isset($message)){echo $message;} ?></div>
                        <label for="user_name" class="label control-label">Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" class="form-control" id="user_name" name="Name" placeholder="Full Name" required autocomplete="off">
                        </div>
                        <label for="user_email" class="label control-label">Email</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input type="email" class="form-control" id="user_email" name="email" placeholder="Email" required autocomplete="off">
                        </div>
                        <label for="user_phone" class="label control-label">Contact No</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                            <input type="number" class="form-control" id="user_phone" name="phone" placeholder="Contact NO" required autocomplete="off">
                        </div>
                        <label for="pass_1" class="label control-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                            <input type="password" class="form-control" id="pass_1" name="password1" placeholder="Password" required autocomplete="off">
                        </div>
                        <label for="pass_2" class="label control-label">Confirm Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                            <input type="password" class="form-control" id="pass_2" name="password2" placeholder="Re-Enter Password"  required autocomplete="off">
                        </div>
                        <label for="user_dob" class="label control-label">Date of Birth</label>
                        <div class="input-group">
                            <div class="input-group-addon"><img src="../assests/images/icons/time-and-date.png"></img></div>
                            <input type="date" class="form-control" id="user_dob" name="date" placeholder="DOB" required autocomplete="off">
                        </div>
                        <div>
                            <!-- <div href="#"><div class="btn btn-outline-info px-3"><i class="fa fa-user-plus"> SIGN UP</i></div></a> -->
                            <button type="submit" id="submit_form" name="submit"  class="btn btn-outline-info px-3"><i class="fa fa-user-plus"> SIGN UP</i></button>
                            <br>
                            <p class="text-center pt-2"><a href="index.php" style="color:#56daf5; font-size:1.3rem;">Back to Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    require('footer.php');
     ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <!--Navbar-->
    <script src="../js/main.js"></script>
</body>
</html>
