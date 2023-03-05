<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/brand_class.php");
?>

<?php
$brand = new brand;
$brand_id =$_GET['brand_id'];
$get_brand = $brand-> get_brand($brand_id);
    if($get_brand){
        $resultA = $get_brand ->fetch_assoc();
    }
    
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id =$_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];
    $update_brand = $brand ->update_brand($brand_id,$brand_name);
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Sửa loại sản phẩm</h1>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#">Chọn danh mục</option>
                        <?php
                        $show_cartegory = $brand->show_cartegory();
                        if($show_cartegory){while($rusult = $show_cartegory -> fetch_assoc()){

                        
                        ?>
                        <option <?php if($resultA['cartegory_id']==$rusult['cartegory_id']){
                            echo "SELECTED";}?> value="<?php echo $rusult['cartegory_id']?>"><?php echo $rusult['cartegory_name']?></option>
                        <?php
                            }}
                        ?>
                    </select><br>
                    <input type="text" required name="brand_name" value="<?php echo $resultA['brand_name']?>" placeholder="Nhập tên loại sản phẩm">
                <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>