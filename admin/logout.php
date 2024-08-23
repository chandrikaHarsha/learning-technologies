<?php 
include "../config/connect.php";
include "../config/session.php";

session_start();
unset($_SESSION['ADMIN']);
echo '<script>window.location="index.php"</script>'
?>