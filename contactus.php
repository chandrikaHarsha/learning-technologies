<?php include "config/connect.php"?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Contact us</title>
  </head>
  <body>
    <div class="container">
      <?php include "header.php"?>
        
      <!--Menubar with 6 tabs/ menu Starts-->
      <?php include "menubar.php"?>
      <!--Video Block Starts-->
      <div class="banner">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28624.301204396907!2d72.95125644516914!3d26.260441424523297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418e9516d3d2f7%3A0x1dab510242e185ff!2sChopasni%20Housing%20Board%2C%20Jodhpur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1717517906302!5m2!1sen!2sin"
          width="1200"
          height="400"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      <!--Main starts-->
      <div class="main">
        <?php include "mleft.php"?>
        <div class="mright">
          <h1>Connect with us</h1>
          <div class="formContainer">
            <div class="row">
              <div class="rLeft">Contact Person</div>
              <div class="rRight cuRight"><?php echo $contactus['c_name']?></div>
            </div>
            <div class="row">
              <div class="rLeft">Contact Number</div>
              <div class="rRight cuRight"><?php echo $contactus['c_number']?></div>
            </div>
            <div class="row">
              <div class="rLeft">Contact Email</div>
              <div class="rRight cuRight"><?php echo $contactus['c_email']?></div>
            </div>
            <div class="row">
              <div class="rLeft">Contact Address</div>
              <div class="rRight cuRight"><?php echo $contactus['c_address']?></div>
            </div>
            <div class="row" style="height: 150px">
              <!-- <div class="rLeft">Message</div>
              <div class="rRight">
                <textarea
                  name="enquiry"
                  placeholder="Enter your message"
                  cols="55"
                  rows="5"
                  class="tArea"
                ></textarea>
              </div>
            </div> -->

            <!-- <div class="row">
              <div class="rLeft"></div>
              <div class="rRight">
                <input type="submit" value="Submit" class="sBtn" />
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <!--footer starts-->
      <?php include "footer.php"?>
    </div>
  </body>
</html>
