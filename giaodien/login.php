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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="main">
        <h2>Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label>Tên đăng nhập:</label>
            <input type="text" name="user" id="">
            <label>Mật khẩu:</label>
            <input type="text" name="pass" id="">
            <button type="submit" name="dangnhap" id="">Đăng nhập</button>
        </form>
    </div>
</body>
</html>