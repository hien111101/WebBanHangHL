<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/tintuc_class.php");
?>
<?php
$tintuc = new tintuc;
$show_tentintuc = $tintuc->show_tentintuc();
?>
        <div class="admin-content-right ">
        <div class="admin-content-right-cartegory_list ">
                <h1>Danh sách sản phẩm <a class="btn btn-default btn-cart btn-pay btn-add-cart-two" style="" href="./tintucadd.php" item-id="25">
                        <i class="fa fa-cart-plus"></i> Thêm sản phẩm 
                </a></h1>
                
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Loại tin tức</th>
                        <th>Tên tiêu đề</th>
                        <th>Mô tả</th>
                        <th>Tuỳ biến</th>
                    </tr>
                    <?php
                        if($show_tentintuc){
                            $i=0;
                            while($result = $show_tentintuc ->fetch_assoc())
                            {
                               $i++;
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $result['tintuc_name']?></td>
                        <td><?php echo $result['tentintuc_name']?></td>
                        <td><?php echo $result['tentintuc_tieude']?></td>
                        <td>
                        <a href="tintucedit.php?tentintuc_id=<?php
                        echo $result['tentintuc_id']?>">Sửa</a>| 
                        <a href="tintucdelete.php?tentintuc_id=<?php
                        echo $result['tentintuc_id']?>">Xoá</a> </td>
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