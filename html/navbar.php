<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom CSS-->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
    #header{
        position: absolute;
        width: 100vw;
        z-index: 10;
    }


    .navbar-brand{
        font-weight: 600;
        font-size: 1.8rem;
    }

    .navbar-dark .navbar-brand{
        color: white;
    }

    .nav-item{
        font-weight: 450;
        text-transform: uppercase;
        padding-left: 0.9rem;
    }

    .navbar-nav .nav-item .nav-link{
        color: white;
        transition: 0.3s;
    }

    .navbar-dark .navbar-nav .nav-item .nav-link:hover{
        color: #18D26E;
        cursor: pointer;
    }

    .navbar-dark .navbar-nav .nav-link{
      color: #ffffff !important;
    }

    .modal-header h3, .close{
      color: #18D26E;
      font-size: 30px;
    }

    .modal-body{
      background: #ffffff;
      padding-bottom: 2rem;
    }
    </style>
  </head>
  <body>

    <section id="header">
        <!--Navbar-->
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="../assests/images/SAWARI-logo-4.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-colspan="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#why-us" ng-click="scrollTab($event,'#why-us')" class="nav-link">Why Us?</a>
                        </li>
                        <li class="nav-item">
                            <a href="bike-price.php" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="blogs.php" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#deals" class="nav-link">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a href="faq.php" class="nav-link">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </script>
    <!--Jquery and JavaScript Files-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Navbar-->
    <script src="../js/main.js"></script>
  </body>
</html>
