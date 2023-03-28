<?php
include(("./model/database.php"));
?>

<?php
class tintuc{
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    public function insert_tentintuc($tintuc_id,$tentintuc_name,$tentintuc_tieude){
        $query = "INSERT INTO tbl_tentintuc(tintuc_id,
        tentintuc_name,
        tentintuc_tieude) VALUES ('$tintuc_id',
        '$tentintuc_name',
        '$tentintuc_tieude')";
        $result = $this ->db->insert($query);
        header('location:tintuclist.php');
        return $result;
    }

    public function show_tintuc(){
        $query = "SELECT * FROM tbl_tintuc ORDER BY tintuc_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    public function show_tentintuc(){
        $query = "SELECT tbl_tentintuc.*, tbl_tintuc.tintuc_name FROM tbl_tentintuc 
        INNER JOIN tbl_tintuc ON tbl_tentintuc.tintuc_id = tbl_tintuc.tintuc_id
        ORDER BY tbl_tentintuc.tintuc_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }   


    public function get_tintuc($tentintuc_id){
        $query = "SELECT * FROM tbl_tentintuc WHERE tentintuc_id = '$tentintuc_id'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function delete_tintuc($tentintuc_id){
        $query = "DELETE FROM tbl_tentintuc WHERE tentintuc_id = '$tentintuc_id'";
        $result = $this ->db->delete($query);
        header('location:tintuclist.php');
        return $result;
    }

    public function update_tintuc($tentintuc_id,$tentintuc_name,$tentintuc_tieude){
        $query = "UPDATE tbl_tentintuc SET tentintuc_name = '$tentintuc_name',tentintuc_tieude = '$tentintuc_tieude'  WHERE tentintuc_id = '$tentintuc_id' ";
        $result = $this ->db->update($query);
        header('location:tintuclist.php');
        return $result;
    }

}
?>