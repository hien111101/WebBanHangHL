
<?php
$product = new product;
$show_brand = $product->show_brand();
$show_product = $product->show_product();
$get_product = $product->get_productA();
$get_productA = $product->get_productA();
$get_productB = $product->get_productA();
$count_product = $product -> count_product();
?>

<secsion class="cartegory">
        <div  class="container">
            <div style="background-color:#00FA9A; height: 60px; padding-top:25px; border-radius: 10px; " class="cartegory-top row">
                <?php
                
                if($get_productA){
                    $resultA = $get_productA ->fetch_assoc();
                    while($result = $get_productA ->fetch_assoc())
                    {
                ?>
                <p style="font-size: 1rem; font-weight: bold;">Trang chủ</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold">Sản phẩm</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold"><?php echo $resultA['brand_name']?></p>
                <?php
                }}
                ?>
            
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div style="background-color: #3CB371; ;margin-bottom: 20px; border-radius: 10px; height:100%;" class="cartegory-left">
                    <ul style="font-size:1rem;font-weight: bold!important;padding: 20px 0 0 20px; "> <li class="cartegory-left-li"> <a href="#">Danh sách sản phẩm</a>
                    <?php
                        if($show_brand){
                            $i=0;
                            while($result = $show_brand ->fetch_assoc())
                            {
                               $i++;
                    ?>
                        
                        
                           <ul>
                           <li><a href="cartegory.php?product_id=<?php echo $result['brand_id']?>"><?php echo $result['brand_name']?></a> </li>
                            </ul>
                        
                        
                        <?php
                            }}
                            ?>
                            </li>
                    </ul>
                </div>
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-item row">
                        <p>Danh sách  </p> <span style="font-weight: bold;">&#160;</span>
                        <?php
                        if($get_productB){
                            $resultA = $get_productB ->fetch_assoc();
                            while($result = $get_productB ->fetch_assoc())
                            {
                        ?>
                        <p ><?php echo $resultA['brand_name']?></p>
                        <?php
                        }}
                        ?>
                    </div>
                
                    <div class="cartegory-right-top-item">
                        
                        <select name="" id="sort-box">
                            <option value="">Sắp xếp</option>

                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                        </select>
                        <?php ?>
                    </div>
                            <div class="cartegory-right-content row" >
                                    <?php
                                    if($get_product){
                                        $i=0;
                                        while($result = $get_product ->fetch_assoc())
                                        {
                                        $i++;
                                ?>
                                <div class="grid__column-2-4" style="display: flex;">
                                    <a href="product.php?product_id=<?php
                                    echo $result['product_id']?>">
                                    <div class="home-product-item">
                                        
                                            <div class="home-product-item__img " >
                                            <img width="240" height="200" src="../admin/uploads/<?php echo $result['product_img']?> " >
                                            </div>
                                            <h4 class="home-product-item__name"><?php
                                    echo $result['product_name']?></h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old"><?php
                                    echo $result['product_price']?>₫</span>
                                                <span class="h4 home-product-item__price-new"><?php
                                    echo $result['product_price_new']?>₫</span>
                                            </div>
                                        </div>
                                    </a>
                                        <?php
                                        }}
                                        ?>
                                    </div>
                                </div>
                        
                            </div>
                    
                    
                    <div class="cartegory-right-bottom row">
                        <div class="cartegory-right-bottom-items">
                        <?php
                                    if($count_product){
                                        $i=1;
                                        while($resultB = $count_product ->fetch_assoc())
                                        {
                                        $i++;
                                ?>
                            <p style="padding-left:10px;">Hiển thị 1 <span>|</span> <?php echo $i?>sản phẩm</p>
                            <?php
                                        }}
                                        ?>
                        </div>
                        <div class="cartegory-right-bottom-items">
                            <p><span>&#171;</span>1 2 3 4 5 <span>&#187;</span> Trang cuối</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </secsion>