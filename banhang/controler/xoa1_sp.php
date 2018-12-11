<?php
session_start();
$cart=$_SESSION['giohang'];
$id=$_GET['id'];
if($id == 0)
{
    unset($_SESSION['giohang']);
}
else
{
    unset($_SESSION['giohang'][$id]);
}
header("location: ../view/show_cart.php");
exit();
