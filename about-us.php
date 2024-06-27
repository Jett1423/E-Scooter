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
<meta name="keywords" content="web development, web design, software development">
<meta name="description" content="Learn more about our web development company, our mission, vision, and the team that makes it all happen.">
<title>About Us | Web Development Company</title>
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

<!-- SWITCHER -->
<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  

<!--Header-->
<?php include('includes/header.php');?>

<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/images/about-us-hero.jpg') no-repeat center center/cover; position: relative;">
  <div class="dark-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
  <div class="container" style="position: relative; z-index: 2;">
    <div class="hero-content text-center">
      <div class="container">
    <!-- Company History -->
    <br>
    <div class="section-header text-center" data-aos="fade-left" data-aos-duration="1000">
  <h2 data-aos="fade-up">Our Story</h2>
  <p data-aos="fade-up">Founded in 2024, RCKL Technologies is a software development company that develops software and facilitate different kinds of clients all over the globe. We are specialized in different kinds of programming languages and frameworks that will be suitable in every kind of software development. We are also engaged in providing a safe and reliable database system that will make our clients satisfied.</p>
</div>

<div class="section-header text-center" data-aos="fade-right" data-aos-duration="1500">
  <h2 data-aos="fade-up">Mission & Vision</h2>
  <p data-aos="fade-up">At RKCL Technologies, we are driven by the mission to empower businesses of all sizes through the creation of innovative and user-centric software solutions. We believe that technology should be a catalyst for growth, not a barrier. We achieve this by:
Building long-term partnerships: We foster a collaborative approach, working closely with our clients to understand their unique needs and challenges.
Championing cutting-edge technologies: We leverage the power of emerging technologies to develop solutions that are not only effective but also future-proof.
Delivering exceptional value: We focus on exceeding expectations by crafting solutions that are efficient, scalable, and deliver a clear return on investment.
Prioritizing user experience: We design software that is intuitive, user-friendly, and promotes streamlined workflows.
Cultivating a culture of innovation: We foster a team environment that encourages continuous learning and exploration of new technologies.</p>
</div>

<div class="section-header text-center" data-aos="fade-up">
  <h2 data-aos="fade-up">Meet Our Team</h2>
</div>

<div class="row">
  <div class="col-md-4" data-aos="fade-right" data-aos-duration="1500">
    <div class="team-member">
      <img src="assets/images/team-member1.jpg" alt="Team Member">
      <h3 data-aos="fade-up">Kyla Capanay</h3>
      <p data-aos="fade-up">CEO & Founder</p>
    </div>
  </div>
  <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
    <div class="team-member">
      <img src="assets/images/team-member2.jpg" alt="Team Member">
      <h3 data-aos="fade-up">Reynaldo Baylon</h3>
      <p data-aos="fade-up">Lead Developer</p>
    </div>
  </div>
  <div class="col-md-4" data-aos="fade-left" data-aos-duration="1500">
    <div class="team-member">
      <img src="assets/images/team-member3.jpg" alt="Team Member">
      <h3 data-aos="fade-up">Angel Lara</h3>
      <p data-aos="fade-up">Project Manager</p>
    </div>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>


<div class="section-header text-center" data-aos="fade-up">
  <h2 data-aos="fade-up">What Our Clients Say</h2>
</div>

<div class="row">
  <div class="col-md-6" data-aos="fade-up">
    <div class="testimonial">
      <p data-aos="fade-up">"The team at RKCL Technology is phenomenal! They transformed our vision into a reality with exceptional skill and professionalism."</p>
      <h3 data-aos="fade-up">- Christian Mendoza</h3>
    </div>
  </div>
  <div class="col-md-6" data-aos="fade-up">
    <div class="testimonial">
      <p data-aos="fade-up">"Working with RKCL Technology was a great experience. Their expertise in web development is unmatched."</p>
      <h3 data-aos="fade-up">- Nicole Moratalla</h3>
    </div>
  </div>
</div>

      <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
    </div>
  </div>
  <br>
</section>

<!-- /About-us--> 

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
