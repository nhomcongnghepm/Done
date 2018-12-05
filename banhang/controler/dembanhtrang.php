<?php
session_start();
include '../model/init.php';
$sql=$db->demsanpham_banh();
$query=$db->query($sql);
$rows=$db->lay_rows($query);
$dem=$rows['dem'];
?>