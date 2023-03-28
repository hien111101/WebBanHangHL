<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/loaitintuc_class.php");
?>

<?php
$loaitintuc = new loaitintuc;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id = $_POST['cartegory_id'];
    $tintuc_name = $_POST['tintuc_name'];
    $insert_tintuc = $loaitintuc ->insert_tintuc($cartegory_id,$tintuc_name);
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
                        $show_cartegory = $loaitintuc->show_cartegory();
                        if($show_cartegory){while($return = $show_cartegory -> fetch_assoc()){

                        
                        ?>
                        <option value="<?php echo $return['cartegory_id']?>"><?php echo $return['cartegory_name']?></option>
                        <?php
                            }}
                        ?>
                    </select><br>
                    <input type="text" required name="tintuc_name" placeholder="Nhập tên loại sản phẩm">
                <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>