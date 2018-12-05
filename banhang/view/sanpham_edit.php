<link rel="stylesheet" href="../../assets/style.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="../../assets/chinhsuadethi.css" type="text/css" media="screen" charset="utf-8">
<div style="margin:20px 70px 10px; font-size:14px;">
    <font size="2" face="Tahoma"><b><a href="?menu=dethi_list">Đề thi</a><img src="../../assets/image/bl3.gif" border="0" /> Sửa thông tin đề thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=sanpham_edit" method="post" class="dethi_edit">
    <?php include ('../../gentelella-master/controler/chinhsuasanpham.php')?>
    <table width="600" border="0"  cellpadding="0" cellspacing="0" background="../../assets/image/body.png">
        <tr>
            <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">Sửa thông tin sản phẩm</td>
        </tr>
        <tr>
            <td width="20%"  align="right">Mã Sản Phẩm</td>
            <td width="80%"> <input size=30 type="text" name="idmasp" readonly="readonly" style="background-color:#CCC" value="<?php echo $masp?>"/></td>
        </tr>
        <tr>
            <td width="20%"  align="right">Tên Sản Phẩm</td>
            <td width="80%"> <input size=30 type="text" name="ten"  value="<?php echo $tensp?>"/></td>
        </tr>
        <tr>
            <td width="20%"  align="right">Giá Sản Phẩm</td>
            <td width="80%"> <input size=30 type="text" name="gia"  value="<?php echo $gia?>"/></td>
        </tr>
        <tr>
            <td align="center" class="tbltitle" for="fileSelect">Hình ảnh sản phẩm:</td>
            <td><input type="file" name="file1" id="fileSelect"></td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
                    <input type="submit" name="edit" id="edit" value="Cập nhật" />
                </label></td>
        </tr>
        <div class="a" <br style="color:red;"><?php require_once '../../gentelella-master/controler/sanpham_saveedit.php';?></div>
        <?php echo $file_name;?>
    </table>
</form>