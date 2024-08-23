<?php 
include "../config/session.php";
include "../config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning Technologies | About Us</title>
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
            <form method="post">
              <div class="adminRow">
                <div class="adminRowLeft">Title</div>
                <div class="adminRowRight">
                  <input
                    type="text"
                    name="title"
                    placeholder="Title"
                    class="adminInput"
                    value="<?php echo $aboutus['title'];?>"
                  />
                </div>
              </div>
              <div class="adminRow h150">
                <div class="adminRowLeft">Description</div>
                <div class="adminRowRight" style="padding: 0">
                  <textarea
                    name="description"
                    placeholder="Description"
                    class="adminTarea h150"
                  ><?php echo $aboutus['description']?></textarea>
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft">Visibility</div>
                <div class="adminRowRight">
                  <input type="radio" name="visible" value="<?php echo $aboutus['visibility']?>" checked/>Hide
                  <input type="radio" name="visible" value="<?php echo $aboutus['visibility']?>"  />Visible
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft"></div>
                <div class="adminRowRight">
                  <input
                    type="submit"
                    name="UpdateHBtn"
                    value="Update"
                    class="btn"
                  />
                  <input
                    type="reset"
                    name="ResetHBtn"
                    value="Reset"
                    class="btn"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <?php include "footer.php"?>
    </div>
  </body>
</html>
