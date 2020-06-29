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
    <title>Book a Ride</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- jQuery library -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Font awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <style>
    .main-content-1{
      padding-top: 20px;
    }

    .main-content-1 h3{
      color: #18D26E;
    }

    .card-img-top {
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px);
}

.card-img-top {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 100%;
    height:14rem;
}
    </style>
  </head>
  <body>
    <?php
      include('main_nav.php');
    ?>

    <div class="main-content-1">
      <div class="container-fluid">
        <div class="text-center text-success pb-2">
          <h3><?php echo $_SESSION['user'];  ?>, Welcome to the Sawari Family!</h3>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <h5>Filter</h5>
            <hr>

            <div class="list-group">
              <h6 class="text-info">Select Brand</h6>
              <div style="height: 200px; overflow-y:auto; overflow-x:hidden;">
                <?php
                  $sql = "SELECT DISTINCT brand_name FROM bikes_info ORDER BY brand_name ASC" ;
                  $result = $conn->query($sql);
                  while($row=$result->fetch_assoc()) {
                ?>
                <div class="list-group-item">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input product_check" value="<?= $row['brand_name']; ?>"
                      id="brand"><?= $row['brand_name']; ?>
                    </label>
                  </div>
                </div>
                  <?php } ?>
              </div>
            </div>

            <br>

            <div class="list-group">
              <h6 class="text-info">Select Category</h6>
              <div style="height: 200px; overflow-y:auto; overflow-x:hidden;">
                <?php
                  $sql = "SELECT DISTINCT category_id FROM bikes_info ORDER BY category_id ASC" ;
                  $result = $conn->query($sql);
                  while($row=$result->fetch_assoc()) {
                ?>
                <div class="list-group-item">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input product_check" value="<?= $row['category_id']; ?>"
                      id="category"><?= $row['category_id']; ?>
                    </label>
                  </div>
                </div>
                  <?php } ?>
              </div>
            </div>

            <!-- <br> -->

            <div class="list-group">
              <h6 class="text-info">Select Fuel Type</h6>
              <div style="height: 200px; overflow-y:auto; overflow-x:hidden;">
                <?php
                  $sql = "SELECT DISTINCT type_of_fuel FROM bikes_info ORDER BY type_of_fuel ASC" ;
                  $result = $conn->query($sql);
                  while($row=$result->fetch_assoc()) {
                ?>
                <div class="list-group-item">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input product_check" value="<?= $row['type_of_fuel']; ?>"
                      id="fuel"><?= $row['type_of_fuel']; ?>
                    </label>
                  </div>
                </div>
                  <?php } ?>
              </div>
            </div>
          </div>

          <div class="col-md-9">
            <h5 class="text-center" id="textChange">All Bikes</h5>
            <h6 class="text-danger"><?php if(isset($msg)){echo $msg;} ?></h6>
            <hr>
            <div class="text-center pt-5">
              <img src="../assests/images/loader-1.gif" id="loader" style="display: none;">
            </div>
            <div class="row" id="result">
              <?php
                $sql = "SELECT * FROM bikes_info";
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc()) {
                  $model_id = $row['model_id'];

              ?>

              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card-deck">
                  <div class="card border-secondary">
                    <img width="auto" height="250px" src="<?= $row['image']; ?>" class="card-img-top">
                    <div class="p-2">
                      <h4 style="margin-top:20px;" class="text-dark text-center rounded p-1">
                        <?= $row['model_name']; ?>
                      </h4>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text-danger">
                        Price : RS.<?= $row['price_per_hr']; ?> /hr
                      </h4>
                      <p class="text-dark">
                        Brand : <?= $row['brand_name']; ?><br>
                        <!-- Category : <?= $row['category_id']; ?><br> -->
                        Mileage : <?= $row['mileage']; ?><br>
                        <!-- Engine : <?= $row['engine']; ?><br> -->
                        <!-- Power : <?= $row['power']; ?><br> -->
                        <!-- Fuel Type : <?= $row['type_of_fuel']; ?><br> -->
                        <!-- Price per day : RS.<?= $row['price_per_day']; ?> /day<br> -->
                        Availability : <?= $row['count']; ?> bikes
                      </p>
                      <div>
                        
                        <div class="pull-left">
                          <button type="submit" name="add-to-wishlist" class="btn btn-outline-danger">
                            <i class="fa fa-heart-o">
                              <!-- <a href="Book-a-bike.php?action=wishlist?model_id=<?php echo $row['model_id'];?>"></a> -->
                            </i>
                          </button>
                        </div>
                        <div class="pull-right">
                          <button class="btn btn-success btn-block">
                            <a href="bike-details.php?model_id=<?php echo $row['model_id'];?>" class="text-light p-4">View Details</a>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <?php } ?>
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

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        $(".product_check").click(function(){
          $("#loader").show();

          var action = 'data';
          // var minimum_price = $('#min_price_hide').val();
          // var maximum_price = $('#max_price_hide').val();
          var brand = get_filter_text('brand');
          var category = get_filter_text('category');
          var fuel = get_filter_text('fuel');

          $.ajax({
            url:'action.php',
            method:'POST',
            data:{action:action,
                  brand:brand,
                  category:category,
                  fuel:fuel},
            success:function(response){
              $("#result").html(response);
              $("#loader").hide();
              $("#textChange").text("Filtered Bikes");
            }
          });
        });

        function get_filter_text(text_id){
          var filterData = [];
          $('#'+text_id+':checked').each(function(){
            filterData.push($(this).val());
          });
          return filterData;
        }

        // $('#price_range').slider({
        //   range: true,
        //   min: 10,
        //   max: 300,
        //   value: [10,300],
        //   step: 10,
        //   stop: function(event, ui){
        //     $('#price_show').html(ui.values[0] + '-' +ui.values[1]);
        //     $('#min_price_hide').val(ui.value[0]);
        //     $('#max_price_hide').val(ui.values[1]);
        //
        //   }
        // });
      });
    </script>
  </body>
</html>
