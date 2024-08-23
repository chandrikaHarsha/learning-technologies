<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Gallery</title>
  </head>
  <body>
    <div class="container">
      <?php include "header.php"?>
      <!--Menubar with 6 tabs/ menu Starts-->
      <?php include "menubar.php"?>
      <!--Video Block Starts-->
      <div class="banner">
        <img src="images/gallery.svg" alt="banner image" />
      </div>
      <!--Main starts-->
      <div class="main">
        <?php include "mleft.php"?>
        <div class="mright">
          <h1>Gallery</h1>
          <div class="imgCard">
            <img
              src="images/g1.jpg"
              alt="image"
              title="image"
              width="100%"
              height="100%"
            />
          </div>
          <div class="imgCard">
            <img
              src="images/g2.jpg"
              alt="image"
              title="image"
              width="100%"
              height="100%"
            />
          </div>
          <div class="imgCard">
            <img
              src="images/g3.jpg"
              alt="image"
              title="image"
              width="100%"
              height="100%"
            />
          </div>
          <div class="imgCard">
            <img
              src="images/g4.jpg"
              alt="image"
              title="image"
              width="100%"
              height="100%"
            />
          </div>
          <div class="imgCard">
            <img
              src="images/g5.jpg"
              alt="image"
              title="image"
              width="100%"
              height="100%"
            />
          </div>
          <div class="imgCard">
            <img
              src="images/g6.jpg"
              alt="image"
              title="image"
              width="100%"
              height="100%"
            />
          </div>
          <div class="imgCard">
            <img
              src="images/g7.jpg"
              alt="image"
              title="image"
              width="100%"
              height="100%"
            />
          </div>
          <div class="imgCard">
            <img
              src="images/g8.jpg"
              alt="image"
              title="image"
              width="100%"
              height="100%"
            />
          </div>
        </div>
      </div>
      <!--footer starts-->
      <?php include "footer.php"?>
    </div>
  </body>
</html>
