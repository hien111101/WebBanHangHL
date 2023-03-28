<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/tintuc_class.php");
?>
<?php
$tintuc = new tintuc;
if(!isset($_GET['tentintuc_id']) || $_GET['tentintuc_id'] == NULL ){
    echo "<script>window.location='tintuclist.php'</script>";
}else{
    $tentintuc_id = $_GET['tentintuc_id'];
}
    $delete_tintuc = $tintuc-> delete_tintuc($tentintuc_id);
   
?>
