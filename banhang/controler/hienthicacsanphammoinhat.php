<?php require_once '../model/init.php';
$sql=$db->demsanpham();
$query=$db->query($sql);
$rows=$db->lay_rows($query);
$dem=$rows['dem'];
$sql1=$db->hienthisanpham($dem-16,$dem);
$query1=$db->query($sql1);
while ($row=$db->lay_rows($query1))
{
    ?>
    <div class="item">
        <a target="_blank" href="../view/product.php?masp=<?php echo $row['masp'];?>">
            <img class="ico" src="<?php echo $row['hinhanh'];?>" />
            <span><?php echo $row['tensp']?></span>
        </a>
    </div>
<?php }?>