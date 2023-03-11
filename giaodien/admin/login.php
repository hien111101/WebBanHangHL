<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../admin/style-ad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="">
</head>
<body>
  
<div class="login-page" >
  <div class="container">
    <div class="row">
      <div class="col-md-6 login-image">
        <img src="../images/loginlogo.png" style="width:700px" alt="Login Image">
      </div>
      <div class="col-md-6 login-form-container" >
        <h1 style="text-align:center;">Login</h1>
        <form autocomplete="off" class="login-form" method="POST" action="checkuser.php">
          <div class="form-group" >
            <input name="user" type="text" class="form-control" id="user" placeholder="UserName">
          </div>
          <div class="form-group">
            <input name="pass" type="password" class="form-control" id="pass" placeholder="Password">
          </div>
          <div class="form-group form-check" >
            <input type="checkbox" class="form-check-input" id="remember-me">
            <label class="form-check-label" for="remember-me">Remember me</label>
          </div>
          <div class="form-group-login" >
            <button type="submit" name="dangnhap" style="height:30px;width:100px" class="btn btn-primary">Login</button>
          </div>
          <div class="form-group-login">
            <a href="#" class="forgot-password">Forgot password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>