<?php
require_once '../modal/init.php';
if (isset($_GET['page1'])) {
    $i = $_GET['page'];
    $i=$i+10;
    $d=$d+10;
}
else if(isset($_GET['pagep1rev']))
{
    $i = $_GET['page1prev'];
    $i = $i - 10;
    $d=10;
}
else {
    $i = 0;
    $d=10;
}
$sql=$db->hienthisanpham($i,$d);
$query=$db->query($sql);
while($rows = $db->lay_rows($query)) {
    echo '<tr class="sanpham">
			<td>' . '<input type="checkbox" name="selector[]" value="' . $rows['masp'] . '" />' . '</td>
			<td>' . $rows['masp'] . '</td>
			<td>' . $rows['tensp'] . '</td>
			<td>' . $rows['gia'] . '</td>
			<td>' . $rows['hinhanh'] . '</td>
			<td><a href="?menu=sanpham_edit&masp='.$rows['masp'].'"><img src="../../assets/image/u37.png" /></a></td>
			</tr>';
}
?>