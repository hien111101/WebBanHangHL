<?php
include(("database.php"));
?>

<?php
class user{
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    public function insert_user($HoVaTen,$DiaChi,$email,$user,$pass,$phone){
        $query = "INSERT INTO tbl_user(HoVaTen,DiaChi,email,user,pass,phone) VALUES ('$HoVaTen','$DiaChi','$email','$user','$pass','$phone')";
        $result = $this ->db->insert($query);
        header('location:login.php');
        return $result;
    }

    public function get_user($user,$user_id){
        $query = "SELECT * FROM tbl_user WHERE user = '$user'";
        $result = $this ->db->select($query);
        return $result;
    }
    

}
?>