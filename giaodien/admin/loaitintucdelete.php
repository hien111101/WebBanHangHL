<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/loaitintuc_class.php");
?>
<?php
$loaitintuc = new loaitintuc;
if(!isset($_GET['tintuc_id']) || $_GET['tintuc_id'] == NULL ){
    echo "<script>window.location='tintuclist.php'</script>";
}else{
    $tintuc_id = $_GET['tintuc_id'];
}
    $delete_tintuc = $loaitintuc-> delete_tintuc($tintuc_id);
   
?>
