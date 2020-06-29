<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <!--Bootstrap Css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom Css-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Font awesome files-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
</head>
<body>
    <!--Navbar-->
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

    <section id="about">
        <div class="aboutus-main">
            <div class="aboutus-inner">
                <div class="aboutus-bannermain">
                    <div class="aboutus-banner-inner">
                        <div class="aboutus-banner-title">Our Mission is to provide hassle free bike renting across India</div>
                    </div>
                </div>
                <div class="aboutus-desc-main">
                    <div class="aboutus-desc-title">About Us</div>
                    <div class="underline"></div>
                    <div class="col-xs-12 aboutus-section">
                        We love bikes. We love travelling. And, we want you to love them too! What started as a bike rental platform is a complete ecosystem of bikes.
                        From two wheeler rentals to riding gears, from exclusive bike merchandise to road trips and tours, from bike refurbishing and maintenance to fleet management system - we have them all.<br><br>

                        Our team of ninjas aim to bridge the gap between bike fanatics and their need for a perfect go-to for all their biking needs. Whether you’re a student in a new city or someone who just joined work - you can rent a bike for a day,
                         a week or even a couple of months, leave your bikes at the station for some good ol’ maintenance and pick up some exclusive merch too! Whether you’re a startup with a small sales team or a food delivery giant,
                          a logistics company or a renowned restaurant - for everything that depends on two wheels - ‘SAWARI Hai Na’! <br><br>

                        We also host a frequent travel series called Wander ONN where we take you on an epic bike journey at amazingly affordable prices. Check our Facebook page for upcoming getaways and more!
                    </div>
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
</body>
</html>
