<!-- <?php error_reporting (E_ALL ^ E_NOTICE); ?> -->
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

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;700&display=swap" rel="stylesheet">

    <!--Navbar-->
    <script src="../js/main.js"></script>
    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <script async>(function(w, d) { w.CollectId = "5e60c94a56cbce1eeb0ebebd"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    <style>
      .error-message {
          text-align:center;
          color:#FF0000;
        }
    </style>
    <!-- <script async>(function(w, d) { w.CollectId = "5e60c94a56cbce1eeb0ebebd"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script> -->
</head>
<body>

    <?php

        include('config.php');

        if(isset($_POST['submit'])){
          if(isset($_POST['email']) and isset($_POST['password'])){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $email_search = "SELECT * FROM user_info WHERE Email='$email' and status='Active' ";
            $query = mysqli_query($conn,$email_search);

            $email_count = mysqli_num_rows($query);

            if($email_count){
              $email_pass = mysqli_fetch_assoc($query);

              $db_pass = $email_pass['Password'];

              $_SESSION['user'] = $email_pass['Name'];

              $pass_decode = password_verify($password, $db_pass);

              if($pass_decode){
                if($email_pass['u_id'] == '1'){
                  header('location:admin.php');
                }
                else if(isset($_POST['remember_me'])){
                  setcookie('emailcookie',$email,time()+(10*365*24*60*60));
                  setcookie('passwordcookie',$password,time()+(10*365*24*60*60));
                  header('location:main-page.php');
                }
                else{
                  header('location:main-page.php');
                }
              }
              else{
                $message = "Incorrect Password";
              }
            }
            else{
              $message = "Invalid Email";
          }
        }
      }
    ?>
    <?php
    require('navbar.php');
     ?>

    <section class="main">
        <!-- <div class="overlay overlay-bg"></div> -->
        <div class="container">
            <div class="row">
                <div class="quote col-md-6 col-lg-6 col-xl-7">
                    <h1>Own the Experience,<br>&nbsp;Explore the World.</h1>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quick and Easy bike rental platform.</p>
                </div>
                <div id="box" class="col-md-6 col-lg-6 col-xl-5 mt-4">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <h1 class="text-center">SIGN-IN</h1>
                        <br>
                            <div>
                            <!-- <p class="text-center">OR</p> -->
                            <div class="sign-in-with">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-outline-light"><i class="fa fa-google"></i>&nbsp;Sign in with Google</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-outline-light"><i class="fa fa-facebook"></i>&nbsp;Sign in with Facebook</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div>
                            <p class="text-center text-danger"><?php if(isset($message)) { echo $message; } ?></p>
                            <p class="bg-success text-white text-center px-4">
                               <?php
                                if(isset($_SESSION['msg'])){
                                   echo $_SESSION['msg'];
                                 }
                                 else{
                                   echo $_SESSION['msg'] = "Login Now.";
                                 }
                               ?>
                            </p>
                        </div>
                        <label class="label control-label">Email-id</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="email" class="form-control" name="email" value="<?php if(isset($_COOKIE['emailcookie'])) { echo $_COOKIE['emailcookie']; } ?>" placeholder="Email-Id" required autocomplete="off">
                        </div>
                        <label class="label control-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                            <input type="password" class="form-control" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])) { echo $_COOKIE['passwordcookie']; } ?>" placeholder="password" required autocomplete="off">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="checkbox" name="remember_me"><small>Remember me</small>
                            </div>
                            <div class="col-md-6">
                                <a href="forget.php"><p class="text-right">Forget Password</p></a>
                            </div>
                        </div>

                            <!-- <div href="#"><div class="btn btn-outline-info px-3"><i class="fa fa-sign-in"> SIGN IN</i></div></a> -->
                            <button type="submit" name="submit" class = "btn btn-outline-info px-3"><i class="fa fa-sign-in"> SIGN IN</i></button>
                            <p class="text-center mt-1">Not a member yet? <a class="btn btn-sm btn-success" href="signup.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="deals">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title text-center">Exciting Deals</h3>
                <span class="section-divider"></span>
                <p class="section-description">
                    "Get exciting tour packages"
                </p>
            </div>

            <div class="row">
                <div class="col-sm-3">
                      <div class="flip">
                        <div class="card">
                          <div class="face front">
                            <div class="inner">
                              <img src="../assests/images/manali1.jpg">
                            </div>
                          </div>
                          <div class="face back">
                            <div class="inner text-center">
                              <p>6 Days and 5 Nights just at Rs.7999.</p>
                              <button type="button" class="btn btn-outline-warning btn-sm">
                                <a href="manali.php">Know More..</a>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="card-description mt-3 mb-5">
                            <h5 class="text-dark">Mumbai-Manali</h5>
                        </div>
                      </div>
                    </div>
                  <div class="col-sm-3">
                      <div class="flip">
                        <div class="card">
                          <div class="face front">
                            <div class="inner">
                              <img src="../assests/images/leh ladhakh.jpg">
                            </div>
                          </div>
                          <div class="face back">
                            <div class="inner text-center">
                              <p>11 Days and 10 Nights at Rs.33,990.</p>
                              <button type="button" class="btn btn-outline-warning btn-sm">
                                <a href="leh-ladakh.php">Know More..</a>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="card-description mt-3 mb-5">
                            <h5 class="text-dark">Mumbai-Delhi-Leh-Ladakh</h5>
                        </div>
                      </div>
                    </div>
                  <div class="col-sm-3">
                      <div class="flip">
                        <div class="card">
                          <div class="face front">
                            <div class="inner">
                              <img src="../assests/images/Sikkim2.jpg">
                            </div>
                          </div>
                          <div class="face back">
                            <div class="inner text-center">
                              <p>Sikkim-Darjeeling-Gangtok</p>
                              <button type="button" class="btn btn-outline-warning btn-sm">
                                <a href="Sikkim-Darjeeling-Gangtok.php">Know More..</a>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="card-description mt-3 mb-5">
                            <h5 class="text-dark">Mumbai-Sikkim-Darjeeling-Gangtok</h5>
                        </div>
                      </div>
                    </div>
                  <div class="col-sm-3">
                      <div class="flip">
                        <div class="card">
                          <div class="face front">
                            <div class="inner">
                              <img src="../assests/images/Ooty3.jpg">
                            </div>
                          </div>
                          <div class="face back">
                            <div class="inner text-center">
                              <p>Ooty</p>
                              <button class="btn btn-outline-warning btn-sm">
                                <a href="Ooty.php">Know More..</a>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="card-description mt-3 mb-5">
                            <h5 class="text-dark">Mumbai-Ooty</h5>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
    </section>


    <section id="why-us">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title text-center">Our Services</h3>
                <span class="section-divider"></span>
                <p class="section-description">We simplified bike rentals, so you can focus on what's important to you.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 m-2 p-2">
                            <h4>Safety</h4>
                            <img class="services-icon my-2" src="../assests/images/icons/racing-helmet.png" alt="safety">
                            <p class="text-center">A helmet on your head will keep you away from a hospital bed! We guarantee a comprehensive insurance and also an ISI marked helmet.</p>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 m-2 p-2">
                            <h4>No ride limit</h4>
                            <img class="services-icon my-2" src="../assests/images/icons/ui.png" alt="No ride limit">
                            <p class="text-center">"RIDE AS MUCH OR AS LITTLE, AS LONG OR AS SHORT AS YOU FEEL. BUT RIDE" <br> - <strong style="font-size: 15px;">EDDY MERCKX</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 m-2 p-2">
                            <h4>Secure Payment</h4>
                            <img class="services-icon my-2" src="../assests/images/icons/pay.png" alt="Payment">
                            <p class="text-center">Don't Worry, you are perfectly SECURE with us. We provide the secure online payment gateways.</p>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 m-2 p-2">
                            <h4>Verified Dealer</h4>
                            <img class="services-icon my-2" src="../assests/images/icons/verified-account.png" alt="verified dealer">
                            <p class="text-center">Every dealer is verified and committed to the quality of services.</p>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 m-2 p-2">
                            <h4>Save Time</h4>
                            <img class="services-icon my-2" src="../assests/images/icons/time.png" alt="No wastage of time">
                            <p class="text-center">Don,t waste time. We provide the wide range of bikes.Compare the different bike and then choose the perfect bike for you.</p>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 m-2 p-2">
                            <h4>Money Back</h4>
                            <img class="services-icon my-2" src="../assests/images/icons/money-back-guarantee.png" alt="money back guarantee">
                            <p class="text-center">Anything that goes wrong, do not fret! We guarantee that you get your money back in one piece!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="how-to-use" class="section-bg">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title text-center">How to Use?</h3>
                <span class="section-divider"></span>
                <p class="section-description">
                    "Your four step journey to an awesome ride."
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="box">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h4 class="text-dark">Search Online</h4><br>
                                <img src="../assests/images/icons/search-online.png" alt="search-online">
                                <p class="text-dark lead my-2">Find the perfect bike for you. No waste of time on the internet, everything is in one place!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="box">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h4 class="text-dark">Book your ride</h4><br>
                                <img src="../assests/images/icons/bike2.png" alt="Book your ride">
                                <p class="text-dark lead my-2">You can search & select bike from our wide range.Select the Date & Time and confirm your booking.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="box">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h4 class="text-dark">Pick-Up</h4><br>
                                <img src="../assests/images/icons/shop.png" alt="Pick up">
                                <p class="text-dark lead my-2">Reach the pick-up location selected during booking. Verify the valid documents. Pick-up the bike on the correct time.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="box">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h4 class="text-dark">Ride Anywhere</h4><br>
                                <img src="../assests/images/icons/location.png" alt="Ride Anywhere">
                                <p class="text-dark lead my-2">You will be able to fully enjoy your ride!Any problem? Our passionate team will be happy to help you!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="box">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h4 class="text-dark">Return Bike</h4><br>
                                <img src="../assests/images/icons/shop2.png" alt="Return the bike">
                                <p class="text-dark lead my-2">Return the bike at the location selected at the time of booking. Must return bike on the correct time.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-6 col-lg-4 text-center">
                    <div class="box">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h4 class="text-dark">See You Again!</h4><br>
                                <img src="../assests/images/icons/repeat.png" alt="See you again">
                                <p class="text-dark lead my-2">Reach the pick-up location selected during booking & Pick-up the bike on the correct time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="user-experience" class="m-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="Carousel-2" class="carousel slide" data-ride="carousel">
                        <h2>Customer <b>Testimonials</b></h2>
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#Carousel-2" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel-2" data-slide-to="1"></li>
                            <li data-target="#Carousel-2" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>I was impressed by the services provided by SAWARI. they provide excellent transport at very less cost. I feel it is very easy to use and customer friendly.all the vehicle documents are properly maintained and no traffic violation issues are encountered.</p>
                                        </div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img src="../assests/images/icons/user.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Priyanka</b></div>
                                                    <div class="details">Mumbai, India</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>If you want to rent a bike for less time, I request you to go for SAWARI. And best customer care executives. They are very polite and courtesy I wanted t reschedule my booking because I was running late so I called the customer care and they immediately responded to my request.</p>
                                        </div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img src="../assests/images/icons/user.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Mayank</b></div>
                                                    <div class="details">Mumbai</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>The bikes was very well maintained and perfectly clean when they handed the key. So no trouble with bike at any place ..Which made the whole trip tension free.even the bike renting was so easy within 30 min all formalities were over All the staffs were very cooperative.</p>
                                        </div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img src="../assests/images/icons/user.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Akshay Pawar</b></div>
                                                    <div class="details">Pune</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>its just fab! its available almost in every major city and offers a great deal and convinient. There are various options to choose from ,be it simple bike to the harleys,that all provide optimum utilization for ur money.</p>
                                        </div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img src="../assests/images/icons/user.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Aman Singh</b></div>
                                                    <div class="details">Navi Mumbai</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>We've gone Social! 'Like' our page on social media platform and join in the conversation with other customers just like you.</p>
                                        </div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img src="../assests/images/icons/user.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Martin Sommer</b></div>
                                                    <div class="details">SEO Analyst / RealSearch</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonial">
                                            <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                        </div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img src="../assests/images/icons/user.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>John Williams</b></div>
                                                    <div class="details">Web Designer / UniqueDesign</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left carousel-control-prev" href="#Carousel-2" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#Carousel-2" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <?php
        require('footer.php');
      ?>

    <!--Jquery and JavaScript Files-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
