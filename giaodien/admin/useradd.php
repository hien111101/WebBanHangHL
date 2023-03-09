<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/user_class.php");
?>

<?php
$username = new user;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $user = $_POST['user'];
    $DiaChi = $_POST['DiaChi'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $HoVaTen = $_POST['HoVaTen'];
    $insert_user = $username ->insert_user($HoVaTen,$DiaChi,$email,$user,$pass,$phone);
}

?>


<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm người dùng</h1>
                <form action="" method="POST">
                    <label for="">Username <span style="color: red;">*</span></label><br>
                    <input name="user" required type="text" placeholder="Nhập username"><br>
                    <label for="">Password <span style="color: red;">*</span></label><br>
                    <input name="pass" required type="password" placeholder="Nhập Password"><br>
                    <label for="">Họ và tên <span style="color: red;">*</span></label><br>
                    <input name="HoVaTen" required type="text" placeholder="Nhập Họ và tên"><br>
                    <label for="">Địa chỉ <span style="color: red;">*</span></label><br>
                    <input name="DiaChi" required type="text" placeholder="Nhập Địa chỉ"><br>
                    <label for="">Số điện thoại <span style="color: red;">*</span></label><br>
                    <input name="phone" required type="text" placeholder="Nhập Số điện thoại"><br>
                    <label for="">Email <span style="color: red;">*</span></label><br>
                    <input name="email" required type="text" placeholder="Nhập Email"><br>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>