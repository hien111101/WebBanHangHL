<?php
include("./views/header.php");
include("./views/slider.php");
include("./class/user_class.php");
?>
<?php
$username = new user;
if(!isset($_GET['user_id']) || $_GET['user_id'] == NULL ){
    echo "<script>window.location='userlist.php'</script>";
}else{
    $user_id = $_GET['user_id'];
}
    $delete_user = $username-> delete_user($user_id);
   
?>
