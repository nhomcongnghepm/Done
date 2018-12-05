<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
{
    $masp = $_POST["selector"];
    $delete=$db->sanpham_delete($masp);
    $a=$db->query($delete);

    if ($a) {
        echo "<script>alert('Xóa thành công !');window.location='?menu=dethi_list'</script>";
    }
    else {
        echo "<script>alert('Bạn vui lòng xóa câu hỏi trước khi xóa đề thi !');window.location='?menu=dethi_list'</script>";
    }
}
?>