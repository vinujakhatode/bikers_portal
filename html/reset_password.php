<?php
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAWARI</title>

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom Css-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Font awesome files-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
</head>
<body>
    <?php

    include('config.php');


    if(isset($_POST['submit'])){

      if(isset($_GET['token'])){

        $token = $_GET['token'];
        $password1 = mysqli_real_escape_string($conn, $_POST['password']);
        $password2 = mysqli_real_escape_string($conn, $_POST['cpassword']);

        if($password1 == $password2){

          $password = password_hash($password1, PASSWORD_BCRYPT);
          $cpassword = password_hash($password2, PASSWORD_BCRYPT);

          $updatequery = "UPDATE user_info SET Password='$password' WHERE token='$token' ";
          $iquery = mysqli_query($conn,$updatequery);

          $updatequery2 = "UPDATE user_info SET C_password='$cpassword' WHERE token='$token' ";
          $iquery2 = mysqli_query($conn,$updatequery2);

            if($iquery){
              $_SESSION['msg'] = "Your password has been successfully updated.";
              header('locaton:index.php');
            }
            else{
              $_SESSION['passmsg'] = "Your password is not updated.";
              header('location:reset_password.php');
            }
          }
          else{
            $_SESSION['passmsg'] = "Password do not match";
          }
        }
        else{
          $_SESSION['passmsg'] = "No token found.";
        }
      }

     ?>

    <section class="main">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div id="box" class="col-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 mt-4">
                  <form action="" method="post">

                    <h3 class="text-center my-4">Update Password</h3>

                    <p class="text-warning">
                        Fill the both field correctly.
                    </p>

                    <p class="bg-danger text-white text-center"> <?php if(isset($_SESSION['passmsg'])) { echo $_SESSION['passmsg']; } ?></p>
                    <label class="label control-label">New Password</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                        <input type="password" class="form-control" name="password" placeholder="New Password" required autocomplete="off">
                    </div>
                    <label class="label control-label">Confirm Password</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required autocomplete="off">
                    </div>
                    <button type="submit" name="submit" class="btn btn-default btn-lg px-3"><i class="fa fa-retweet"> Update Password</i></div>
                      <br>
                      <p class="text-center pt-2"><a href="index.php" style="color:#56daf5; font-size:1.3rem;">Back to Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <!--Navbar-->
    <script src="../js/main.js"></script>
</body>
</html>
