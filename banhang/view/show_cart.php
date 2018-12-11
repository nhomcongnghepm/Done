<?php
session_start();
include'../model/init.php';
$giohang = $_SESSION['giohang'];
/*Xu ly cap nhat gio hang*/
if((isset($_POST['capnhat']))&&(count($_SESSION['giohang']) != ""))
{

    $soluong_cn = $_POST['soluong'];

    foreach($soluong_cn as $id => $sl)
    {

        // N?u như ngư?i dùng đ?t l?i s? lư?ng  = 0  ==> th? ta h?y luôn s?n ph?m đó ($id_sp) trong gi? hàng ($_SESSION['giohang'])
        if($sl == 0)
        {
            unset($_SESSION['giohang'][$id]);
        }
        // Nguoc l?i s? lư?ng sp ph?i là s? ta c?p nh?t l?i s? lư?ng gi? hàng

        else if($sl > 0 && is_numeric($sl))
        {
            $_SESSION['giohang'][$id] = $sl;
        }
        // Nguoc lai co the xuat thong bao so luong khong hop le (so luong = char)
        // refresh l?i gi? hàng
        header("Location: show_cart.php");
    }
}
?>
<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# ">
<head>
    <meta charset="utf-8" />
    <title>Bán Hàng</title>
    <link href="../assets/css/frameworks.css" rel="stylesheet"/>
    <link href="../assets/css/core.css" rel="stylesheet"/>
    <link href="../assets/css/home.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <h2 class="text-center">Các sản phẩm trong giỏ hàng của bạn</h2>
</head>
<body>
<script type="text/javascript">
    function xoaSP(){
        var conf = confirm("Bạn có thực sự muốn xóa?");
        return conf;
    }
</script><?php $cau_ =0?>
        <div class="container">
             <table id="cart" class="table table-hover table-condensed">
                  <thead>
                   <tr>
                        <th style="width:50%">Tên sản phẩm</th>
                        <th style="width:10%">Giá</th>
                        <th style="width:8%">Số lượng</th>
                        <th style="width:22%" class="text-center">Thành tiền</th>
                        <th style="width:10%"> </th>
                       </tr>
                  </thead>
                  <tbody>
                <?php require_once '../model/init.php';
                $total=0;
                $cau=0;
                foreach($giohang as $id =>$ls)
                {
                $sql="SELECT * FROM sanpham WHERE masp in ('$id')";
                $query=$db->query($sql);
                    $row=$db->lay_rows($query);?><tr>
            <script type="text/javascript">
                function tinhtien_<?php echo $cau_?>() {
                    var txtGia = document.getElementById("txtGia[<?php echo $cau_?>]").value;
                    var txtSl = document.getElementById("txtSl[<?php echo $cau_?>]").value;
                    var thanhtien_<?php echo $cau_?>=Number.parseInt(txtGia)*Number.parseInt(txtSl);
                    document.getElementById("txtThanhtien[<?php echo $cau_?>]").innerHTML=thanhtien_<?php echo $cau_?>;
                    <?php $cau_++;?>
                    return thanhtien_<?php echo $cau_-1?>.value;
                    total();
                }
            </script>
                <script type="text/javascript">
                    function total() {
                        tong = tinhtien_<?php echo $cau_?>() + tinhtien_<?php echo($cau_ - 1)?>();
                        document.getElementById("txtTong").innerHTML = tong;
                    }
                    </script>
               <td data-th="Product">
                    <div class="row">
                         <div class="col-sm-2 hidden-xs"><img src="<?php echo $row['hinhanh']?>" alt="<?php echo $row['tensp']?>" class="img-responsive" width="100">
                             </div>
                         <div class="col-sm-10">
                              <h4 class="nomargin"><?php echo $row['tensp']?></h4>
                              <p><?php echo $row['mota']?></p>
                             </div>
                        </div>
                   </td>
               <td data-th="Price" ><input type="text" class="form-control text-center" id="txtGia[<?php echo $cau?>]" readonly="readonly" value="<?php echo $row['gia']?>" /></td>
            <td data-th="Quantity"><input type="number" class="form-control text-center" id="txtSl[<?php echo $cau?>]" value="1" onchange="tinhtien_<?php echo $cau;?>();" />
                   </td>
            <?php $tong=$row['gia']*$ls?>
               <td data-th="Subtotal" id="txtThanhtien[<?php echo $cau?>]" class="text-center"><?php echo $tong?></td>
               <td class="actions" data-th="">
                      <a onclick="return xoaSP()" href="../controler/xoa1_sp.php?id=<?php echo $row['masp']?>" class="remove_item" title="Xóa sản phẩm này khỏi giỏ hàng của bạn"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                            </button></a>
                   </td>
              </tr>
        <?php $total=$total+$tong;?>
          </tbody><?php  $cau=$cau+1;}?><tfoot>
           <tr>
                <td><a href="../view/trangchu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td>
                <td colspan="2" class="hidden-xs"> </td>
                <td class="hidden-xs text-center"><strong>Tổng tiền: <td id="txtTong"><?php echo $total?></td></strong>
                    </td>
                <td><a href="" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </td>
               </tr>
          </tfoot>
         </table>
</div>
</body>
</html>