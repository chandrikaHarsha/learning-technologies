<?php include "config/connect.php"?>
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
          <h1>Courses</h1>
          <ul class="courses" type="square">
            <?php while($courses=mysqli_fetch_assoc($coursesData)){?></a>
              <a href="course.php?cid=<?php echo $courses['id']?>"><li><?php echo $courses['title']?></li>
              <?php }?>
            </ul>
        </div>
      </div>
      <!--footer starts-->
      <?php include "footer.php"?>
    </div>
  </body>
</html>
