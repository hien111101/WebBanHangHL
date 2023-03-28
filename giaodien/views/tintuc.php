<?php
include(("./shares/header.php"));
$tintuc = new tintuc;
$tentintuc_id  =$_GET['tentintuc_id'];
$get_tentintucA = $tintuc-> get_tentintucA();
$get_tentintucB = $tintuc-> get_tentintucA();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <title>Trang chủ HL</title>
</head>
<body>
    <!------header------>
    

<secsion class="cartegory">
        <div  class="container" style="height:30%">
            <div style="background-color:#00FA9A; height: 60px; padding-top:25px; border-radius: 10px; " class="cartegory-top row">
            <?php
                
                if($get_tentintucA){
                    $resultA = $get_tentintucA ->fetch_assoc();
                    
                ?>
                <p style="font-size: 1rem; font-weight: bold;">Trang chủ</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold">Sản phẩm</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold">
                <?php echo $resultA['tintuc_name']?>
            </p>
                <?php
                }
                ?>
            
            </div>
        </div>
        <div class="container"style="margin-bottom:20px">
            <div class="row">
            <div class="cartegory-right row">
                    
                
                    
                            <div class="cartegory-right-content row" >
                                    <?php
                                    if($get_tentintucB){
                                        $i=0;
                                        while($result = $get_tentintucB ->fetch_assoc())
                                        {
                                        $i++;
                                ?>
                                <div class="grid__column-2-4" style="display: flex;">
                                    
                                <a href="chitiettintuc.php?tentintuc_id=<?php echo $result['tentintuc_id']?>">
                                    <div  class="home-product-item">
                                        
                                            <div class="home-product-item1__img " style="width: 300px" >
                                                <h2 class="home-product-item__name"><?php echo $result['tentintuc_name']?></h2>
                                                <img width="300px;height:20px" src="https://cosmetic-01.web4s.vn/uploads/tiny_uploads/3f25fa2bd5e5e6a2993b01d1e8901ef48b42b255.jpg">                           
                                            </div>
                                            
                                        </div>
                                    </a>
                                    
                                </div>
                                <?php
                                        }}
                                        ?>
                            </div>
                
                            
                    </div>
                </div>
                
            </div>
        </div>
    </secsion>

    <!---------footer--------->
    <?php
        include(("./shares/footer.php"));
    ?>
</body>

</html>