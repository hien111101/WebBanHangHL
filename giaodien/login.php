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
    <title>Login | Ludiflex - youtube channel</title>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="images/loginlogo.png" alt="">
                    
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>Create account</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Sign Up">
                            
                        </div>
                        <div class="signin">
                            <span>Already have an account? <a href="#">Log in here</a></span>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>