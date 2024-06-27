<?php
session_start(); // Start or resume session

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Note: Consider using more secure hashing methods

    // Assume $dbh is your PDO database connection
    $sql = "SELECT EmailId, Password, FullName FROM tblusers WHERE EmailId=:email and Password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetch(PDO::FETCH_OBJ); // Fetch as object

    if($results) {
        $_SESSION['login'] = $_POST['email'];
        $_SESSION['fname'] = $results->FullName;
        $currentpage = $_SERVER['REQUEST_URI'];
        // Redirect to current page
        echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
        exit;
    } else {
        // Invalid login
        $error = "Invalid Email or Password"; // Set error message
    }
}
?>

<div class="modal fade" id="loginform">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Login</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="login_wrap">
                        <div class="col-md-12 col-sm-6">
                            <form method="post">
                                <?php if(isset($error)): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email address*" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password*" required>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="remember">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="login" value="Login" class="btn btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
                <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
            </div>
        </div>
    </div>
</div>
