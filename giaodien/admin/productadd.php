<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/product_class.php");
?>

<?php
$product = new product;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    // echo '<pre>';
    // echo print_r($_FILES['product_img_desc']['name']);
    // echo '</pre>';
    $insert_product = $product ->insert_product($_POST,$_FILES);
}

?>


        <div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">                    
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text" placeholder="Nhập tên sản phẩm">
                    <label for="">Chọn danh mục <span style="color:red;">*</span></label>
                    <select name="cartegory_id" id="">
                    <option value="#">--Chọn--</option>
                        <?php
                        $show_cartegory = $product->show_cartegory();
                        if($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){

                        
                        ?>
                        <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>
                        <?php
                         }}
                        ?>
                    </select>
                    <label for="">Chọn loại sản phẩm <span style="color:red;">*</span></label>
                    <select name="brand_id" id="">
                        <option value="#">--Chọn--</option>
                        <?php
                        $show_brand = $product->show_brand();
                        if($show_brand){while($result = $show_brand -> fetch_assoc()){

                        
                        ?>
                        <option value="<?php echo $result['brand_id']?>"><?php echo $result['brand_name']?></option>
                        <?php
                         }}
                        ?>
                    </select>
                    <label for="">Nhập giá sản phẩm <span style="color:red;">*</span></label>
                    <input name="product_price" required type="text" placeholder="Giá sản phẩm">
                    <label for="">Nhập giá khuyến mãi <span style="color:red;">*</span></label>
                    <input name="product_price_new" required type="text" placeholder="Giá khuyến mãi">
                    <label for="">Mô tả sản phẩm <span style="color:red;">*</span></label>
                    <textarea name="product_desc" id="editor1" cols="30" rows="10" placeholder="Mô tả sản phẩm" ></textarea>
                    <label for="">Ảnh sản phẩm <span style="color:red;">*</span></label>
                    <span style="color: red"></span><?php
                    if(isset($insert_product)){
                        echo $insert_product;
                    }
                    
                    ?></span>
                    <input required type="file" name="product_img" id="">
                    <label for="">Ảnh mô tả <span style="color:red;">*</span></label>
                    <input required type="file" name="product_img_desc[]" multiple>
                    <button type="submit">Thêm</button>
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
