<?php
include('../modal/init.php');
if (isset($_GET['masp'])) {
    $masp = $_GET['masp'];
}
$sql=$db->laysp($masp);
$results=$db->query($sql);
while($rows = $db->lay_rows($results)) {
    $masp = $rows['masp'];
    $tensp = $rows['tensp'];
    $gia = $rows['gia'];
    $sl=$rows['soluong'];
    $mt=$rows['mota'];
}
?>