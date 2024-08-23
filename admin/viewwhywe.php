<?php include "../config/connect.php";
include "../config/session.php";
$sql = "select * from whywe where visibility=1";
$result = mysqli_query($connection, $sql);
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
                <div class="viewcol w500">Title</div>
                <div class="viewcol">Visible</div>
                <div class="viewcol w150">Action</div>
              </div>

              <?php while($row = mysqli_fetch_assoc($result)) {?>
                <div class="addrow">
                <div class="viewcol">
                  <input type="checkbox" name="chk" value="0" />
                </div>
                <div class="viewcol w500"><?php echo $row['title']?></div>
                <div class="viewcol">Show</div>
                <div class="viewcol w160">
                  <a href="#"
                    ><div class="editbtn">
                      <i class="fa fa-pencil"></i>
                    </div>
                  </a>
                  <a href="#"
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
