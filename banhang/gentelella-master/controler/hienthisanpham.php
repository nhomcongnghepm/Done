<?php
require_once '../modal/init.php';
$sql=$db->demsanpham();
$query=$db->query($sql);
$rows=$db->lay_rows($query);
$dem=$rows['dem'];
if (isset($_GET['page1'])) {
    $i = $_GET['page1'];
        $i = $i + 12;
        $d = $d + 12;
}
else if(isset($_GET['page1rev']))
{
    $i = $_GET['page1rev'];
    if($i<=0)
    {
        $i = 0;
        $d=12;
    }
    else {
        $i = $i - 12;
        $d = 12;
    }
}
else {
    $i = 0;
    $d=12;
}
$sql=$db->hienthisanpham($i,$d);
$query=$db->query($sql);
while($rows = $db->lay_rows($query)) {
    echo '<tr class="sanpham">
			<td>' . '<input type="checkbox" name="selector[]" value="' . $rows['masp'] . '" />' . '</td>
			<td>' . $rows['masp'] . '</td>
			<td>' . $rows['tensp'] . '</td>
			<td>' . $rows['gia'] . '</td>
			<td>' . $rows['soluong'] . '</td>
			<td>' . $rows['hinhanh'] . '</td>
			<td><a href="?menu=sanpham_edit&masp='.$rows['masp'].'"><img src="../../assets/image/u37.png" /></a></td>
			</tr>';
}
?>