<?php
// error_reporting(0);
$host="localhost";
$username="root";
$userpassword="";
$db="learningtechnologies";

$connection = mysqli_connect($host, $username, $userpassword, $db);

$sqlHome="Select * from home Where id=1";
$homeData = mysqli_query($connection, $sqlHome);
$home = mysqli_fetch_assoc($homeData);

$sqlAboutus="Select * from aboutus Where id=1";
$aboutusData = mysqli_query($connection, $sqlAboutus);
$aboutus= mysqli_fetch_assoc($aboutusData);

$sqlContactus="Select * from contactus Where id=1";
$contactusData = mysqli_query($connection, $sqlContactus);
$contactus= mysqli_fetch_assoc($contactusData);

$sqlCourses = "Select * from courses where visibility =1";
$coursesData = mysqli_query($connection,$sqlCourses);

$sqlAddNews = "Select * from news where visibility=1";
$sqlAddNewsData = mysqli_query($connection, $sqlAddNews);


?>
