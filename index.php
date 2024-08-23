<?php include "config/connect.php";?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning Technologies | Home</title>
    <link href="css/style.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
      <?php include "header.php"?> 
      <!--Menubar with 6 tabs/ menu Starts-->
      <?php include "menubar.php"?>
      <?php include "newsbar.php"?> 
      <!--Video Block Starts-->
      <div class="video">
        <iframe
          width="1200"
          height="400"
          src="https://www.youtube.com/embed/66dUFomHq9M?si=hNVJbds-46yHsTva"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
      </div>
      <!--Main starts-->
      <div class="main">
        <?php include "mleft.php"?>
        <div class="mright">
          <h1><?php echo $home['title'];?></h1>
          <?php echo $home['description'];?>
        </div>
      </div>
      <!--footer starts-->
     <?php include "footer.php"?>
    </div>
    <script src="../practice.js"></script>
  </body>
</html>
