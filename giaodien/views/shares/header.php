<?php
include("../class/product_class.php");
?>
<?php
$product = new product;
$show_product = $product->show_product();
$show_brand = $product->show_brand();

?>
<?php
require_once('connectdb.php');
if(isset($_GET["search"]) && !empty($_GET["search"])){
    $key = $_GET["search"];
    $sql = "SELECT * FROM tbl_product WHERE product_id LIKE '%$key%' OR product_name LIKE
    '%$key%' OR product_price LIKE '%$key%' OR product_img LIKE '%$key%'";
}
else{
    $sql = "SELECT * FROM tbl_product";
}
$result = mysqli_query($con,$sql);
?>
<header>

        <div class="logo">
            <img src="../images/logo.jpg" alt="">
        </div>
        <div class="menu">

            <li><a href="index.php">Trang chủ</a> </li>
            <li><a href="">Giới thiệu</a> </li>
            <li><a href="cartegory.php">Sản phẩm</a>
                <ul>
                    <div class="sub-menu">
                    <?php
                        if($show_brand){
                            $i=0;
                            while($result = $show_brand ->fetch_assoc())
                            {
                               $i++;
                    ?>
                        <li><a href="cartegory.php?product_id=<?php
                        echo $result['brand_id']?>"><?php echo $result['brand_name']?></a>
                            <ul>
                                <li><a href="#"><?php
                        echo $result['brand_name'] = 'Nước hoa'?></a> </li>
                                <li><a href="#"><?php
                        echo $result['brand_name'] = 'Giftset'?></a> </li>
                                <li><a href="#"><?php
                        echo $result['brand_name'] = 'Lăn khử mùi'?></a> </li>
                                <li><a href="#"><?php
                        echo $result['brand_name'] = 'Mỹ phẩm'?></a> </li>
                            </ul>
                        </li>
                        <?php
                            }
                            }?>
                    
                    </div>
                </ul>
            
            
            </li>
            <li><a href="">Tin tức</a> 
                <ul>
                    <div class="sub-menu-tintuc">
                        <li><a href="">Kinh nghiệm chọn nước hoa</a></li>
                        <li><a href="">Tin khuyến mãi</a></li>
                    </div>
                </ul>
            </li>
            <li><a href="">Liên hệ</a> </li>
        </div>
        <div class="others">
            <li><form action="" method="GET">
            <input type="text" name="search" value="<?php if(isset($_GET["search"])){echo $_GET["search"];}?>" placeholder="Tìm kiếm"><i class="fas fa-search"></i>
            </form></li>
            <li><a href="" class="fa fa-user"></a>
            <?php
                    
                if(isset($_GET['action'])=='dangxuat'){
                    unset($_SESSION['dangnhap']);
                    session_destroy();
                    header('location:login.php');
                    exit();
                } 
                
            ?>
            
                <ul>
                    <div class="sub-menu-user">
                        <?php
                            if(!((isset($_SESSION["user"])))== true ){
                                echo '<li><a href="./login.php">Đăng nhập</a> </li>';
                                echo '<li><a href="./signup.php">Đăng kí</a></li>';
}
                            else{
                                echo 'Welcome '.$_SESSION['user'];
                                echo '<li><a href="index.php?action=dangxuat">Đăng xuất</a></li>';
                            }
                        ?>
                    </div>
                </ul>
            </li> 
            
            <li><a href="./cart.php" class="fa fa-shopping-bag"></a></li>
        </div>
    </header>