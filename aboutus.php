<?php 
include "config/connect.php";
$sql="Select * from aboutus where id=1";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
 

$query = "select * from whywe where visibility=1";
$data = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>About us</title>
  </head>
  <body>
    <div class="container">
      <?php include "header.php"?>
      <!--Menubar with 6 tabs/ menu Starts-->
      <?php include "menubar.php"?>
      <!--Video Block Starts-->
      <div class="banner">
        <img src="images/Aboutus.svg" alt="banner image" />
      </div>
      <!--Main starts-->
      <div class="main">
        <?php include "mleft.php"?>
        <div class="mright">
          <h1><?php echo $row['title']?></h1>
          <?php echo $row['description']?>
          <h2>Why Learning Technologies</h2>
          <ul class="whyWe">
          <?php while($whyWe=mysqli_fetch_assoc($data)) {?>
            <li><?php echo $whyWe['title']?></li>
            <?php }?>
            </ul>
        </div>
      </div>
      <!--footer starts-->
      <?php include "footer.php"?>
    </div>
  </body>
</html>
