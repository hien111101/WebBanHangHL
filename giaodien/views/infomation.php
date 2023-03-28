<?php
include(("./shares/header.php"));
include_once("../class/user_class.php");
?>

<?php
if(isset($_SESSION['user_id']) && isset($_SESSION['user'])){
    require_once('connectdb.php');
    if(isset($_SESSION['pass_cu']) && isset($_SESSION['pass_moi']) && isset($_SESSION['cp_pass_moi'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $pass_cu = validate($_POST['pass_cu']);
        $pass_moi = validate($_POST['pass_moi']);
        $cp_pass_moi = validate($_POST['cp_pass_moi']);

        echo $pass_cu;
    }

}
?>

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
    <div  style="margin-top:30px;text-align:center;border: 3px solid #ddd;height:240px;width:400px;margin-left:40%">

    <form class="login-form" style="padding-top:20px" method="POST" autocomplete="off" action="">
        <h2>Thay đổi mật khẩu</h2>
        <?php
        if(isset($_GET['error'])){
        ?>
        <p class="error"><?php echo $_GET['error']?></p>
        <?php
        }
        ?>
          <div class="form-group">
            <input name="pass_cu" type="password" class="form-control" id="pass" placeholder="Password old">
          </div>
          <div class="form-group">
            <input name="pass_moi" type="password" class="form-control" id="pass" placeholder="Password new">
          </div>
          <div class="form-group">
            <input name="cp_pass_moi" type="password" class="form-control" id="pass" placeholder="Repair password new">
          </div>
          <div class="form-group-login" >
            <button type="submit" name="doimatkhau" style="height:30px;width:100px" class="btn btn-primary">Đổi mật khẩu</button>
          </div>
</form>
    </div>

    </section>
</body>
<footer style="margin-top: 800px;">
<?php
    include(("./shares/footer.php"));
?>
</footer>
</html>