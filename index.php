<?php 
session_start(); 


?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.jpg" type="">

  <title> Blood bank </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.jpg" type="">

  <title> Blood bank </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
<style>


.loader_bg{
    position: fixed;
    z-index: 999999;
    background: #fff;
    width: 100%;
    height: 100%;
}
.loader{
    border: 0 soild transparent;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    position: absolute;
    top: calc(50vh - 75px);
    left: calc(50vw - 75px);
}
.loader:before, .loader:after{
    content: '';
    border: 1em solid #16C6B7;
    border-radius: 50%;
    width: inherit;
    height: inherit;
    position: absolute;
    top: 0;
    left: 0;
    animation: loader 2s linear infinite;
    opacity: 0;
}
.loader:before{
    animation-delay: .5s;
}
@keyframes loader{
    0%{
        transform: scale(0);
        opacity: 0;
    }
    50%{
        opacity: 1;
    }
    100%{
        transform: scale(1);
        opacity: 0;
    }
}




</style>
</head>

<body>
 <div class="loader_bg">
    <div class="loader"></div>
</div>
  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Blood bank
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donate.php">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="seeker.php">seeker</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>
            
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Blood bank center
                    </h1>
                    <p>
                      Donate Blood Save Lives </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          

    </section>
    <!-- end slider section -->
  </div>


  <!-- department section -->

  <section class="department_section layout_padding">
    <div class="department_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
           Donation process
          </h2>
          
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Registration
                </h5>
                
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Seeing
                </h5>
                
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Donation
                </h5>
                
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
Save Live
                </h5>
               
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- end department section -->

  <!-- doctor section -->

  <section class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Doctors
        </h2>
       
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/d1.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Elina Josh
              </h5>
              <h6 class="">
                Doctor
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/d2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Adam View
              </h5>
              <h6 class="">
                Doctor
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/d3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Mia Mike
              </h5>
              <h6 class="">
                Doctor
              </h6>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- end doctor section -->
  
  <div> <hr></div>

  <!-- about section -->

  <section class="about_section layout_margin-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Us</span>
              </h2>
            </div>
           <!--*************** select code ***************-->
                  <?php
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

$mysqli = mysqli_connect('localhost', 'root', '', 'db_blood');
//Create the select query
$query ="SELECT * FROM tbl_about"; 
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
    //Loop through results
    while($row = $result->fetch_assoc()){
        echo "<p>" .$row['about'] ."</p>";
    }
}
?>
            <a href="about.php">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 12345671230
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                blood@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
       
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="index.php">
                Home
              </a>
              <a class="" href="about.php">
                About us
              </a>
              <a class="" href="donate.php">
                Donate
              </a>
              <a class="" href="seeker.php">
                Seeker
              </a>
              <a class="" href="contactus.php">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a>Blood bank<br><br></a>
          

        </p>
       
      </div>  
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>
 <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
	
	  setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
  </script>
</html>