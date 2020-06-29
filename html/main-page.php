<?php
    session_start();

    if(!isset($_SESSION['user'])){
        echo "You are logged out";
        header('location: index.php');
    }
  include('config.php')

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sawari</title>
    <!--Bootstrap CSS-->    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!--Font awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <style>
      .select-option{
        background: url(../assests/images/img.jpg);
        width: auto;
        height: 20rem;
        background-size: cover;
        background-position: center;
        padding-top: 8rem;
        background-attachment: fixed;
      }

      .select-option p i{
        font-size: 1.6rem;
        color: #E7E6E6;
      }

      .select-option p a{
        color: #ffffff;
        font-size: 2rem;
      }

     .trending {
    	/* background: #e2eaef; */
    	font-family: "Open Sans", sans-serif;
      padding-top: 9rem;
    }
    .trending h2 {
    	color: #000;
    	font-size: 26px;
    	font-weight: 300;
    	text-align: center;
    	text-transform: uppercase;
    	position: relative;
    	margin: 30px 0 60px;
    }
    .trending h2::after {
    	content: "";
    	width: 100px;
    	position: absolute;
    	margin: 0 auto;
    	height: 4px;
    	border-radius: 1px;
    	background: #7ac400;
    	left: 0;
    	right: 0;
    	bottom: -20px;
    }

    .trending .carousel {
    	margin: 50px auto;
    	padding: 0 70px;
    }
    .trending .carousel .item {
    	min-height: 330px;
        text-align: center;
    	overflow: hidden;
    }
    .trending .carousel .item .img-box {
    	height: 160px;
    	width: 100%;
    	position: relative;
    }
    .trending .carousel .item img {
    	max-width: 100%;
    	max-height: 100%;
    	display: inline-block;
    	position: absolute;
    	bottom: 0;
    	margin: 0 auto;
    	left: 0;
    	right: 0;
    }
    .trending .carousel .item h4 {
    	font-size: 18px;
    	margin: 10px 0;
    }
    .trending .carousel .item .btn {
    	color: #333;
        border-radius: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #ccc;
        padding: 5px 10px;
        margin-top: 5px;
        line-height: 16px;
    }
    .trending .carousel .item .btn:hover, .carousel .item .btn:focus {
    	color: #fff;
    	background: #000;
    	border-color: #000;
    	box-shadow: none;
    }
    .trending .carousel .item .btn i {
    	font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }
    .trending .carousel .thumb-wrapper {
    	text-align: center;
    }
    .trending .carousel .thumb-content {
    	padding: 15px;
    }
    .trending .carousel .carousel-control {
    	height: 100px;
        width: 40px;
        background: none;
        margin: auto 0;
        background: rgba(0, 0, 0, 0.2);
    }
    .trending .carousel .carousel-control i {
        font-size: 30px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -16px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: none;
        font-weight: bold;
    }
    .trending .carousel .item-price {
    	font-size: 13px;
    	padding: 2px 0;
    }
    .trending .carousel .item-price strike {
    	color: #999;
    	margin-right: 5px;
    }
    .trending .carousel .item-price span {
    	color: #86bd57;
    	font-size: 110%;
    }
    .trending .carousel .carousel-control.left i {
    	margin-left: -3px;
    }
    .trending .carousel .carousel-control.left i {
    	margin-right: -3px;
    }
    .trending .carousel .carousel-indicators {
    	bottom: -50px;
    }
    .trending .carousel-indicators li, .carousel-indicators li.active {
    	width: 10px;
    	height: 10px;
    	margin: 4px;
    	border-radius: 50%;
    	border-color: transparent;
    }
    .trending .carousel-indicators li {
    	background: rgba(0, 0, 0, 0.2);
    }
    .trending .carousel-indicators li.active {
    	background: rgba(0, 0, 0, 0.6);
    }
    .trending .carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000\9;
    /* background-color: rgba(0,0,0,0); */
    border: 1px solid #fff;
    border-radius: 10px;
}
    .trending .carousel-control-prev {
        left: 0;
    }
    .trending .carousel-control-next, .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: .5;
        transition: opacity .15s ease;
    }
    .trending .carousel-control-prev {
        left: 0;
    }
    .trending .carousel-control-next, .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: .5;
        transition: opacity .15s ease;
    }

    #footer{
      margin-top: 33rem;
    }
    </style>
  </head>
  <body>

    <?php include('main_nav.php'); ?>

    <div class="select-option">
      <div class="container">
        <div class="row">
          <h3></h3>
          <div class="col-md-6">
            <p class="text-center"><i class="fa fa-motorcycle"></i>&nbsp;&nbsp;<a href="Book-a-bike.php">Book a Ride</a></p>
          </div>
          <div class="col-md-6">
            <p class="text-center"><i class="fa fa-motorcycle"></i>&nbsp;&nbsp;<a href="userbike.php">Give your bike on rent</a></p>
          </div>
        </div>

        <div class="trending">
        	<div class="row">
        		<div class="col-md-12">
        			<h2>Trending <b>Bikes</b></h2>
        			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
        			<!-- Carousel indicators -->
        			<ol class="carousel-indicators">
        				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        				<li data-target="#myCarousel" data-slide-to="1"></li>
        				<li data-target="#myCarousel" data-slide-to="2"></li>
        			</ol>
        			<!-- Wrapper for carousel items -->
        			<div class="carousel-inner">
        				<div class="item carousel-item active">
        					<div class="row">
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/honda-activa-5g.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>Honda Activa 5g</h4>
        									<p class="item-price"> <span>Price : RS.10 /hr</span></p>
        									<a href="bike-details.php?model_id=H002" class="btn btn-primary">More details</a>
        								</div>
        							</div>
        						</div>
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/suzuki-access-125.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>Suzuki Access 125</h4>
        									<p class="item-price"> <span>Price : RS.10 /hr</span></p>
        									<a href="bike-details.php?model_id=S001" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/yamaha-yzf-r15.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>Yamaha R15 V3</h4>
        									<p class="item-price"> <span>Price : RS.34 /hr</span></p>
        									<a href="bike-details.php?model_id=Y002" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/royal-enfield-classic-350.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>Royal Enfield 350</h4>
        									<p class="item-price"> <span>Price : RS.34 /hr</span></p>
        									<a href="bike-details.php?model_id=R001" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="item carousel-item">
        					<div class="row">
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/ktm-duke-200.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>KTM 200 Duke</h4>
        									<p class="item-price"> <span>Price : RS.34 /hr</span></p>
        									<a href="bike-details.php?model_id=K001" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/bajaj pulsar img.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>Bajaj Pulsar</h4>
        									<p class="item-price"> <span>Price : RS.12 /hr</span></p>
        									<a href="bike-details.php?model_id=B001" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/rtr-160.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>TVS Apache RTR 160</h4>
        									<p class="item-price"> <span>Price : RS.12 /hr</span></p>
        									<a href="bike-details.php?model_id=T003" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/avenger 220.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>Bajaj Avenger Cruise 220</h4>
        									<p class="item-price"> <span>Price : RS.34 /hr</span></p>
        									<a href="bike-details.php?model_id=B005" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="item carousel-item">
        					<div class="row">
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/honda-cb-hornet.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>Honda CB hornet</h4>
        									<p class="item-price"> <span>Price : RS.12 /hr</span></p>
        									<a href="bike-details.php?model_id=H003" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/BMW-S-1000-XR.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>BMW S 1000XR</h4>
        									<p class="item-price"> <span>Price : RS.45 /hr</span></p>
        									<a href="bike-details.php?model_id=BW001" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/passion-pro.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>Hero Passion pro</h4>
        									<p class="item-price"> <span>Price : RS.10 /hr</span></p>
        									<a href="bike-details.php?model_id=HR002" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        						<div class="col-sm-3">
        							<div class="thumb-wrapper">
        								<div class="img-box">
        									<img src="bike image/kawasaki-ninja-300.jpg" class="img-responsive img-fluid" alt="">
        								</div>
        								<div class="thumb-content">
        									<h4>Kawasaki Ninja 300</h4>
        									<p class="item-price"> <span>Price : RS.45 /hr</span></p>
        									<a href="bike-details.php?model_id=KW001" class="btn btn-primary">More Details</a>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- Carousel controls -->
        			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
        				<i class="fa fa-angle-left"></i>
        			</a>
        			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
        				<i class="fa fa-angle-right"></i>
        			</a>
        		</div>
        		</div>
        	</div>
        </div>
        </div>
      </div>
    </div>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>SAWARI</h3>
                        <p>SAWARI IS HERE TO REDEFINE THE WAY YOU TRAVEL! RENT A BIKE ON AN HOURLY, DAILY, WEEKLY OR EVEN MONTHLY BASIS.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Explore</h4>
                        <ul>
                            <li>
                                <!-- <i class="fa fa-arrow-right"></i><a href="index.php">&nbsp;Home</a> -->
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="index.php">&nbsp;Home</a>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="#deals">&nbsp;Offer</a></i>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="blogs.php">&nbsp;Blogs</a></i>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="faq.php">&nbsp;FAQ</a></i>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Company</h4>
                        <ul>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="about.php">&nbsp;About Us</a>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="contact.php">&nbsp;Contact Us</a>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="terms&con.php">&nbsp;Terms and Conditions</a></i>
                            </li>
                            <li>
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="policy.php">&nbsp;Privacy and Policy</a></i>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Connect</h4>
                        <p>We've gone Social! 'Like' our page on social media platform and join in the conversation with other customers just like you.</p>
                        <div class="social-links">
                            <a href="#" class="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#" class="linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#" class="telegram">
                                <i class="fa fa-telegram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </body>
</html>
