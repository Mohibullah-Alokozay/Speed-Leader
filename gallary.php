<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/gallary.css">
    <title>Gallary Part</title>
</head>
<body>
<h1>Show Gallary Image</h1>
    <div class="col-lg-1 col-md-1 col-sm-12 container"></div>
    <div class="col-lg-10 col-md-10 col-sm-12 container">
        <img src="" id="image" style="width: 100%; height:500px;">
    </div>
    <div class="col-lg-1 col-md-1 col-sm-12 container"></div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="all_image">
            <div class="images">
                <img src="./image/33.jpg" alt="image-3">
                <img src="./image/4.jpg" alt="image-4">
                <img src="./image/5.jpg" alt="image-5">
            </div>
            <div class="images bottom">
                <img src="./image/6.jpg" alt="image-6">
                <img src="./image/7.jpg" alt="image-7">
                <img src="./image/8.jpg" alt="image-8">
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 container">
        <?php
            include_once "footer.php";
        ?>
    </div>
    <script type="text/javascript">
        var image = document.getElementById('image');
        var images = ['image/33.jpg','image/4.jpg', 'image/5.jpg', 'image/6.jpg', 'image/7.jpg', 'image/8.jpg']
        setInterval(function() {
            var random = Math.ceil(Math.random() * 6);
            image.src = images[random];
        }, 2000);
    </script>
</body>
</html>