<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <title>Trang chủ HL</title>
</head>
<body>
    <!------header------>
    <?php
        include(("./shares/header.php"))
    ?>
    
    <!------slider------>
    <?php
        include(("slider.php"));
    ?>
    <?php
        include(("main.php"));
    ?>


    
    <!-- delivery -->
    <section class="delivery">
        <div class="container">
        <div class="delivery-top-wrap">
            <div class="delivery-top">
                <div class="delivery-top-delivery delivery-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <div class="delivery-top-adress delivery-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>

                <div class="delivery-top-payment delivery-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>

        </div>
        </div>


        <div class="container">
            <div class="delivery-content row">
                <div class="delivery-content-left">
                    <p>Chọn địa chỉ giao hàng</p>
                    <div class="delivery-content-left-dangnhap row">
                        <i class="fas fa-sign-in-alt"></i>
                        <p>Đăng nhập (nếu bạn đã có tài khoản)</p>
                    </div>

                    <div class="delivery-content-left-khachle row">
                        <input checked name="loaikhach" type="radio">
                        <p><span style="font-weight: bold;">Khách lẻ</span>(Nếu bạn không muốn lưu lại thông tin)</p>
                    </div>

                    <div class="delivery-content-left-dangky row">
                        <input name="loaikhach" type="radio">
                        <p><span style="font-weight: bold;">Đăng Ký</span>(Tạo tài khoản)</p>
                    </div>

                    <div class="delivery-content-left-input-top row">
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Họ Tên<span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Điện Thoại<span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Tỉnh/Tp<span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Quận/Huyện<span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="delivery-content-left-input-bottom">
                    <label for="">Địa Chỉ<span style="color: red;">*</span></label>
                            <input type="text">
                    </div>
                    <div class="delivery-content-left-button row">
                        <a href=""><span&#171;></span><p>Quay lại giỏ hàng</p></a>
                        <button><p style="font-weight: bold;">Thanh toán và giao hàng</p></button>
                    </div>
                </div>
                
                <div class="delivery-content-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giảm gía</th>
                            <th>Số lượng</th>
                            <th>Thành Tiền</th>
                            
                        </tr>
                        <tr>
                            <td>Nước hoa</td>
                            <td>-30%</td>
                            <td>1</td>
                            <td><p>590.000 <sup>đ</sup></p></td>

                        </tr>
                        <tr>
                            <td>Tẩy trang</td>
                            <td>-20%</td>
                            <td>1</td>
                            <td><p>290.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng</td>
                            <td style="font-weight: bold;"><p>590.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Thuế</td>
                            <td style="font-weight: bold;"><p>20.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                            <td style="font-weight: bold;"><p>790.000 <sup>đ</sup></p></td>
                        </tr>
                    </table>
                </div>
                
            </div>
            
        </div>
    </section>


    <!---------footer--------->
    <?php
        include(("./shares/footer.php"));
    ?>
</body>
<!------script cho slider------>
<script src="js/slider.js"></script>
</html>

