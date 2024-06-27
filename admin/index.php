<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=$_POST['password'];
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
} else{
  echo "<script>alert('Invalid Details');</script>";
}
}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Scooter Rental Portal | Admin Login</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <link rel="stylesheet" href="css/fileinput.min.css">
  <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f7f7;
    }
    .login-page {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-size: cover;
      background-position: center;
    }
    .form-content {
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-content h1 {
      margin-bottom: 30px;
    }
    .form-control {
      margin-bottom: 20px;
    }
    .btn-primary {
      background-color: #5cb85c;
      border-color: #5cb85c;
    }
    .btn-primary:hover {
      background-color: #4cae4c;
      border-color: #4cae4c;
    }
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .logo img {
      max-width: 150px;
    }
  </style>
</head>

<body>
  <div class="login-page" style="background-image: url('img/bgforum.jpg');">
    <div class="form-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-bold">Admin Sign in</h1>
            <div class="well row bk-light">
              <div class="col-md-8 col-md-offset-2">
                <form method="post">
                  <label for="username" class="text-uppercase text-sm">Your Username</label>
                  <input type="text" placeholder="Username" name="username" class="form-control mb" required>

                  <label for="password" class="text-uppercase text-sm">Password</label>
                  <input type="password" placeholder="Password" name="password" class="form-control mb" required>

                  <button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
                </form>
              </div>
            </div>
            <p class="text-center mt-4">© 2024 E-Scooter Rental Portal. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Loading Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/fileinput.js"></script>
  <script src="js/chartData.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
