<?php
require_once '../model/init.php';

if (isset($_POST['dangnhap']))
{
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['pwd']);
    $password=sha1($password);
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    $sql= $db->dangnhap($username);
    $query=$db->query($sql);
    if ($db->num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
	$row=$db->lay_rows($query);
	if ($password != $row['pass']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
      if ($db->num_rows($query))
    {
        // Gửi dữ liệu để lưu session
        $session->send($username);
        // Giải phóng kết nối
        $db->close();
        header('Location: ../gentelella-master/production/admin.php');   		 }
}
?>