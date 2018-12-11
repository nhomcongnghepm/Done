<?php
session_start();
$id= $_GET['id'];
if($id != “”) //  Neu co id truy cap vao
{
    if(isset($_SESSION['giohang'][$id]))
    {
// Tăng số lượng nó lên nếu đã có id sản phẩm đó trong giỏ hàng
        $_SESSION['giohang'][$id]++;
    }
    else // Nếu chưa có thì thêm mới vào
    {
        $_SESSION['giohang'][$id] = 1; // S? lư?ng m?c đ?nh là 1
    }
}
header('Location: show_cart.php');
?>