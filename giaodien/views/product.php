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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Trang chủ HL</title>
</head>
<body>
    <!------header------>
    <?php
        include(("./shares/header.php"));
    ?>
    
    <!------slider------>
    
    <section class="product">
        <div class="container">
            <div class="product-top row">
                <p style="font-size: 1rem; font-weight: bold;">Trang chủ</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold">Sản phẩm</p>
            </div>
            <div class="product-content row">
                <div class="product-content-left">
                    <div class="product-content-left-big-img">
                        <img src="../images/item-1.png" alt="">
                    </div>
                    <div class="product-content-left-small-img">
                            <img src="../images/item-1.png" alt="">
                            <img src="../images/item-1.png" alt="">
                    </div>
                </div>
                
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1>Gel - Body shampoo Acqua Di Gio (Italya, Hương thơm Dương xỉ - Aromatic Fougere, Eau Fraiche)</h1>
                        <p>Mã sản phẩm: NH_00337 | Thương hiệu: Varsace</p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p class="product-content-right-product-price-new">295,000 <sup>đ</sup></p> <!-- giá new -->
                        <p class="product-content-right-product-price-old">430,000 <sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-product-detail">
                        <ul>
                            <li>Nhãn hiệu: Nuoc Hoa Xe Hoi</li>
                            <li>Giới tính: Nam</li>
                            <li>Xuất xứ: Ý</li>
                            <li>Mùi hương: Hương thơm Dương Xỉ</li>
                            <li>Nồng độ: Parfum Classic</li>
                        </ul>
                    </div>
                    <div class="product-content-right-available">
                        <div class="group-available noPadding">
                            <div class="a-row">
                                <label for="">Mùi hương:</label>
                                <span class="selection">
                                    Hương thơm Dương xỉ - Aromatic Fougere
                                </span>
                            </div>
                        </div>
                        <div class="group-available noPadding">
                            <div class="a-row">
                                <label for="">Nồng độ: </label>
                                    <span class="selection">
                                        Eau Fraiche
                                    </span>
                            </div>
                        </div>
                        <div class="group-available noPadding">
                            <div class="a-row">
                                <label for="">Xuất xứ: </label>
                                    <span class="selection">
                                        Italya
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="quantity">
                        <p style="font-weight:bold">Số lượng: <input type="number" min="0" value="1"></p>
                    </div>
                    <a class="btn btn-default btn-cart btn-pay btn-add-cart-two" item-id="25">
                        <i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng 
                    </a>
                </div>
            </div>
            <div class="row1">
                <div class="bottom-detail-product">
                    <ul class="nav_title clearfix row nav-tabs"  role="tablist"id="myTab">
                        <li class="active" role="presentation"> 
                            <a data-toggle="tab" href="#content" data-bs-toggle="tab" data-bs-target="#content" role="tab" aria-expanded="true">Mô tả</a></li><li class=""> 
                            <a data-toggle="tab" href="#highlight" data-bs-toggle="tab" data-bs-target="#highlight"  role="tab" aria-expanded="false">Điểm nổi bật</a>
                        </li>
                        <li class="" role="presentation"> 
                            <a data-toggle="tab" href="#condition" data-bs-toggle="tab" data-bs-target="#condition" role="tab" aria-expanded="false">Điều kiện</a></li><li class=""> 
                            <a data-toggle="tab" href="#comment" data-bs-toggle="tab" data-bs-target="#comment" role="tab" aria-expanded="false">Bình luận</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="content" class="tab-pane fade in active" aria-labelledby="content-tab"> 
                            <p>Acqua Di Gio Pour Homme được lấy cảm hứng từ những gì tinh túy nhất của biển khơi, ánh mặt trời, đất mẹ và những cơn gió lồng lộng của những hòn đảo miền biển Địa Trung Hải.
                                <br>* Với hương thơm tinh khiết, ngào ngạt và nồng nàn mùi gỗ, mùi hương thoang thoảng của gió biển, quả chín, và cây cỏ, Acqua Di Gio Pour Homme là sự thể hiện rõ ràng nhất của nam tính ở mỗi người đàn ông.
                                <br>* Bộ 4 món: 2100K
                                <br>+ Nước hoa nam Acqua Di Gio EDT (100ml + 20ml)
                                <br>+ Gel tắm - All Over Body Shampoo (75ml)
                                <br>+ Kem thơm - After Shave Balm (75ml)&nbsp;
                                <br>* Bộ 3 món: 1.750K
                                <br>+ Nước hoa nam Acqua Di Gio EDT (100ml + 20ml)
                                <br>+ Gel tắm - All Over Body Shampoo (75ml)
                                <br>+ Kem thơm - After Shave Balm (75ml)&nbsp;
                            </p>
                            <p style="text-align: center;"><img src="../images/item-1.png" alt="" width="600" height="600"></p>
                            <p style="text-align: center;"><em>Gel - Body shampoo Acqua Di Gio</em></p>
                        </div>
                        <div id="highlight" class="tab-pane fade" aria-labelledby="highlight-tab">h1123 </div>
                        <div id="condition" class="tab-pane fade"aria-labelledby="condition-tab"> </div>
                        <div id="comment" class="tab-pane fade"aria-labelledby="comment-tab"> </div>
                    </div></div>
                    
        </div>
    </section>
    <!---------footer--------->
    <?php
        include(("./shares/footer.php"));
    ?>
</body>
<!------script cho slider------>
<script>
      $('.nav-tabs a').click(function(){
  $(this).tab('show');
})

// Select tab by name
$('.nav-tabs a[href="#content"]').tab('show')

// Select first tab
$('.nav-tabs a:first').tab('show')

// Select last tab
$('.nav-tabs a:last').tab('show')

// Select fourth tab (zero-based)
$('.nav-tabs li:eq(3) a').tab('show')
</script>
</html>