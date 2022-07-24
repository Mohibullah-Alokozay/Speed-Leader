<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/reader.css">
     <link rel="stylesheet" href="./css/bootstrap.min.css">
     <script src="./js/jquery.min.js"></script>
     <title>Setting Part</title>
 </head>
 <body>
    <div class="read-image">
    <img src="./image/2.jpg" alt="image for on of reader">
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12 left">
        <h3>Setting Deffirent Option</h3>
        <span class="input">
            <label>Font Size: </label><span id="displayFontSize"></span>
            <input type="range" id="myRange" max="10" min="1" value="1"><br>
        </span>
        <span class="input">
            <label>Select Color: </label><br><input type="color" id="colorPick">
            <input type="button" style="margin-top: 10px;" value="Change Color" onclick="changeColor()"><br>
        </span>
        <span class="input">
            <label>Select Background Color:</label> <br><input type="color" id="bgColorPick">
            <input type="button" value="Change Background Color" onclick="changeBgColor()">
        </span>
    </div>
    <span >
        <div class="col-lg-10 col-md-10 col-sm-12 right" id="body">
            <p id="txtColorChange">
                <?php 
                    include_once "paragraph.php";
                ?>
            </p>
        </div>
    </span>
   </div>
   <div class="col-lg-12 col-md-12 col-sm-12">
    <?php
        include_once "read-footer.php";
    ?>
   </div>
   <script src="./js/setting.js"></script>
 </body>
 </html>