<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <!--Font awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;700&display=swap" rel="stylesheet">
    <style>

     .pricing{
       margin-top: 7rem;
     }

     .pricing h2{
       color: #323433;
       font-weight: 400;
       font-family: 'Domine', serif;
     }

    </style>
  </head>
  <body>
<!-- ----------------------------------------Main Page Navbar--------------------------------------------------- -->
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

    <section class="pricing">
      <div class="container">
        <h2 class="text-center">Pricing</h2>
        <hr color="#18D26E">
        <div class="row">
          <?php

          include('config.php');
            $sql = "SELECT * FROM bikes_info";
            $result = $conn->query($sql);
            while($row=$result->fetch_assoc()) {
              $model_id = $row['model_id'];

          ?>

          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card-deck">
              <div class="card border-secondary">
                <img width="auto" height="200px" src="<?= $row['image']; ?>" class="card-img-top">
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
                    Category : <?= $row['category_id']; ?><br>
                    Mileage : <?= $row['mileage']; ?><br>
                    Engine : <?= $row['engine']; ?><br>
                    Power : <?= $row['power']; ?><br>
                    Fuel Type : <?= $row['type_of_fuel']; ?><br>
                    Price per day : RS.<?= $row['price_per_day']; ?> /day<br>
                    Availability : <?= $row['count']; ?> bikes
                  </p>
                </div>
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </body>
</html>
