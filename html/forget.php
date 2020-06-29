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

  if(isset($_POST['send-link-btn'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $emailquery = "SELECT * FROM user_info where Email='$email'";
    $query = mysqli_query($conn,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount){

      $userdata = mysqli_fetch_array($query);

      $username = $userdata['Name'];
      $token = $userdata['token'];

      // $send_to = $_POST['email'];
      $subject = "Reset Your Password";
      $body = "Hi, $username . We receieved a password reser request. Password reset is given below. If you didn't make this request, then ignore this email.
      http://localhost/final_project/html/reset_password.php?token=$token";
      $sendermail = "From: sawarirental@gmail.com";
      if(mail($email, $subject, $body, $sendermail)){
        $_SESSION['msg'] = "Check your mail to reset your password. Email sent to $email";
        header('location:forget.php');
      }
      else{
        $_SESSION['msg'] = "Email send Failed";
      }

    }
    else{
      $_SESSION['msg'] = "No Email found.";
    }

  }
   ?>



    <section class="main">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div id="box" class="col-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 mt-4">
                  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <h3 class="text-center my-4">Trouble Logging In?</h3>
                    <p class="bg-success text-white text-center px-4"> <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];} ?> </p>

                    <p class="text-warning">
                        Enter your email and we'll send you a link to get back into your account.
                    </p>
                    <label class="label control-label">Email-Id</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                        <input type="email" class="form-control" name="email" placeholder="Email" required autocomplete="off">
                    </div>
                    <button type="submit" name="send-link-btn" class="btn btn-default btn-lg px-3"><i class="fa fa-link"> Send Link</i></button>
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
