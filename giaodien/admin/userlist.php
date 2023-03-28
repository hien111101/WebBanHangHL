<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/user_class.php");
?>
<?php
$username = new user;
$show_user = $username->show_user();
?>
        <div class="admin-content-right ">
        <div class="admin-content-right-cartegory_list ">
                <h1>Danh sách danh mục <a class="btn btn-default btn-cart btn-pay btn-add-cart-two" style="
                " href="./useradd.php" item-id="25">
                        <i class="fa fa-cart-plus"></i> Thêm danh mục 
                </a></h1>
                
                <table>
                    <tr>
                        <th>STT</th>
                        <th>User</th>
                        <th>Password</th>
                        <th>Họ và tên</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php
                        if($show_user){
                            $i=0;
                            while($result = $show_user ->fetch_assoc())
                            {
                               $i++;
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $result['user']?></td>
                        <td><?php echo md5($result['pass'])?></td>
                        <td><?php echo $result['HoVaTen']?></td>
                        <td><?php echo $result['email']?></td>
                        <td><?php echo $result['DiaChi']?></td>
                        <td><?php echo $result['phone']?></td>
                        <td>
                        <a href="useredit.php?user_id=<?php
                        echo $result['user_id']?>">Sửa</a>| 
                        <a href="userdelete.php?user_id=<?php
                        echo $result['user_id']?>">Xoá</a> </td>
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