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
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/home.css">
    <title>Welcome Pages</title>
</head>
<body>
    <?php
        include_once "navbar.php";
    ?>
    <div class="section">
        <section class="section-img">
            <img src="./image/2.jpg" alt="image for section">
        </section>
    </div>
    <script src="js/script.js"></script>
</body>
</html>