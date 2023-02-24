<?php

$mysqli = new mysqli("localhost","root","","webbanhangmypham");

if($mysqli->connect_errno){
    echo "Kết nối thất bại" .$mysqli->connect_error;
    exit();
}

?>