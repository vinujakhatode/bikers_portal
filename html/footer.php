<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/bookbike.css"> -->

    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <style>
    /* -----------------------------------
              Footer
    -------------------------------------- */

    #footer{
        background: #000000;
        padding: 0;
        color: #eeeeee;
    }

    #footer .footer-top{
        background: #111111;
        padding: 60px 0 30px 0;
    }

    #footer .footer-top .footer-info{
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-info h3{
        font-size: 2rem;
        margin: 0 0 20px 0;
        padding: 2px 0 2px 10px;
        line-height: 1;
        font-weight: 200;
        letter-spacing: 0.1rem;
        border-left: 4px solid #18D26E;
    }

    #footer .footer-top .footer-info p {
        font-size: 1rem;
        line-height: 1.5rem;
        margin-bottom: 0;
        font-family: "Montserrat", sans-serif;
        color: #eeeeee;
    }

    #footer .footer-top .footer-links{
        margin-bottom: 30px;
    }

    #footer .footer-top h4 {
        font-size: 1.5rem;
        font-weight: 300;
        color: #18D26E;
        text-transform: uppercase;
        position: relative;
        padding-bottom: 1.3rem;
    }

    #footer .footer-top .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footer .footer-top .footer-links ul li:first-child {
        padding-top: 0;
    }
    #footer .footer-top .footer-links ul li {
        border-bottom: 1px solid #333;
        padding: 10px 0;
    }

    #footer .footer-top .footer-links ul a {
        color: #eeeeee;
    }

    #footer .footer-top .footer-links ul a:hover {
        color: #18D26E;
        cursor: pointer;
    }

    #footer .footer-top .social-links a {
        font-size: 1.2rem;
        display: inline-block;
        background: #333;
        color: #eee;
        line-height: 1;
        padding: 8px 0;
        margin-right: 4px;
        border-radius: 50%;
        text-align: center;
        width: 36px;
        height: 40px;
        transition: 0.3s;
    }

    #footer .footer-top .social-links a:hover {
        color: #18D26E;
    }

    </style>
  </head>
  <body>

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
                                <img src="../assests/images/icons/chevron.png" alt=""><a href="terms_con.php">&nbsp;Terms and Conditions</a></i>
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
    <!--Jquery and JavaScript Files-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
