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

<?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/images/about-us-hero.jpg') no-repeat center center/cover; position: relative;">
  <div class="dark-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
  <div class="container" style="position: relative; z-index: 2;">
    <div class="hero-content text-center">
      <h1 style="color: #fff;"><?php echo htmlentities($result->PageName); ?></h1>
      <p style="color: #ddd; font-size: 20px; text-align: justify; line-height: 1.7;"><?php echo htmlentities($result->detail); ?></p>
      <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
    </div>
  </div>
</section>

<section class="about_us section-padding">
  <div class="container">
    <!-- Company History -->
    <div class="section-header text-center">
      <h2>Our Story</h2>
      <p>We started our journey in web development over a decade ago with a mission to deliver top-notch web solutions. Our dedication and expertise have made us a trusted partner for clients worldwide.</p>
    </div>

    <!-- Mission & Vision -->
    <div class="section-header text-center">
      <h2>Mission & Vision</h2>
      <p>Our mission is to empower businesses by creating innovative and effective web solutions that drive success. We envision a future where our solutions are the benchmark for excellence in the web development industry.</p>
    </div>

    <!-- Team Section -->
    <div class="section-header text-center">
      <h2>Meet Our Team</h2>
    </div>
    <div class="row">
      <!-- Add team member details here -->
      <div class="col-md-4">
        <div class="team-member">
          <img src="assets/images/team-member1.jpg" alt="Team Member">
          <h3>John Doe</h3>
          <p>CEO & Founder</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member">
          <img src="assets/images/team-member2.jpg" alt="Team Member">
          <h3>Jane Smith</h3>
          <p>Lead Developer</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member">
          <img src="assets/images/team-member3.jpg" alt="Team Member">
          <h3>Emily Johnson</h3>
          <p>Project Manager</p>
        </div>
      </div>
    </div>

    <!-- Client Testimonials -->
    <div class="section-header text-center">
      <h2>What Our Clients Say</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="testimonial">
          <p>"The team at [Your Company] is phenomenal! They transformed our vision into a reality with exceptional skill and professionalism."</p>
          <h3>- Client Name</h3>
        </div>
      </div>
      <div class="col-md-6">
        <div class="testimonial">
          <p>"Working with [Your Company] was a great experience. Their expertise in web development is unmatched."</p>
          <h3>- Client Name</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<?php } }?>
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

</body>
</html>
