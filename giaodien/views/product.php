
<?php

include(("./shares/header.php"));

$product = new product;
$product_id =$_GET['product_id'];
$show_product = $product->show_product();

$get_product = $product-> get_product($product_id);
    if($get_product){
        $resultA = $get_product ->fetch_assoc();
    }

?>


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Trang chủ HL</title>
</head>
<body>
    <!------header------>
    
    
    <!------slider------>
    
    <section class="product" >
        <div class="container">



            <div class="product-top row" style="background-color:#00FA9A; height: 60px; padding-top:25px; border-radius: 10px;">
                <p style="font-size: 1rem; font-weight: bold;">Trang chủ</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold">Sản phẩm</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold"><?php echo $resultA['product_name']?></p>
            </div>
            <div class="product-content row">
                <div class="product-content-left">
                    <div class="product-content-left-big-img">
                    <img  src="../admin/uploads/<?php echo $resultA['product_img']?> " >
                    </div>
                    <div class="product-content-left-small-img">
                        <?php
                        $get_product_img_desc = $product-> get_product_img_desc($product_id);
                        if($get_product_img_desc){
                            if($get_product_img_desc){
                                               
                                while($resultB = $get_product_img_desc ->fetch_assoc())
                                {
                        
                            
                    ?>
                        
                    <img src="../admin/uploads/<?php echo $resultB['product_img_desc']?> " >
                    <?php
                                }}}
                    ?>
                    </div>
                </div>
                
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1><?php echo $resultA['product_name']?></h1>
                        <p>Mã sản phẩm: NH_00337 | Thương hiệu: Varsace</p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p class="product-content-right-product-price-new"><?php echo $resultA['product_price_new']?> <sup>đ</sup></p> <!-- giá new -->
                        <p class="product-content-right-product-price-old"><?php echo $resultA['product_price']?> <sup>đ</sup></p>
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
            <div class="row1" >
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
                    <div class="tab-content" >
                        <div id="content" class="tab-pane fade in active" aria-labelledby="content-tab"> 
                            <p><?php echo $resultA['product_desc']?>
                            </p>
                            <p style="text-align: center;"><img src="../admin/uploads/<?php echo $resultA['product_img']?> " width="600" height="600"></p>
                            <p style="text-align: center;"><em><?php echo $resultA['product_name']?></em></p>
                        </div>
                        <div id="highlight" class="tab-pane fade" aria-labelledby="highlight-tab"></div>
                        <div id="condition" class="tab-pane fade"aria-labelledby="condition-tab"> </div>
                        <div id="comment" class="tab-pane fade"aria-labelledby="comment-tab"> </div>
                    </div></div>
                    
        </div>
    </section>


    <!-- product-realated -->
    <section class="product-related container" style="margin-top:500px; ">
    <div class="product-releated-all" style="display: inline-block;">
        <div class="product-related-title row"  >
                <p>SẢN PHẨM LIÊN QUAN</p>
        </div>
            <div class="product-content"  >
                <div class="product-related-item">
                        <ul style="display: flex; " >
                            <?php
                                if($show_product){
                                    $i=0;
                                    while($result = $show_product ->fetch_assoc())
                                    {
                                    $i++;
                                
                            ?>
                            <li >
                            <img width="240" height="200" src="../admin/uploads/<?php echo $result['product_img']?> " >
                                <h1><?php echo $result['product_name']?></h1>
                                <p>295.000 <sup>đ</sup></p>
                            </li>
                            <?php
                                }}
                            ?>

                        </ul>
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