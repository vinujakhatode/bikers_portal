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
    <title></title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Font awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
  </head>
  <body>
    <?php include('main_nav.php'); ?>

    <div class="container">
      <div class="search-bikes">
        <?php
        if(isset($_POST['submit'])){

          $keyword = $_POST['keyword'];
          $statement = "SELECT * FROM bikes_info WHERE model_name LIKE '%{$keyword}%'";
          $result = $conn->query($statement);
          // $result = mysqli_query($conn,$statement);
          $output = '';

            if($result->num_rows>0){
            // if(mysqli_num_rows($result)>0){
              while($row=$result->fetch_assoc()){
              // foreach($result as $row){
                $output ='<h1 class="text-success pt-2" style="font-size: 2rem;">Search result found for <i>'.$keyword.'</i></h1><br>
                <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card-deck">
                  <div class="card border-secondary">
                    <img width="auto" height="250px" src="'.$row['image'].'" class="card-img-top">
                    <div class="p-2">
                      <h4 style="margin-top:20px;" class="text-dark text-center rounded p-1">
                        '. $row['model_name'].'
                      </h4>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text-danger">
                        Price : RS.'. $row['price_per_hr'].' /hr
                      </h4>
                      <p>
                        Brand : '. $row['brand_name'].'<br>
                        Mileage : '. $row['mileage'].'<br>
                        Availability : '. $row['count'].' bikes
                      </p>
                      <div>
                        <div class="pull-left">
                          <button class="btn btn-outline-danger"><i class="fa fa-heart-o"></i></button>
                        </div>
                        <div class="pull-right">
                          <button class="btn btn-success btn-block">
                            <a href="bike-details.php?model_id='.$row['model_id'].'" class="text-light p-4">View Details</a>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
            }
          }
          else{
            $output = "<h1>No result found for <i>$keyword</i></h1>";
          }
          echo $output;
      }
    ?>
      </div>
    </div>

    <footer id="footer">
      <!-- echo '<h1 class="page-header">No result found for <i>'.$keyword.'</i></h1>'; -->
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
