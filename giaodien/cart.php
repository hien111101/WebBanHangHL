<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <title>Trang chủ HL</title>
</head>
<body>
    <!------header------>
    <?php
        include(("header.php"))
    ?>
    
    <!------slider------>
    <?php
        include(("slider.php"));
    ?>
    <?php
        include(("main.php"));
    ?>


    <!-- cart -->

<section class="cart">
    <div class="container">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <div class="cart-top-address cart-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>

                <div class="cart-top-payment cart-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="cart-content row">
        <div class="cart-content-left">
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Màu</th>
                    <th>Size</th>
                    <th>SL</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>

                    
                </tr>
                <tr>
                    <td><img src="images/item-1.png" alt=""></td>
                    <td><h1>Gel - Body shampoo Acqua Di Gio</h1></td>
                    <td><img src="...color" alt=""></td>
                    <td><p>L</p></td>
                    <td><input type="number" value="1" min="1"></td>
                    <td><p>295.000 <sup>đ</sup></p></td>
                    <td><span>X</span></td>
                    
                </tr>
                <tr>
                    <td><img src="images/item-1.png" alt=""></td>
                    <td><h1>Gel - Body shampoo Acqua Di Gio</h1></td>
                    <td><img src="...color" alt=""></td>
                    <td><p>L</p></td>
                    <td><input type="number" value="1" min="1"></td>
                    <td><p>295.000 <sup>đ</sup></p></td>
                    <td><span>X</span></td>
                    
                </tr>
                <tr>
                    <td><img src="images/item-1.png" alt=""></td>
                    <td><h1>Gel - Body shampoo Acqua Di Gio</h1></td>
                    <td><img src="...color" alt=""></td>
                    <td><p>L</p></td>
                    <td><input type="number" value="1" min="1"></td>
                    <td><p>295.000 <sup>đ</sup></p></td>
                    <td><span>X</span></td>
                    
                </tr>
            </table>
        </div>

        <div class="cart-content-right">
            <table>
                <tr>
                    <th colspan="2">Tổng tiền giỏ hàng</th>
                </tr>
                <tr>
                    <td>Tổng sản phẩm</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Tổng sản phẩm</td>
                    <td><p>295.000 <sup>đ</sup></p></td>
                </tr>
                <tr>
                    <td>Tổng sản phẩm</td>
                    <td><p style="color: black; font-weight: bold;">295.000 <sup>đ</sup></p></td>
                </tr>
            </table>
            <div class="cart-content-right-text">
                <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng trị giá trên 2.000.000 đ</p>
                <p style="color: red; font-weight: bold;">Mua thêm <span style="font-size:18px;">000.000 đ</span>| để được miễn phí ship</p>
            </div>
            <div class="cart-content-right-button">
                <button>Tiếp tục mua sắm</button>
                <button>Thanh toán</button>

            </div>
        </div>
        </div>
    </div>
</section>
<!-- cart -->

    <!---------footer--------->
    <?php
        include(("footer.php"));
    ?>
</body>
<!------script cho slider------>
<script src="js/slider.js"></script>
</html>

