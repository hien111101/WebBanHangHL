<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/product_class.php");
?>

<?php
$product = new product;
$product_id =$_GET['product_id'];
$get_product = $product-> get_product($product_id);
    if($get_product){
        $resultA = $get_product ->fetch_assoc();
    }
    
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id =$_POST['cartegory_id'];
    $product_name =$_POST['product_name'];
    $brand_id = $_POST['brand_id'];
    $product_price = $_POST['product_price'];
    $product_price_new = $_POST['product_price_new'];
    $product_desc = $_POST['product_desc'];
    $product_img = $_POST['product_img'];
    $update_product = $product ->update_product($product_id,$product_name,$cartegory_id,$brand_id,$product_price,$product_price_new,$product_desc,$product_img);
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Sửa loại sản phẩm</h1>
                <form action="" method="POST">
                    <select style="height:30px;width:200px;margin-top:10px" name="cartegory_id" id="">
                        <option value="#">Chọn danh mục</option>
                        <?php
                        $show_cartegory = $product->show_cartegory();
                        if($show_cartegory){while($rusult = $show_cartegory -> fetch_assoc()){

                        
                        ?>
                        <option <?php if($resultA['cartegory_id']==$rusult['cartegory_id']){
                            echo "SELECTED";}?> value="<?php echo $rusult['cartegory_id']?>"><?php echo $rusult['cartegory_name']?></option>
                        <?php
                            }}
                        ?>
                    </select><br>
                    <select style="height:30px;width:200px;margin-top:10px" name="brand_id" id="">
                        <option value="#">Chọn danh mục</option>
                        <?php
                        $show_brand = $product->show_brand();
                        if($show_brand){while($rusult = $show_brand -> fetch_assoc()){

                        
                        ?>
                        <option <?php if($resultA['brand_id']==$rusult['brand_id']){
                            echo "SELECTED";}?> value="<?php echo $rusult['brand_id']?>"><?php echo $rusult['brand_name']?></option>
                        <?php
                            }}
                        ?>
                    </select><br>
                    <input type="text" required name="product_name" value="<?php echo $resultA['product_name']?>" placeholder="Nhập tên sản phẩm"><br>
                    <input type="text" required name="product_price" value="<?php echo $resultA['product_price']?>" placeholder="Nhập tên sản phẩm"><br>
                    <input type="text" required name="product_price_new" value="<?php echo $resultA['product_price_new']?>" placeholder="Nhập tên sản phẩm"><br>
                    <textarea style="margin-top:10px"  name="product_desc" id="editor1" cols="30" rows="10" placeholder="" > <?php echo $resultA['product_desc']?></textarea><br>
                    <input type="file" required name="product_img" value="<?php echo $resultA['product_img']?>" placeholder="Nhập tên sản phẩm"><br>
                <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
    </script>
</body>
</html>