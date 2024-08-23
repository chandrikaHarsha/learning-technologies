<?php include "../config/connect.php";
include "../config/session.php";
$sql = "select * from enquiry";
$result = mysqli_query($connection , $sql);

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
                  <input
                    type="submit"
                    name="submit"
                    value="Delete"
                    class="w60"
                  />
                </div>
                <div class="viewcol w180">Name</div>
                <div class="viewcol w180">Number</div>
                <div class="viewcol w180">Phone</div>
                <div class="viewcol w300">Enquiry</div>
              </div>

              <?php while($row = mysqli_fetch_assoc($result)){?>
                <div class="addrow">
                <div class="viewcol">
                  <input type="checkbox" name="chk" value="0" class="w60" />
                </div>
                <div class="viewcol w180"><?php echo $row['name']?></div>
                <div class="viewcol w180"><?php echo $row['phone']?></div>
                <div class="viewcol w180"><?php echo $row['email']?></div>
                <div class="viewcol w300"><?php echo $row['description']?></div>
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
