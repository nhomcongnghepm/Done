<?php
$sql4=$db->demsanpham_trasua();
$query4=$db->query($sql4);
$rows2=$db->lay_rows($query4);
$dem2=$rows2['dem'];
$sql5=$db->hienthisanpham_trasua($dem2-3,$dem2);
$query5=$db->query($sql5);
while ($row3=$db->lay_rows($query5))
{
    ?>
    <div class="item">
        <div class="item-inner">
            <div class="item-photo">
                <a href="../view/product.php?masp=<?php echo $row3['masp']?>" target="_self">
                    <img data-src='<?php echo $row3['hinhanh']?>' data-original='<?php echo $row3['hinhanh']?>' data-lazy='<?php echo $row3['hinhanh']?>' alt='<?php echo $row3['tensp']?>' class='lazy img-responsive' src='<?php echo $row3['hinhanh']?>'  />
                </a>
            </div>
            <div class="item-info">
                <div class="item-header">
                    <div class="title">
                        <a href="../view/product.php?masp=<?php echo $row3['masp']?>" target="_self"><h3><?php echo $row3['tensp']?></h3></a>
                    </div>
                </div>
                <div class="event-calendar">
                    <div class="location">Giá</div>
                    <div class="date"><span class="time"><?php echo $row3['gia']?> VNĐ</span></div>
                </div>
            </div>
            <div class="register">
                <a class="btn btn-orange" href="../view/add.php?id=<?php echo $row3['masp']?>" target="_self">
                    <i class="fa fa-hand-o-right"></i>
                    Mua Hàng
                </a>
            </div>
        </div>
    </div>
<?php }?>