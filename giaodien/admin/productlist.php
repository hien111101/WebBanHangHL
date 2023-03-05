<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/product_class.php");
?>
<?php
$product = new product;
$show_product = $product->show_product();
?>
        <div class="admin-content-right ">
        <div class="admin-content-right-cartegory_list ">
                <h1>Danh sách sản phẩm <a class="btn btn-default btn-cart btn-pay btn-add-cart-two" style="" href="./productadd.php" item-id="25">
                        <i class="fa fa-cart-plus"></i> Thêm sản phẩm 
                </a></h1>
                
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Giá sản phẩm khuyến mãi</th>
                        <th>Mô tả</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Tuỳ biến</th>
                    </tr>
                    <?php
                        if($show_product){
                            $i=0;
                            while($result = $show_product ->fetch_assoc())
                            {
                               $i++;
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $result['cartegory_name']?></td>
                        <td><?php echo $result['brand_name']?></td>
                        <td><?php echo $result['product_name']?></td>
                        <td><?php echo $result['product_price']?></td>
                        <td><?php echo $result['product_price_new']?></td>
                        <td><?php echo $result['product_desc']?></td>
                        <td><?php echo $result['product_img']?></td>
                        <td>
                        <a href="productedit.php?product_id=<?php
                        echo $result['product_id']?>">Sửa</a>| 
                        <a href="productdelete.php?product_id=<?php
                        echo $result['product_id']?>">Xoá</a> </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    
                </table>
            </div>
        </div>
    </section>
</body>
</html>