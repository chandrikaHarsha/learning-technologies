<?php 
include "../config/connect.php";
include "../config/session.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning Technologies | Contact Us</title>
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
                <div class="adminRowLeft">Contact Person</div>
                <div class="adminRowRight">
                  <input
                    type="text"
                    name="contactPersonName"
                    placeholder="Contact Person Name"
                    class="adminInput"
                    value="<?php echo $contactus['c_name'];?>"
                  />
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft">Contact Number</div>
                <div class="adminRowRight">
                  <input
                    type="text"
                    name="contactNumber"
                    placeholder="Contact Number"
                    class="adminInput"
                    value="<?php echo $contactus['c_number'];?>"
                  />
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft">Contact Email</div>
                <div class="adminRowRight">
                  <input
                    type="email"
                    name="contactEmail"
                    placeholder="Contact Email"
                    class="adminInput"
                    value="<?php echo $contactus['c_email'];?>"
                  />
                </div>
              </div>
              <div class="adminRow h150">
                <div class="adminRowLeft">Address</div>
                <div class="adminRowRight" style="padding: 0">
                  <textarea
                    name="address"
                    placeholder="Address"
                    class="adminTarea h150"
                  ><?php echo $contactus['c_address'];?></textarea>
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft">Visibility</div>
                <div class="adminRowRight">
                  <input type="radio" name="visible" value="<?php echo $contactus['visibility'];?>" checked/>Hide
                  <input type="radio" name="visible" value="<?php echo $contactus['visibility'];?>"  />Visible
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
