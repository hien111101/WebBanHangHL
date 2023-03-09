<?php
include(("./model/database.php"));
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
        // header('location:userlist.php');
        return $result;
    }

    public function show_user(){
        $query = "SELECT * FROM tbl_user ORDER BY user_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    public function get_user($user_id){
        $query = "SELECT * FROM tbl_user WHERE user_id = '$user_id'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function delete_user($user_id){
        $query = "DELETE FROM tbl_user WHERE user_id = '$user_id'";
        $result = $this ->db->delete($query);
        header('location:userlist.php');
        return $result;
    }

    public function update_user($user_id,$HoVaTen,$DiaChi,$email,$user,$pass,$phone){
        $query = "UPDATE tbl_user SET user = '$user', HoVaTen = '$HoVaTen', DiaChi = '$DiaChi'
        , email = '$email', pass = '$pass', phone = '$phone' WHERE user_id = '$user_id' ";
        $result = $this ->db->update($query);
        // header('location:userlist.php');
        return $result;
    }

}
?>