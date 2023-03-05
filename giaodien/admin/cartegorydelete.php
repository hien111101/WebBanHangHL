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
    $delete_cartegory = $cartegory-> delete_cart($cartegory_id);
   
?>
