<?php
 
// Include các thư viện
require_once '../model/database.php';
require_once '../model/Session.php';
 
// Khởi tạo object DB
$db = new database();
// Kết nối database
$db->connect();
// Khởi tạo object Session
$session = new Session();
// Bắt đầu session
$session->start();
// Lấy dữ liệu session
$user = $session->get();
// Múi giờ chung
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
$date_current = '';
$date_current = date("Y-m-d H:i:sa");
 
// Nếu tồn tại $user
if ($user)
{
    // Lệnh truy vấn thông tin user
    $sql_get_data_user = "SELECT * FROM user WHERE user = '$user'";
 
    // Lấy thông tin user
    $data_user = $db->fetch_assoc($sql_get_data_user, 1);
}
 
?>