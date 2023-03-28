<!-- login form -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <title>Trang chủ HL</title>
</head>
<body>
<?php 
  include_once("./shares/header.php");
?>

<div class="login-page" >
  <div class="container">
    <div class="row">
      <div class="col-md-6 login-image">
        <img src="../images/loginlogo.png" style="width:700px" alt="Login Image">
      </div>
      <div class="col-md-6 login-form-container" >
        <h1 style="text-align:center;">Login</h1>
        <form class="login-form" method="POST" action="checkuser.php">
          <div class="form-group" >
            <input required name="user" type="text" class="form-control" id="user" placeholder="UserName">
          </div>
          <div class="form-group">
            <input required name="pass" type="password" class="form-control" id="pass" placeholder="Password">
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
<?php 
  include_once("./shares/footer.php");
?>
</body>
</html>