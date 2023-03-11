
<?php
$product = new product;
$show_brand = $product->show_brand();
$show_product = $product->show_product();
$show_productA = $product->show_product();
$count_product = $product -> count_product();
?>

<secsion class="cartegory">
        <div  class="container">
            <div style="background-color:#00FA9A; height: 60px; padding-top:25px; border-radius: 10px; " class="cartegory-top row">
            
                <p style="font-size: 1rem; font-weight: bold;">Trang chủ</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold">Sản phẩm</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div style="background-color: #3CB371; ;margin-bottom: 20px; border-radius: 10px; height:100%;" class="cartegory-left">
                    <ul style="font-size:1rem;font-weight: bold!important;padding: 20px 0 0 20px; "> Danh sách Sản phẩm
                    <?php
                        if($show_brand){
                            $i=0;
                            while($result = $show_brand ->fetch_assoc())
                            {
                               $i++;
                    ?>
                        <li  class="cartegory-left-li" style="margin-left: 10px;" ><a href="#"><?php echo $result['brand_name']?></a> 
                        
                           <ul>
                            <li><a href="cartegory.php?product_id=<?php
                        echo $result['brand_id']?>"><?php
                        echo $result['brand_name'] = 'Nước hoa'?></a> </li>
                                <li><a href="cartegory.php?product_id=<?php
                        echo $result['brand_id']?>"><?php
                        echo $result['brand_name'] = 'Giftset'?></a> </li>
                                <li><a href="cartegory.php?product_id=<?php
                        echo $result['brand_id']?>"><?php
                        echo $result['brand_name'] = 'Lăn khử mùi'?></a> </li>
                                <li><a href="cartegory.php?product_id=<?php
                        echo $result['brand_id']?>"><?php
                        echo $result['brand_name'] = 'Mỹ phẩm'?></a> </li>
                            </ul>
                        </li>
                        
                        <?php
                            }}
                            ?>
                    </ul>
                </div>
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-item">
                        <p>Danh sách nước hoa nam</p>
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
                                    if($show_productA){
                                        $i=0;
                                        while($result = $show_productA ->fetch_assoc())
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