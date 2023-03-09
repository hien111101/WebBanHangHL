<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/user_class.php");
?>

<?php
$username = new user;
if(!isset($_GET['user_id']) || $_GET['user_id'] == NULL ){
    echo "<script>window.location='userlist.php'</script>";
}else{
    $user_id = $_GET['user_id'];
}
    $get_user = $username-> get_user($user_id);
    if($get_user){
        $result = $get_user ->fetch_assoc();
    }
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $user = $_POST['user'];
    $DiaChi = $_POST['DiaChi'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $HoVaTen = $_POST['HoVaTen'];
    $update_user = $username ->update_user($user_id,$HoVaTen,$DiaChi,$email,$user,$pass,$phone);
}
?>


<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Sửa danh mục</h1>
                <form action="" method="POST">
                    <label for="">Username  <span style="color: red;">*</span></label><br>
                    <input value="<?php echo $result['user']?>" name="user" required type="text" placeholder="Nhập username"><br>
                    <label for="">Password <span style="color: red;">*</span></label><br>
                    <input value="<?php echo $result['pass']?>" name="pass" required type="password" placeholder="Nhập Password"><br>
                    <label for="">Họ và tên <span style="color: red;">*</span></label><br>
                    <input value="<?php echo $result['HoVaTen']?>" name="HoVaTen" required type="text" placeholder="Nhập Họ và tên"><br>
                    <label for="">Địa chỉ <span style="color: red;">*</span></label><br>
                    <input value="<?php echo $result['DiaChi']?>" name="DiaChi" required type="text" placeholder="Nhập Địa chỉ"><br>
                    <label for="">Số điện thoại <span style="color: red;">*</span></label><br>
                    <input value="<?php echo $result['phone']?>" name="phone" required type="text" placeholder="Nhập Số điện thoại"><br>
                    <label for="">Email <span style="color: red;">*</span></label><br>
                    <input value="<?php echo $result['email']?>" name="email" required type="text" placeholder="Nhập Email"><br>                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>