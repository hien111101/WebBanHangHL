<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../admin/css/style-admin.css">
    <title>Trang chủ Admin</title>
</head>
<body>
    <header>
    <?php
    if(isset($_GET['action'])=='dangxuat'){
        unset($_SESSION['dangnhap']);
        header('location:login.php');
    } 
    session_start();
    
?>
<div class="admin">
    <div style="background-color:#7FFFD4;height:97px;font-size:1.2rem;font-weight: bold" class="admin-header">
        <ul>
            <?php echo 'Welcome '.$_SESSION['user'];?>
            <li><a href="index.php?action=dangxuat">Đăng xuất</a></li>
        </ul>
    </div>
    

</div>
    </header>
