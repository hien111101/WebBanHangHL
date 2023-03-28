
<?php

include(("./shares/header.php"));

$tintuc = new tintuc;
$tentintuc_id =$_GET['tentintuc_id'];
$show_tentintuc = $tintuc->show_tentintuc();

$get_tentintucA = $tintuc-> get_tentintucA();
    if($get_tentintucA){
        $resultA = $get_tentintucA ->fetch_assoc();
    }
   
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Trang chủ HL</title>
</head>
<body>
    
    <section class="product" >
        <div class="container">



            <div class="product-top row" style="background-color:#00FA9A; height: 60px; padding-top:25px; border-radius: 10px;">
                <p style="font-size: 1rem; font-weight: bold;">Trang chủ</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold">Sản phẩm</p><span style="font-weight: bold;">&#10230;</span><p style="font-size: 1rem; font-weight: bold"><?php echo $resultA['tentintuc_name']?></p>
            </div>
            <div class="">
                    <div class=""  >
                        
                        <div style="height:1000px;" class="">
                            <p style="text-align:center; margin-bottom:20px" class="product-content-right-product-price-new"><?php echo $resultA['tentintuc_name']?> </p> <!-- giá new -->
                            <p  class="row"><?php echo $resultA['tentintuc_tieude']?> </p>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!---------footer--------->
    
</body>
<footer style="margin-top: 800px;">
<?php
    include(("./shares/footer.php"));
?>
</footer>
<!------script cho slider------>

</html>