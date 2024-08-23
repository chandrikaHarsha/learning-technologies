<?php include "config/connect.php";

$newsData = "select * from news where id='".$_GET['nid']."'";
$news=mysqli_query($connection, $newsData);
$result = mysqli_fetch_assoc($news);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Courses</title>
  </head>
  <body>
    <div class="container">
      <?php include "header.php"?>
      <!--Menubar with 6 tabs/ menu Starts-->
     <?php include "menubar.php"?>
      <!--Video Block Starts-->
      <div class="banner">
        <img src="images/courses.svg" alt="banner image" />
      </div>
      <!--Main starts-->
      <div class="main">
        <?php include "mleft.php"?>
        <div class="mright">
          <h1><?php echo $result['title']?></h1>
          <div class="row">
              <div class="rLeft">Description</div>
              <div class="rRight cuRight"><?php echo $result['description']?></div>
            </div>
        </div>
      </div>
      <!--footer starts-->
      <?php include "footer.php"?>
    </div>
  </body>
</html>
