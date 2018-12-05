<?php
require_once '../modal/init.php';

if(isset($_POST['ok']))
{
    $ten=$_POST['ten'];
    $gia=$_POST['gia'];
    $loai=$_POST['loai'];
    $file_name=$_FILES['file']['name'];
    $file_path=$_FILES['file']['tmp_name'];
    $new_path='../assets/image/'.$file_name;
    $uploaded_file=move_uploaded_file($file_path,$new_path);
    if($_POST["ten"]==null||$_POST["gia"]==null||$new_path==null)
    {
        echo 'Bạn vui lòng nhập đầy đủ thông tin';
        exit;
    }
    else{
            $sql=$db->themsanpham($ten,$gia,$new_path,$loai);
            $query=$db->query($sql);
            if($query)
            {
                echo "<script>alert('Thêm sản phẩm thành công !');window.location='?menu=quanlysanpham'</script>";
            }
            else echo 'Có lỗi xảy ra';
        }
}
?>