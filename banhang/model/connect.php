<?php
$con = mysqli_connect("localhost", "root", "")or die("<a style='color:red'>Not connect to server!</a>");
$dbname = "banhang";//Khai bao ten database
$dbselected = mysqli_select_db($con,$dbname)or die("<a style='color:red'>Not connect to database !</a>");
?>

