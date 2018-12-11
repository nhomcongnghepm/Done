<?php
session_start();
session_destroy();
header('Location: ../view/show_cart.php');
?>

