<?php
session_start();
require_once('connectdb.php');
if(isset($_POST['dangnhap'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        header("location:login.php?Empty= please fill  in the blanks");
    }else{
        $mypassword = $_POST['pass'];
        $query = "select * from tbl_user where user ='".$_POST['user']."' and pass ='".$mypassword."' ";
        $result=mysqli_query($con,$query);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['user']= $_POST['user'];
            header("location:index.php");
        }else{
        header("location:login.php?Invalid = Please enter corret username and password");

        }

    }
}else{
    echo'not working';
}

?>