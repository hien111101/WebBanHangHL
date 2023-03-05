<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/cartegory_class.php");
?>

<?php
$cartegory = new cartegory;
if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL ){
    echo "<script>window.location='cartegorylist.php'</script>";
}else{
    $cartegory_id = $_GET['cartegory_id'];
}
    $get_cartegory = $cartegory-> get_cart($cartegory_id);
    if($get_cartegory){
        $result = $get_cartegory ->fetch_assoc();
    }
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $update_cartegory = $cartegory ->update_cart($cartegory_id,$cartegory_name);
}
?>


<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Sửa danh mục</h1>
                <form action="" method="POST">
                    <input required name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>