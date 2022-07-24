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
    <link rel="stylesheet" href="./css/paragraph.css">
    <title>Paragraph</title>
</head>
<body>
<!-- <div class="top-bar">
      <label for="speed">Speed: </label>
      <input type="text" name="speed" >

      <label for="width">Width: </label>
      <input type="text" name="width">

      <label for="height">Height: </label>
      <input type="text" name="height">

      <label for="leftAdjust">Left-Adjust: </label>
      <input type="text" name="leftAdjust">

      <label for="heightAdjust">Height-Adjust: </label>
      <input type="text" name="heightAdjust">
    </div> -->
    <div class="container">
      <div class="highlighter"></div>
      <div class="paraph">
        <p>
        While the display layer provides fine-grained control over which
          parts of a PDF document are rendered, there are times when we prefer a
          ready-to-use viewer. Luckily, PDF.js has us covered. In this part, we’ll
          integrate the PDF.js default viewer into our website.

          Looking at the downloaded files, we see another directory, web/. In this
          directory, we can find all necessary files for the viewer. We copy the entire
          folder into a new directory called viewer/ (which results in files like viewer/web/viewer.js).

          Just like in the previous example, we need the JavaScript files of PDF.js.
          To set this up correctly, we create the build/ folder inside viewer/ and copy
          the files there, which results in viewer/build/pdf.js and viewer/build/pdf.worker.js.

          We can now work on the integration. To do this, we create a simple HTML
          file that will include the viewer via an. This allows us to embed the
          viewer into an existing webpage very easily. The viewer is configured via URL parameters,
          a list of which can be found here. For our example, we’ll only configure
          the source PDF file. For more advanced features (like saving the PDF document
          to your web server again), you can start modifying the viewer.html file provided by PDF.js
          While the display layer provides fine-grained control over which
          parts of a PDF document are rendered, there are times when we prefer a
          ready-to-use viewer. Luckily, PDF.js has us covered. In this part, we’ll
          integrate the PDF.js default viewer into our website.

          Looking at the downloaded files, we see another directory, web/. In this
          directory, we can find all necessary files for the viewer. We copy the entire
          folder into a new directory called viewer/ (which results in files like viewer/web/viewer.js).

          Just like in the previous example, we need the JavaScript files of PDF.js.
          To set this up correctly, we create the build/ folder inside viewer/ and copy
          the files there, which results in viewer/build/pdf.js and viewer/build/pdf.worker.js.

          We can now work on the integration. To do this, we create a simple HTML
          file that will include the viewer via an. This allows us to embed the
          viewer into an existing webpage very easily. The viewer is configured via URL parameters,
          a list of which can be found here. For our example, we’ll only configure
          the source PDF file. For more advanced features (like saving the PDF document
          to your web server again), you can start modifying the viewer.html file provided by PDF.js
          While the display layer provides fine-grained control over which
          parts of a PDF document are rendered, there are times when we prefer a
          ready-to-use viewer. Luckily, PDF.js has us covered. In this part, we’ll
          integrate the PDF.js default viewer into our website.

          Looking at the downloaded files, we see another directory, web/. In this
          directory, we can find all necessary files for the viewer. We copy the entire
          folder into a new directory called viewer/ (which results in files like viewer/web/viewer.js).

          Just like in the previous example, we need the JavaScript files of PDF.js.
          To set this up correctly, we create the build/ folder inside viewer/ and copy
          the files there, which results in viewer/build/pdf.js and viewer/build/pdf.worker.js.

          We can now work on the integration. To do this, we create a simple HTML
          file that will include the viewer via an. This allows us to embed the
          viewer into an existing webpage very easily. The viewer is configured via.
        </p>
      </div>
    </div>
    <script src="./js/highlight.js" charset="utf-8"></script>
</body>
</html>