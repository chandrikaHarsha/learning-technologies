<?php 
$news="select * from news where visibility=1";
$newsData = mysqli_query($connection,$news);

?>
<div class="newsBar">
<marquee onmouseover="this.stop()" onmouseout="this.start()">
    <?php while($result = mysqli_fetch_assoc($newsData)) {?>
    <a href="news.php?nid=<?php echo $result['id']?>"><?php  echo $result['title']?></a>
   <?php }?>
</marquee>
 </div>