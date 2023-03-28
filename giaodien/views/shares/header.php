<?php
include_once("../class/product_class.php");
include_once("../class/loaitintuc_class.php");
include_once("../class/tintuc_class.php");

?>

<?php
$product = new product;
$show_product = $product->show_product();
$show_brand = $product->show_brand();
$show_brandA = $product->show_brand();
$tintuc = new tintuc;
$show_tintuc = $tintuc->show_tintuc();
$show_tintucA = $tintuc->show_tintuc();
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
            <li>
            <?php
                        if($show_brandA){
                            
                            $resultA = $show_brandA ->fetch_assoc()
                               
                    ?>
                <a href="cartegory.php?product_id=<?php
                        echo $resultA['brand_id']?>">Sản phẩm
                        <?php
                            
                            }?>
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
                            
                        </li>
                        <?php
                            }
                            }?>
                    
                    </div>
                </ul>
                </a>
            
            </li>
            <li> <?php
           
                        if($show_tintuc){
                            
                            $resultA = $show_tintuc ->fetch_assoc()
                               
                    ?>
                <a href="tintuc.php?tentintuc_id=<?php
                        echo $resultA['tintuc_id']?>">Tin tức
                        <?php
                            
                            }?>
                <ul>
                    <div class="sub-menu-tintuc">
                    <?php
                        if($show_tintucA){
                            $i=0;
                            while($result = $show_tintucA ->fetch_assoc())
                            {
                               $i++;
                    ?>
                        <li><a href="tintuc.php?tentintuc_id=<?php
                        echo $result['tintuc_id']?>"><?php echo $result['tintuc_name']?></a>
                            
                        </li>
                        <?php
                            }
                            }?>
                    
                    
                    </div>
                </ul>
            </li>
            <li><a href="">Liên hệ</a> </li>
        </div>
        <div class="others">
            <li><input type="text" placeholder="Tìm kiếm"><i class="fas fa-search"></i></li>
            <li><a href="" class="fa fa-user"></a>
            <?php
                    session_start();
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
                                echo '<li><a href="infomation.php">Thay đổi mật khẩu</a></li>';
                                echo '<li><a href="index.php?action=dangxuat">Đăng xuất</a></li>';
                            }
                        ?>
                    </div>
                </ul>
            </li> 
            
            <li><a href="./cart.php" class="fa fa-shopping-bag"></a></li>
        </div>
    </header>