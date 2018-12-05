<?php
require_once '../modal/init.php';
if(isset($_POST['edit']))
{
    $idmasp = $_POST['idmasp'];
    $ten=$_POST['ten'];
    $gia=$_POST['gia'];
    $sl=$_POST['sl'];
    $mt=$_POST['mt'];
    if($_POST["ten"]==null||$_POST["gia"]==null||$_POST["sl"]==null||$_POST["mt"]==null)
    {
        echo 'Bạn vui lòng nhập đầy đủ thông tin';
        exit;
    }
    else{
        $sql=$db->capnhatsp($idmasp,$ten,$gia,$sl,$mt);
        $query=$db->query($sql);
        if($query)
        {
            echo "<script>alert('Cập nhật thông tin sản phẩm thành công !');window.location='?menu=quanlysanpham'</script>";
        }
        else echo 'Có lỗi xảy ra';
    }
}
?>