<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./signup.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
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
        <h1 style="text-align:center;">Sign Up</h1>
        <form class="login-form" action="">
          <div class="form-group" >
            <input type="text" class="form-control" id="user" placeholder="UserName">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group" >
            <input type="Email" class="form-control" id="email" placeholder="Email">
          </div><div class="form-group" >
            <input type="text" class="form-control" id="phone" placeholder="Phone Number">
          </div>
          <div class="form-group" >
            <input type="text" class="form-control" id="name" placeholder="Your Name">
          </div>
          <div class="form-group" >
            <input type="text" class="form-control" id="address" placeholder="Address">
          </div>
          <div class="form-group-signup" >
            <button type="submit" style="height:30px;width:100px" class="btn btn-primary">Sign Up</button>
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