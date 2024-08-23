<?php include "../config/connect.php";
include "../config/session.php";
error_reporting(0);

if($_GET['uid']!=""){
  $Title=$_POST['title'];
  $Description=$_POST['description'];   
  $Visible=$_POST['visible'];
   
   if(isset($_POST['submit'])){
     $uQuery = "update news set title='$Title', description='$Description',visibility='$Visible' where id='".$_GET['uid']."'";
      mysqli_query($connection, $uQuery);
      echo '<script>window.location="viewnews.php"</script>';
   }
   $query = "Select * from news where id='".$_GET['uid']."'";
   $result = mysqli_query($connection, $query);
   $row = mysqli_fetch_assoc($result);
}
else{
  $Title=$_POST['title'];
  $Description=$_POST['description'];   
  $Visible=$_POST['visible'];
  if(isset($_POST['submit'])){
    echo $sqlData = "insert into news (title, description, visibility) values ('$Title','$Description','$Visible')"; 
    mysqli_query($connection, $sqlData);
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning Technologies | News</title>
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
                    class="adminInput"
                    placeholder="Title"
                    value="<?php echo $row['title']?>"
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
                  ><?php echo $row['description']?></textarea>
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft">Visibility</div>
                <div class="adminRowRight">
                  <input type="radio" name="visible" value="<?php 
                  if($row['visibility']==0){
                    echo "checked";
                  }
                   ?>" />Hide
                  <input type="radio" name="visible" value="<?php 
                  if($row['visibility']==1){
                    echo "checked";
                  }
                  ?>"  />Visible
                </div>
              </div>
              <div class="adminRow">
                <div class="adminRowLeft"></div>
                <div class="adminRowRight">
                  <input
                    type="submit"
                    name="submit"
                    value="Update"
                    class="btn uBtn"
                  />
                  <input
                    type="reset"
                    name="reset"
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
