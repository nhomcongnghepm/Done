<div class="beta-sales beta-lists">
    <?php require_once '../model/init.php';
    $sql1=$db->demsanpham();
    $query1=$db->query($sql1);
    $rows1=$db->lay_rows($query1);
    $dem=$rows1['dem'];
    $sql2=$db->hienthisanpham($dem-5,$dem);
    $query2=$db->query($sql2);
    while ($row1=$db->lay_rows($query2))
    {
        ?>
        <div class="media beta-sales-item">
            <a class="pull-left" href="product.php"><img src="<?php echo $row1['hinhanh']?>" alt="<?php echo $row1['tensp']?>"></a>
            <div class="media-body">
                <p class="single-item-title"><?php echo $row1['tensp']?>
                    <br><span class="beta-sales-price">Giá: <?php echo $row1['gia']?> VNĐ</span>
            </div>
        </div>
    <?php }?>
</div>