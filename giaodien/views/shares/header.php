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
                        <li><a href="">Nước hoa nam</a>
                            <ul>
                                <li><a href="">Nước hoa</a> </li>
                                <li><a href="">Giftset</a> </li>
                                <li><a href="">Lăn khử mùi</a> </li>
                                <li><a href="">Mỹ phẩm</a> </li>
                            </ul>
                        </li>
                        <li><a href="">Nước hoa nữ</a>
                            <ul>
                                <li><a href=""> Nước hoa</a></li>
                                <li><a href="">Giftset</a> </li>
                                <li><a href="">Lăn khử mùi</a> </li>
                                <li><a href="">Mỹ phẩm</a> </li>
                            </ul>
                        </li>
                        <li><a href="">Unisex</a>
                            <ul>
                                <li><a href="">Nước hoa xe hơi</a> </li>
                                <li><a href="">Nước hoa</a> </li>
                                <li><a href="">Mỹ phẩm</a> </li>
                            </ul>
                        </li>
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
                                echo '<li><a href="index.php?action=dangxuat">Đăng xuất</a></li>';
                            }
                        ?>
                    </div>
                </ul>
            </li> 
            
            <li><a href="./cart.php" class="fa fa-shopping-bag"></a></li>
        </div>
    </header>