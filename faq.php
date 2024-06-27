<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="e-scooter rental, scooter sharing, electric scooters">
<meta name="description" content="Find answers to common questions about our e-scooter rental service. Learn more about how it works, pricing, safety, and more.">
<title>FAQ | E-Scooter Rental Service</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custom Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
<!--Header-->
<?php include('includes/header.php');?>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <br>
    <div class="section-header text-center" data-aos="fade-left" data-aos-duration="1000">
      <h2>FAQs</h2>
    </div>
    <div class="panel-group" id="accordion">
      <div class="panel panel-default" data-aos="fade-right" data-aos-duration="1000">
        <div class="panel-heading">
          <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#faq1">
            <i class="fa fa-bullhorn" aria-hidden="true"></i> What is the E-Scooter Rental Service?
            </a>    
          </h4>
        </div>
        <div id="faq1" class="panel-collapse collapse in">
          <div class="panel-body">
          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Our e-scooter rental service allows you to rent electric scooters for short trips around the city. It's an eco-friendly, convenient, and fun way to travel.
          </div>
        </div>
      </div>
      <div class="panel panel-default" data-aos="fade-left" data-aos-duration="1000">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#faq2">
            <i class="fa fa-bullhorn" aria-hidden="true"></i> How much does it cost to rent an e-scooter?
            </a>
          </h4>
        </div>
        <div id="faq2" class="panel-collapse collapse">
          <div class="panel-body">
          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> The cost varies depending on the duration of the rental. We offer competitive pricing with options for hourly, daily, and weekly rentals. Please check our pricing page for detailed information.
          </div>
        </div>
      </div>
      <div class="panel panel-default" data-aos="fade-right" data-aos-duration="1000">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#faq3">
            <i class="fa fa-bullhorn" aria-hidden="true"></i> What are the safety measures for riding e-scooters?
            </a>
          </h4>
        </div>
        <div id="faq3" class="panel-collapse collapse">
          <div class="panel-body">
          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Safety is our top priority. We recommend wearing a helmet, following traffic rules, and riding in designated areas. Our scooters are equipped with lights and reflectors for better visibility.
          </div>
        </div>
      </div>
      <div class="panel panel-default" data-aos="fade-left" data-aos-duration="1000">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#faq4">
            <i class="fa fa-bullhorn" aria-hidden="true"></i> How do I rent an e-scooter?
            </a>
          </h4>
        </div>
        <div id="faq4" class="panel-collapse collapse">
          <div class="panel-body">
          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Renting an e-scooter is easy. Download our app, create an account, find a nearby scooter, and unlock it using the app. You're ready to ride!
          </div>
        </div>
      </div>
      <div class="panel panel-default" data-aos="fade-right" data-aos-duration="1000">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#faq5">
            <i class="fa fa-bullhorn" aria-hidden="true"></i> Where can I ride the e-scooters?
            </a>
          </h4>
        </div>
        <div id="faq5" class="panel-collapse collapse">
          <div class="panel-body">
          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> You can ride the e-scooters in any designated riding zones within the city. Please avoid sidewalks and pedestrian areas to ensure everyone's safety.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>
<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/aos.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({});
  </script>

</body>
</html>
