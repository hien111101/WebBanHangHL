<?php
include_once(("../model/database.php"));
?>

<?php
class loaitintuc{
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    public function insert_tintuc($cartegory_id,$tintuc_name){
        $query = "INSERT INTO tbl_tintuc(cartegory_id,tintuc_name) VALUES ('$cartegory_id','$tintuc_name')";
        $result = $this ->db->insert($query);
        header('location:loaitintuclist.php');
        return $result;
    }

    public function show_tintuc(){
        $query = "SELECT tbl_tintuc.*, tbl_cartegory.cartegory_name FROM tbl_tintuc 
        INNER JOIN tbl_cartegory ON tbl_tintuc.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_tintuc.tintuc_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    public function get_tintuc($tintuc_id){
        $query = "SELECT * FROM tbl_tintuc WHERE tintuc_id = '$tintuc_id'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function delete_tintuc($tintuc_id){
        $query = "DELETE FROM tbl_tintuc WHERE tintuc_id = '$tintuc_id'";
        $result = $this ->db->delete($query);
        header('location:loaitintuclist.php');
        return $result;
    }

    public function update_tintuc($tintuc_id,$tintuc_name){
        $query = "UPDATE tbl_tintuc SET tintuc_name = '$tintuc_name' WHERE tintuc_id = '$tintuc_id' ";
        $result = $this ->db->update($query);
        header('location:loaitintuclist.php');
        return $result;
    }

}
?>