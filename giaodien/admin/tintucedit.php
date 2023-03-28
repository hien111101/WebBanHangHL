<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/tintuc_class.php");
?>

<?php
$tintuc = new tintuc;
$tentintuc_id =$_GET['tentintuc_id'];
$get_tintuc = $tintuc-> get_tintuc($tentintuc_id);
    if($get_tintuc){
        $resultA = $get_tintuc ->fetch_assoc();
    }
    
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $tintuc_id = $_POST['tintuc_id'];
    $tentintuc_name =$_POST['tentintuc_name'];
    $tentintuc_tieude = $_POST['tentintuc_tieude'];
    $update_tintuc = $tintuc ->update_tintuc($tentintuc_id,$tentintuc_name,$tentintuc_tieude);
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Sửa loại sản phẩm</h1>
                <form action="" method="POST">
                    <select name="tintuc_id" id="">
                        <option value="#">Chọn danh mục</option>
                        <?php
                        $show_tintuc = $tintuc->show_tintuc();
                        if($show_tintuc){while($return = $show_tintuc -> fetch_assoc()){

                        
                        ?>
                        <option value="<?php echo $return['tintuc_id']?>"><?php echo $return['tintuc_name']?></option>
                        <?php
                            }}
                        ?>
                    </select><br>
                    <input type="text" required name="tentintuc_name" value="<?php echo $resultA['tentintuc_name']?>" placeholder="Nhập tên sản phẩm"><br>
         
                    <textarea type="text"  id="editor1" required  name="tentintuc_tieude" placeholder="Nhập tên loại sản phẩm"><?php echo $resultA['tentintuc_tieude']?></textarea>
                <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
    </script>

</body>
</html>