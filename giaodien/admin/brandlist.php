<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/brand_class.php");
?>
<?php
$brand = new brand;
$show_brand = $brand->show_brand();
?>
        <div class="admin-content-right ">
        <div class="admin-content-right-cartegory_list ">
                <h1>Danh sách danh mục <a class="btn btn-default btn-cart btn-pay btn-add-cart-two" style="color: #fff;
    background-color: #28e0c8;
    border: 0 !important;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 0;height: 30px;
    float:right;
    width:190px;
    text-align:center;" href="./cartegoryadd.php" item-id="25">
                        <i class="fa fa-cart-plus"></i> Thêm sản phẩm 
                </a></h1>
                
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Tuỳ biến</th>
                    </tr>
                    <?php
                        if($show_brand){
                            $i=0;
                            while($result = $show_brand ->fetch_assoc())
                            {
                               $i++;
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $result['cartegory_name']?></td>
                        <td><?php echo $result['brand_name']?></td>
                        <td>
                        <a href="brandedit.php?brand_id=<?php
                        echo $result['brand_id']?>">Sửa</a>| 
                        <a href="branddelete.php?brand_id=<?php
                        echo $result['brand_id']?>">Xoá</a> </td>
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