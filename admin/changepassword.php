<?php
error_reporting(0);
include "../config/connect.php";
include "../config/session.php";
if(isset($_POST['submit'])){
$op = $_POST['oldPassword'];
$np = $_POST['newPassword'];
$cp = $_POST['confirmPassword'];

$upassSql= "select * from users where id= '".$_SESSION['ADMIN']."'";
$db = mysqli_query($connection, $upassSql);
$result = mysqli_fetch_assoc($db);
if($op!=$result['u_pass']){
  $msg = 'You entered wrong password! Try again.';
}
else if($np!=$cp){
  $msg = 'Entered new password mismatched with confirm password.';
}
else{
    $updateUpassSql= "update users set u_pass='$np' where id='".$_SESSION['ADMIN']."'";
    $db = mysqli_query($connection, $updateUpassSql);
    $msg = 'Password changed successfully!';

}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning Technologies | User Password</title>
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
                <div class="adminRowLeft">Old Password</div>
                <div class="adminRowRight">
                  <input
                    type="password"
                    name="oldPassword"
                    placeholder="Old Password"
                    class="adminInput"
                  />
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft">New Password</div>
                <div class="adminRowRight">
                  <input
                    type="password"
                    name="newPassword"
                    placeholder="New Password"
                    class="adminInput"
                  />
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft">Confirm Password</div>
                <div class="adminRowRight">
                  <input
                    type="password"
                    name="confirmPassword"
                    placeholder="Confirm Password"
                    class="adminInput"
                  />
                </div>
              </div>

              <div class="adminRow">
                <div class="adminRowLeft"></div>
                <div class="adminRowRight">
                 <?php echo $msg?>
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft"></div>
                <div class="adminRowRight">
                  <input
                    type="submit"
                    name="submit"
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
