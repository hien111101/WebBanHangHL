<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/brand_class.php");
?>

<?php
$brand = new brand;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id = $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];
    $insert_brand = $brand ->insert_brand($cartegory_id,$brand_name);
}

?><style>
    select{
        height: 30px;
        width: 200px;
    }
</style>


<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm loại sản phẩm</h1>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#">Chọn danh mục</option>
                        <?php
                        $show_cartegory = $brand->show_cartegory();
                        if($show_cartegory){while($return = $show_cartegory -> fetch_assoc()){

                        
                        ?>
                        <option value="<?php echo $return['cartegory_id']?>"><?php echo $return['cartegory_name']?></option>
                        <?php
                            }}
                        ?>
                    </select><br>
                    <input type="text" required name="brand_name" placeholder="Nhập tên loại sản phẩm">
                <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>