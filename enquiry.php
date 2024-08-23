<?php include "config/connect.php";

if(isset($_POST['submit'])){
$Name=$_POST['uName'];
$Email=$_POST['uEmail'];
$Contact=$_POST['uContact'];
$Enquiry=$_POST['enquiry'];
$sqlEnquiry = "insert into enquiry (name,email,phone,description) values('$Name', '$Email', '$Contact', '$Enquiry')";
mysqli_query($connection, $sqlEnquiry);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Enquiry</title>
  </head>
  <body>
    <div class="container">
      <?php include "header.php"?>
      <!--Menubar with 6 tabs/ menu Starts-->
      <?php include "menubar.php"?>
      <!--Video Block Starts-->
      <div class="banner">
        <img src="images/enquiry.svg" alt="banner image" />
      </div>
      <!--Main starts-->
      <div class="main">
        <?php include "mleft.php"?>
        <div class="mright">
          <h1>Enquiry</h1>
          <div class="formContainer">
            <form method="post">
              <div class="row">
                <div class="rLeft">Name</div>
                <div class="rRight">
                  <input
                    type="text"
                    name="uName"
                    placeholder="Enter your name"
                    class="input"
                  />
                </div>
              </div>

              <div class="row">
                <div class="rLeft">Student type</div>
                <div class="rRight">
                  <input
                    type="radio"
                    name="stdType"
                    value="Reg"
                    class="stdType"
                    checked
                  />
                  <fColorRadio>Regular</fColorRadio>
                  <input
                    type="radio"
                    name="stdType"
                    value="Pvt"
                    class="stdType"
                  />
                  <fColorRadio>Private</fColorRadio>
                </div>
              </div>
              <div class="row">
                <div class="rLeft">Email</div>
                <div class="rRight">
                  <input
                    type="email"
                    name="uEmail"
                    placeholder="Enter your email"
                    class="input"
                  />
                </div>
              </div>

              <div class="row">
                <div class="rLeft">Contact Number</div>
                <div class="rRight">
                  <input
                    type="text"
                    name="uContact"
                    placeholder="Enter your Contact Number"
                    class="input"
                  />
                </div>
              </div>
              <div class="row" style="height: 150px">
                <div class="rLeft">Enquiry</div>
                <div class="rRight">
                  <textarea
                    name="enquiry"
                    placeholder="Enter your message"
                    cols="55"
                    rows="5"
                    class="tArea"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="rLeft">Courses</div>
                <div class="rRight">
                  <select name="courses" class="input">
                    <option value="c1">Course-1</option>
                    <option value="c2">Course-2</option>
                    <option value="c3">Course-3</option>
                    <option value="c4">Course-4</option>
                    <option value="c5">Course-5</option>
                    <option value="c6">Course-6</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="rLeft"></div>
                <div class="rRight">
                  <input type="submit" value="Submit" name ='submit' class="sBtn" />
                  <input type="reset" value="Reset" class="rBtn" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--footer starts-->
      <?php include "footer.php"?>
    </div>
  </body>
</html>
