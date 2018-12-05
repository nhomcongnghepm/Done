<html xmlns="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../../assets/style.css" media="screen" rel="stylesheet" type="text/css">
    <script src="../../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../../assets/js/facebox.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../../assets/hocsinh/css/sinhvien.css">
    <script type="text/javascript" src="../../assets/hocsinh/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../../assets/hocsinh/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#resultTable thead tr th:first input:checkbox").click(function() {
                var checkedStatus = this.checked;
                $("#resultTable tbody tr td:first-child input:checkbox").each(function() {
                    this.checked = checkedStatus;
                });
            });

            $("#resultTable").selectAllRows();

            $("#resultTable").selectAllRows({ column: 'last' });

            $("#resultTable").selectAllRows({
                column: '2',
                selectTip: 'Select All Students',
                unselectTip: 'Un-Select All Students'
            })
                .css("border-width", "10px");
        });
    </script>
</head><body>
<div style="margin:20px 70px 10px; font-size:14px;">
    <span style="font-size: x-small; font-family: Tahoma; "><b>Admin<img src="../../assets/image/bl3.gif" border="0"> QUẢN LÝ SẢN PHẨM</b></span></div>
<hr size="1" color="#cadadd" style="margin:15px auto;">
<div style="margin:20px 70px auto;">
    <a href="?menu=sanpham_news"><img src="../../assets/image/add_new.gif" align="absmiddle" border="0"></a> <a href="?menu=sanpham_news">SẢN PHẨM MỚI</a>
</div>
<div class="wrapper">
    <form action="?menu=sanpham_delete" method="post">
        <table cellpadding="1" cellspacing="1" id="resultTable">
            <thead>
            <tr>
                <th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onclick="CheckALL(<?=$counts?>);"></th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Chỉnh sửa</th>
            </tr>
            </thead>
            <tbody>
            <?php require_once '../../gentelella-master/controler/hienthisanpham.php'; ?>
            </tbody>
        </table>
        <input type="submit" name="bnm" value="Delete all" style="margin:3px 50px auto;">
    </form>
    <div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)">
        <ul class="nav  pager">
            <li class="previous">
                <a href="?menu=quanlysanpham&page1rev=<?php echo $i?>" style=" background-color:#ffcccc"="">←Trước</a>
            </li>
            <li class="next"><a href="?menu=quanlysanpham&page1=<?php echo $i?>" style=" background-color:#ffcccc"="">Sau→</a></li>
        </ul>
    </div>
</div></body></html>