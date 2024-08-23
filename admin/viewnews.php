<?php include "../config/connect.php";
include "../config/session.php";
error_reporting(0);
if($_GET['did']!=""){
  $sql = "delete from news where id= '". $_GET['did']."'";
  mysqli_query($connection, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning Technologies | Home</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="outer">
      <?php include "header.php"?>
      <div class="Main">
        <div class="MainWrapper">
          <?php include "adminMLeft.php"?>
          <div class="adminMRight">
            <form action="" method="post">
              <div class="addrow">
                <div class="viewcol">
                  <input type="submit" name="submit" value="Delete" />
                </div>
                <div class="viewcol w200">Title</div>
                <div class="viewcol w345">Description</div>
                <div class="viewcol">Visible</div>
                <div class="viewcol w150">Action</div>
              </div>

              <?php while($AddNews=mysqli_fetch_assoc($sqlAddNewsData)) {?>
              <div class="addrow">
                <div class="viewcol">
                  <input type="checkbox" name="chk" value="0" />
                </div>
                <div class="viewcol w200"><?php echo $AddNews['title']?></div>
                <div class="viewcol w345"><?php echo $AddNews['description']?></div>
                <div class="viewcol"><?php
                if($AddNews['visibility']==1){
                  echo "Show";
                }
                else{
                  echo "Hide";
                }
                ?></div>
                <div class="viewcol w160">
                  <a href="addnews.php?uid=<?php echo $AddNews['id'];?>"
                    ><div class="editbtn">
                      <i class="fa fa-pencil"></i>
                    </div>
                  </a>
                  <a href="viewnews.php?did=<?php echo $AddNews['id'];?>"
                    ><div class="delbtn">
                      <i class="fa-regular fa-trash-can"></i></div
                  ></a>
                </div>
              </div>
              <?php }?>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include "footer.php"?>
  </body>
</html>
