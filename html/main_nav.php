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
    <style>
      header{
        background: #000009;
        display: block;
      }

      top-bar {
        padding: 0px;
        font-size: 12px;
      }

      .top-bar .cnt-account {
    float: right;
    padding: 6px 0px;
}
.top-bar .cnt-account ul {
    margin: 0px;
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}
ul {
    margin: 0;
    padding: 0;
}
ul {
    list-style: none;
}
.top-bar .cnt-account ul > li {
    display: inline-block;
    line-height: 12px;
    padding: 3px 12px 3px 7px;
    border-right: 1px solid hsla(0,0%,100%,.2);
}
.top-bar .cnt-account ul > li a {
    color: rgba(255,255,255,0.8);
    padding: 0px;
    font-weight: 400;
    -webkit-transition: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
    transition: all 0.2s linear 0s;
}
a {
    outline: none!important;
}
a {
    -webkit-transition: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
    transition: all 0.2s linear 0s;
}
.top-bar .cnt-account ul > li a .icon {
    display: block;
    float: left;
    padding-right: 6px;
    font-size: 16px;
}
.top-bar .cnt-account ul > li:last-child {
    border: none;
    padding-right: 0px;
}
.main-header {
    padding: 5px 0px 12px 0px;
}
.main-header .logo-holder {
    margin-top: 10px;
}
.main-header .top-search-holder .search-area {
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    margin: 8px 0 0;
    background: #fff;
    border-radius: 2px;
}
.main-header .top-search-holder .search-area .search-field {
    border: medium none;
    -webkit-border-radius: 5px 0 0 5px;
    -moz-border-radius: 5px 0 0 5px;
    border-radius: 5px 0 0 5px;
    padding: 13px;
    width: 67%;
}
.main-header .top-search-holder .search-area .search-button {
    border-radius: 0px 3px 3px 0px;
    display: inline-block;
    float: right;
    margin: 0px;
    padding: 12px 19px 12px;
    text-align: center;
    background-color: #fdd922;
    border: 1px solid #e0bc27;
}
.main-header .top-search-holder .search-area .search-button:after {
    color: #333;
    content: "\f002";
    font-family: fontawesome;
    font-size: 16px;
    line-height: 9px;
    vertical-align: middle;
}

.btn-primary {
    -webkit-transition: all linear 0.2s;
    -moz-transition: all linear 0.2s;
    -ms-transition: all linear 0.2s;
    -o-transition: all linear 0.2s;
    transition: all linear 0.2s;
    background: #108bea;
    color: #fff;
    border: none;
    font-size: 13px;
    line-height: 22px;
    border-radius: 0;
    padding: 6px 14px;
    font-family: 'Montserrat', sans-serif;
    border-radius: 2px;
}

.m-t-20 {
    margin-top: 20px;
}
.btn-upper {
    text-transform: uppercase;
}


      animate-dropdown open > dropdown-menu,
      animate-dropdown open > dropdown-menu > dropdown-submenu > dropdown-menu {
        animation-name: slidenavAnimation;
        animation-duration: 200ms;
        animation-iteration-count: 1;
        animation-timing-function: ease-out;
        animation-fill-mode: forwards;
        -webkit-animation-name: slidenavAnimation;
        -webkit-animation-duration: 200ms;
        -webkit-animation-iteration-count: 1;
        -webkit-animation-timing-function: ease-out;
        -webkit-animation-fill-mode: forwards;
        -moz-animation-name: slidenavAnimation;
        -moz-animation-duration: 200ms;
        -moz-animation-iteration-count: 1;
        -moz-animation-timing-function: ease-out;
        -moz-animation-fill-mode: forwards;
}
@keyframes slidenavAnimation {
  from {
    margin-top: -30px;
    opacity: 0;
  }
  to {
    margin-top: 0;
    opacity: 1;
  }
}
@-webkit-keyframes slidenavAnimation {
  from {
    margin-top: -30px;
    opacity: 0;
  }
  to {
    margin-top: 0;
    opacity: 1;
  }
}

.header-nav {
    background: #141516;
}
.header-style .header-nav .navbar-default {
    border: medium none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    background: rgba(0, 0, 0, 0);
    margin: 0;
    min-height: auto;
}

.header-style .header-nav .navbar-default .navbar-collapse {
    padding: 0;
}
.yamm .nav, .yamm .collapse, .yamm .dropup, .yamm .dropdown {
    position: static;
}
.navbar-nav {
    float: none;
}
.cnt-home .header-style .header-nav .navbar .navbar-nav > li.active {
    background: #0c0c0d;
}
.header-style .header-nav .navbar-default .navbar-collapse .navbar-nav > li.active > a {
    color: #fff;
}
.header-style .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    color: #FFFFFF;
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    line-height: 20px;
    padding: 11px 15px;
    text-transform: uppercase;
    -webkit-transitio: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
    transition: all 0.2s linear 0s;
    font-weight: normal;
    letter-spacing: 0.5px;
    border-right: 1px solid rgba(255,255,255,0.1);
}

.header-nav{
  background: #0c0c0d;
  padding: 0% 35%;
}
    </style>
  </head>
  <body>

     <header id="header-style">

       <div class="top-bar animate-dropdown">
         <div class="container">
            <div class="header-top-inner">
              <div class="cnt-account">
                <ul class="list-unstyled">
                  <li><a href="personal.php?Name=<?php echo $_SESSION['user']; ?>"><i class="icon fa fa-user"></i> My Account</a></li>
                  <li><a href="#"><i class="icon fa fa-heart"></i> Wishlist</a></li>
                  <li><a href="cart-details.php?Name=<?php echo $_SESSION['user']; ?>"><i class="icon fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-success">1</span></a></li>
                  <li><a href="#"><i class="icon fa fa-check"></i> Checkout</a></li>
                  <li><a href="logout.php"><i class="icon fa fa-sign-out"></i> logout</a></li>
                </ul>
              </div>

              <div class="clearfix"></div>
            </div>
      <!-- /.header-top-inner -->
        </div>
       </div>
       <!-- ============================================== TOP MENU : END ============================================== -->
       <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="main-page.php"> <img src="../assests/images/SAWARI-logo-4.png" alt="logo"> </a> </div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
          <!-- /.contact-row -->
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form method="POST" action="search.php">
              <div class="control-group">
                <input class="search-field" id="navbar-search-input" name="keyword" placeholder="Search here..." required>
                <button type="submit" id="searchBtn" name="submit" class="search-button"></button>
              </div>
            </form>
          </div>
          <!-- /.search-area -->
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>

  <div class="header-nav">
      <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark">
          <div class="container">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-colspan="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
                  <ul class="nav navbar-nav">
                      <li class="nav-item">
                          <a href="main-page.php" class="nav-link text-light">Home</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-light d-none">Why Us?</a>
                      </li>
                      <li class="nav-item">
                          <a href="bike-price-user.php" class="text-light nav-link">Pricing</a>
                      </li>
                      <li class="nav-item">
                          <a href="blogs.php" class="nav-link text-light">Blog</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-light d-none">Offers</a>
                      </li>
                      <li class="nav-item">
                          <a href="faq.php" class="nav-link text-light">FAQ</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </div>

     </header>

    <!--Jquery and JavaScript Files-->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
