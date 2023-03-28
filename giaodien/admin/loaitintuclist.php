<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/loaitintuc_class.php");
?>
<?php
$loaitintuc = new loaitintuc;
$show_tintuc = $loaitintuc->show_tintuc();
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
    text-align:center;" href="./loaitintucadd.php" item-id="25">
                        <i class="fa fa-cart-plus"></i> Thêm sản phẩm 
                </a></h1>
                
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên tin tức</th>
                        <th>Loại danh mục</th>
                        <th>Tuỳ biến</th>
                    </tr>
                    <?php
                        if($show_tintuc){
                            $i=0;
                            while($result = $show_tintuc ->fetch_assoc())
                            {
                               $i++;
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $result['tintuc_name']?></td>
                        <td><?php echo $result['cartegory_name']?></td>
                        <td>
                        <a href="loaitintucedit.php?tintuc_id=<?php
                        echo $result['tintuc_id']?>">Sửa</a>| 
                        <a href="loaitintucdelete.php?tintuc_id=<?php
                        echo $result['tintuc_id']?>">Xoá</a> </td>
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