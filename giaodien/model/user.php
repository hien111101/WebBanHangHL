<?php
function checkuser($username,$password){
    $conn=connectDB();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user=''.$username. AND pass=''.$password.");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq[0]['role'];
}

?>      


