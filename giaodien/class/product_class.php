<?php
include(("../model/database.php"));
?>

<?php
class product{
    private $db;

    public function __construct(){
        $this -> db = new Database();
    }

    public function insert_product(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
        $filesize = $_FILES['product_img']['size'];
        $filetype = strtolower(pathinfo($product_img,PATHINFO_EXTENSION));
        $filetarget =basename($_FILES['product_img']['name']);
            if(file_exists("uploads/$filetarget")){
                $alert = "File đã tồn tại";
                return $alert; 
            }else{
                if($filetype != "jpg" && $filetype != "jpeg" && $filetype != "png"){
                    $alert = "chỉ chọn file jpg,jpeg và png";
                return $alert; 
                }else{
                    if($filesize > 1000000){
                        $alert = "File không được lớn hơn 1mb";
                    return $alert; 
                    }else{
                        move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
                        $query = "INSERT INTO tbl_product(
                            product_name,
                            cartegory_id,
                            brand_id,
                            product_price,
                            product_price_new,
                            product_desc,
                            product_img) VALUES (
                            '$product_name',
                            '$cartegory_id',
                            '$brand_id',
                            '$product_price',
                            '$product_price_new',
                            '$product_desc',
                            '$product_img')";
                        $result = $this ->db->insert($query);
                        if($result){
                            $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
                            $result = $this -> db -> select($query)->fetch_assoc();
                            $product_id = $result['product_id'];
                            $filename = $_FILES['product_img_desc']['name'];
                            $filettpm = $_FILES['product_img_desc']['tmp_name'];
                            
                            foreach($filename as $key => $value)
                            {
                                move_uploaded_file($filettpm [$key],"uploads/".$value);
                                $query = "INSERT INTO tbl_product_img_desc (product_id,product_img_desc) VALUES ('$product_id','$value')";
                                $result = $this -> db -> insert($query);
                            }
                        }

                    }
                }
                
            }
        
        header('location:productlist.php');
        return $result;
    }
    public function show_product(){
        $query = "SELECT tbl_product.*, tbl_cartegory.cartegory_name,tbl_brand.brand_name FROM tbl_product 
        INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id INNER JOIN tbl_brand ON tbl_product.brand_id = tbl_brand.brand_id 
        ORDER BY tbl_product.product_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    public function show_brand(){
        $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name FROM tbl_brand 
        INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    public function count_product(){
        $query = "SELECT COUNT(product_name) FROM tbl_product";
        $result = $this ->db->select($query);
        return $result;
    }

    public function show_product_img_desc(){
        $query = "SELECT * FROM tbl_product_img_desc ORDER BY product_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    

    public function get_brand($brand_id){
        $query = "SELECT * FROM tbl_brand WHERE brand_id = '$brand_id'";
        $result = $this ->db->select($query);
        return $result;
    }

    public function get_product_img_desc($product_id){
        $query = "SELECT * FROM tbl_product_img_desc WHERE product_id = '$product_id'";
        $result = $this ->db->select($query);
        return $result;
    }

    public function get_product($product_id){
        $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function delete_product($product_id){
        $query = "DELETE FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this ->db->delete($query);
        header('location:productlist.php');
        return $result;
    }

    public function update_product($product_id,$product_name,$cartegory_id,$brand_id,$product_price,$product_price_new,$product_desc,$product_img){
        $query = "UPDATE tbl_product SET product_name = '$product_name',cartegory_id = '$cartegory_id',brand_id = '$brand_id',
        product_price = '$product_price',product_price_new = '$product_price_new',product_desc = '$product_desc',product_img = '$product_img' WHERE product_id = '$product_id' ";
        $result = $this ->db->update($query);
        header('location:productlist.php');
        return $result;
    }
}
?>