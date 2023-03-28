<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/loaitintuc_class.php");
?>

<?php
$loaitintuc = new loaitintuc;
$tintuc_id =$_GET['tintuc_id'];
$get_tintuc = $loaitintuc-> get_tintuc($tintuc_id);
    if($get_tintuc){
        $resultA = $get_tintuc ->fetch_assoc();
    }
    
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id =$_POST['cartegory_id'];
    $tintuc_name = $_POST['tintuc_name'];
    $update_tintuc = $loaitintuc ->update_tintuc($tintuc_id,$tintuc_name);
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Sửa loại sản phẩm</h1>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#">Chọn danh mục</option>
                        <?php
                        $show_cartegory = $loaitintuc->show_cartegory();
                        if($show_cartegory){while($rusult = $show_cartegory -> fetch_assoc()){

                        
                        ?>
                        <option <?php if($resultA['cartegory_id']==$rusult['cartegory_id']){
                            echo "SELECTED";}?> value="<?php echo $rusult['cartegory_id']?>"><?php echo $rusult['cartegory_name']?></option>
                        <?php
                            }}
                        ?>
                    </select><br>
                    <input type="text" required name="tintuc_name" value="<?php echo $resultA['tintuc_name']?>" placeholder="Nhập tên loại sản phẩm">
                <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>