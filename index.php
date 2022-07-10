<?php
include './dbh.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $restaurant = $_POST['restaurant'];
  $message = $_POST['message'];

  require './dbh.php';
  $sql = "INSERT INTO users (name, email, restaurant, message) VALUES ('$name', '$email', '$restaurant', '$message');"; // Inserting data into the database
  $db->query($sql);
}
?>


<!doctype html>
<html lang="en">

  <head>
    <title>my burger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    
    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php">my burger</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="index.php" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="index.php" class="nav-link">Welcome</a></li>
                  <li><a href="barber-shop.php" class="nav-link">Menu</a></li>
                  <li><a href="blog.php" class="nav-link">Pictures</a></li>
                  
                  <li><a href="services.php" class="nav-link">Restaurants</a></li>
                  <li><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>
      </div>
    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/logo.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">More Than Just A Burger</h1>
              <p>Crées ton burger à ta sauce.</p>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="img-years">
              <img src="images/burger_presentation.jpg" alt="Image" class="img-fluid">
              <div class="year">
                <span>25 <span>years in <br>makers burger</span></span>
              </div>
            </div>

          </div>
          <div class="col-lg-5 ml-auto pl-lg-5 text-center">
            <h3 class="scissors text-center">Welcome To My Burger</h3>
            <p class="mb-5 lead">T'aimes les cheesburger sans fromage et adore la viande végétarienne? t'es à la bonne place!</p>
            <p><a href="#" class="btn btn-primary">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors text-center">Burger simple &amp; Menu</h3>
            <p class="mb-5 lead">Simple ou composé, ton burger ou ton menu s'adapte à tes envies!</p>

            <p class="text-center">
              <a href="#" class="btn btn-primary custom-prev">Prev</a>
              <a href="#" class="btn btn-primary custom-next">Next</a>
            </p>
          </div>

        </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel d-flex">
              
              <div class="item-1 h">
                <img src="images/burger_simple.png" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Burger simple</h3>
                  <ul>
                    <li class="d-flex"><span>Burger Bruxelles</span> <span class="price ml-auto">4,00</span></li>
                    <li class="d-flex"><span>Burger Anvers</span><span class="price ml-auto">4,00</span></li>
                    <li class="d-flex"><span>Burger Charleroi</span><span class="price ml-auto">4,00</span></li>
                    <li class="d-flex"><span>Burger Ostende</span><span class="price ml-auto">4,00</span></li>
                    <li class="d-flex"><span>Burger Liège</span><span class="price ml-auto">4,00</span></li>
                  </ul>
                </div>
                
              </div>

              <div class="item-1 h">
                <img src="images/burger_menu.png" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Menu</h3>
                  <ul>
                    <li class="d-flex"><span>Faim de moineau</span> <span class="price ml-auto">3,00</span></li>
                    <li class="d-flex"><span>T'as juste faim  </span><span class="price ml-auto">5,00</span></li>
                    <li class="d-flex"><span>T'as faim</span><span class="price ml-auto">7,00</span></li>
                    <li class="d-flex"><span>Faim de loup</span><span class="price ml-auto">9,00</span></li>
                    <li class="d-flex"><span>Faim d'aligator</span><span class="price ml-auto">12,OO</span></li>
                  </ul>
                </div>
                
              </div>

              <div class="item-1 h">
                <img src="images/burger_affinite.png" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Burger et affinités...</h3>
                  <ul>
                    <li class="d-flex"><span>Fritte à la Belge</span> <span class="price ml-auto">2,00</span></li>
                    <li class="d-flex"><span>Fritte de patate douce</span><span class="price ml-auto">3,00</span></li>
                    <li class="d-flex"><span>Fricadelle</span><span class="price ml-auto">2,00</span></li>
                    <li class="d-flex"><span>Poulycroc</span><span class="price ml-auto">2,00</span></li>
                    <li class="d-flex"><span>Tenders</span><span class="price ml-auto">2,00</span></li>
                  </ul>
                </div>
                
              </div>

            </div>
            
          </div>  
        </div>
      </div>
    </div>


    <!-- END section -->

    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/shop_liege.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white scissors primary-color-icon text-center">My Burger</h2>
            <p class="lead text-white">Où que tu sois en Belgique, tu peux nous retrouver à...</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                
              </span>
              <div class="service-1-contents">
                <h3>Anvers</h3>
                <p>33, dennenlaan 6700 Anvers.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                
              </span>
              <div class="service-1-contents">
                <h3>Charleroi</h3>
                <p>42, rue miné 1920 Charleroi.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                
              </span>
              <div class="service-1-contents">
                <h3>Ostende</h3>
                <p>100,  de zeestraat 8900 Ostende.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                
              </span>
              <div class="service-1-contents">
                <h3>Liège</h3>
                <p>55, Rue de la gauffre 3490 Liège.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                
              </span>
              <div class="service-1-contents">
                <h3>Bruxelles</h3>
                <p>12, mannequepisstraat 1000 Bruxelles</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                </span>
              </span>
              <div class="service-1-contents">
                <h3>Namur</h3>
                <p>456, rue du citadin 1234 Namur</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>  


    
    



   


    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/burger_anvers.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white scissors primary-color-icon text-center">My Burger</h2>
            <p class="lead text-white mb-5">Nous engageons!</p>
            <p><a href="#" class="btn btn-primary">Contacte Nous</a></p>
          </div>
        </div>
      </div>
    </div>

    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <img src="images/logo.jpg" alt="Image" class="img-fluid mb-5">
            <h2 class="footer-heading mb-3">À propos de nous</h2>
                <p>25 ans à la plancha, dérrière chaque Burger c'est la passion du goût qui façonnera le choix de ton menu ou de ton Burger simple</p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="index.php">Welcome</a></li>
                  <li><a href="barber-shop.php">Menu</a></li>
                  <li><a href="blog.php">Pictures</a></li>
                  <li><a href="services.php">Restaurant</a></li>
                  <li><a href="contact.php">Contactes nous</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>
