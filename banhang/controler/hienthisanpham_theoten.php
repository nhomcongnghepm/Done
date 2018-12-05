<?php	require_once "../model/init.php";
if(isset($_GET['masp']))
{
    $masp=$_GET['masp'];
}
$sql=$db->hienthisanpham_theoten($masp);
$query=$db->query($sql);
$row=$db->lay_rows($query);
?>