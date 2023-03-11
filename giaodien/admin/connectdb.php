<?php
// function connectdb(){
//     $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=webbanhangmypham", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   //echo "Connected successfully";
// } catch(PDOException $e) {
//   //echo "Connection failed: " . $e->getMessage();
// }return $conn;
// }

$con = mysqli_connect('localhost','root','','webbanhangmypham');
if(!$con){
  // die('please check your connection'.mysqli_error($con));
}
?>