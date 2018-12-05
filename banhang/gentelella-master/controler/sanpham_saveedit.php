<?php
require_once '../modal/init.php';

if(isset($_POST['edit']))
{
    $idmasp = $_POST['idmasp'];
    $ten=$_POST['ten'];
    $gia=$_POST['gia'];
    $file_name=$_FILES['file1']['name'];
    $file_path=$_FILES['file1']['tmp_name'];
    $new_path='../assets/image/'.$file_name;
    $uploaded_file=move_uploaded_file($file_path,$file_name);
    $file_update='../assets/image'.$file_name;
    if($_POST["ten"]==null||$_POST["gia"]==null||$new_path==null)
    {
        echo 'Bạn vui lòng nhập đầy đủ thông tin';
        exit;
    }
    else{
        $sql=$db->capnhatsp($idmasp,$ten,$gia,$file_update);
        $query=$db->query($sql);
        if($query)
        {
            echo "<script>alert('Cập nhật thông tin sản phẩm thành công !');window.location='?menu=quanlysanpham'</script>";
        }
        else echo 'Có lỗi xảy ra';
    }
}
?>