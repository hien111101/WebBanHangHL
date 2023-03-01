<?php
    session_start();
    ob_start();
    include "../model/config.php";
    include "../model/user.php";

    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $role=checkuser($username,$password);
        $_SESSION['role']=$role;
        if($role==1) header('location: index.php');
        else header('location: login.php');
    }
?>
<!-- login form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="login-page">
  <div class="container">
    <div class="row">
      <div class="col-md-6 login-image">
        <img src="images/loginlogo.png" alt="Login Image">
      </div>
      <div class="col-md-6 login-form-container">
        <h1>Login</h1>
        <form class="login-form" action="">
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember-me">
            <label class="form-check-label" for="remember-me">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <div class="form-group">
            <a href="#" class="forgot-password">Forgot password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>