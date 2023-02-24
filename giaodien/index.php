<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <title>Trang chủ HL</title>
</head>
<body>
    <!------header------>
    <?php
        include(("header.php"))
    ?>
    
    <!------slider------>
    <?php
        include(("slider.php"));
    ?>
    <?php
        include(("main.php"));
    ?>
    <!---------footer--------->
    <?php
        include(("footer.php"));
    ?>
</body>
<!------script cho slider------>
<script src="js/slider.js"></script>
</html>