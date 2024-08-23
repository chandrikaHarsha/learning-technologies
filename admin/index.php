<?php
error_reporting(0); 
include "../config/connect.php";
if(isset($_POST['submit'])){
  $uname = $_POST['uName'];
  $upass = $_POST['uPass'];

  $sql = "Select * from users where u_name='$uname' && u_pass='$upass'";
  $result=mysqli_query($connection, $sql);
  $row=mysqli_fetch_assoc($result);
  $tot= mysqli_num_rows($result);

  if($tot==1){
    session_start();
    $_SESSION['ADMIN']=$row['id'];
    echo '<script>window.location="home.php"</script>';
  }
  else{
    $msg="Invalid username or password";
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
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
      <div class="main">
        <!-- <h1>Login</h1> -->
        <div class="mainWrapper">
          <div class="mainLeft">
            <div class="loginImg">
              <img
                src="images/adminLogin.svg"
                alt="Login"
                width="300"
                height="460"
              />
            </div>
          </div>
          <div class="mainRight">
            <form method="post">
              <div class="row">
                <div class="rLeft"><span class="fa fa-user"></span></div>
                <div class="rRight">
                  <input
                    type="text"
                    placeholder="Enter your name"
                    class="input"
                    name="uName"
                  />
                </div>
              </div>
              <div class="row">
                <div class="rLeft"><span class="fa fa-key"></span></div>
                <div class="rRight">
                  <input
                    type="password"
                    placeholder="Password"
                    name="uPass"
                    class="input"
                  />
                </div>
              </div>
              <div class="row">
                <div class="rLeft"></div>
                <div class="rRight">
                  <input type="submit" class="Login" value="Submit" name="submit"/>
                </div>
              </div>
              <div class="row">
                <div class="rLeft"></div>
                <div class="rRight err">
                  <?php echo $msg?>
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
