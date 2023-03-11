<?php
$product = new product;

$show_product = $product->show_product();
?>

<div class="container">
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
        
    </div>