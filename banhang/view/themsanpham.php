<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../assets/dethi.css" type="text/css" media="screen" charset="utf-8">
    <title></title>

</head>
<body>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemdethi" id="contact" class="contact-form" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
    <table width="650" border="0"  cellpadding="0" cellspacing="0" background="../	assets/image/body.png" id="dethi_news">
        <tr>
            <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">THÊM SẢN PHẨM MỚI</td>
        </tr>
        <tr>
            <td height="39" align="center" class="tbltitle">Tên sản phẩm:</td>
            <td width="454"> <input size=25 type="text" name="ten" value="" autocomplete = "off"></td>
        </tr>
        <tr>
            <td align="center" class="tbltitle" for="fileSelect">Hình ảnh sản phẩm:</td>
            <td><input type="file" name="file" id="fileSelect"></td>
        </tr>
        <tr>
            <td height="39" align="center" class="tbltitle">Giá sản phẩm:</td>
            <td width="454"> <input size=25 type="text" name="gia" value="" autocomplete = "off"></td>
        </tr>
        <tr>
            <td height="39" align="center" class="tbltitle">Số lượng</td>
            <td width="454"> <input size=25 type="text" name="sl" value="" autocomplete = "off"></td>
        </tr>
        <tr>
            <td height="39" align="center" class="tbltitle">Mô tả sản phẩm</td>
            <td width="454"> <input size=25 type="text" name="mt" value="" autocomplete = "off"></td>
        </tr>
        <tr>
            <td height="39" align="center" class="tbltitle">Loại sản phẩm:</td>
            <td><select class="form-control" name="loai" id="chondotthi">
                <option value="1">Bánh Tráng</option>
                <option value="2">Trà Sữa</option>
                <option value="3">Chè</option>
            </select></td>
        </tr>
        <tr>
            <td colspan="2"align="center"  style="padding:10px 0px 10px 0px"><label>
                    <input type="submit" name="ok" id="ok" value="Thêm sản phẩm" />
                    <div class="a" <br style="color:red;"><?php include '../../gentelella-master/controler/taosanpham.php';?></div>
                </label>
            </td>
        </tr>
    </table>
</form>
</body>
</html>