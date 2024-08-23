<?php
session_start();
if($_SESSION['ADMIN']==""){
    echo '<script>window.location="index.php"</script>';
}

?>