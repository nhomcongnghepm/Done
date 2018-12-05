<?php
$sql6=$db->demsanpham_che();
$query6=$db->query($sql6);
$rows3=$db->lay_rows($query6);
$dem3=$rows3['dem'];
$sql7=$db->hienthisanpham_che($dem3-3,$dem3);
$query7=$db->query($sql7);
while ($row4=$db->lay_rows($query7))
{
    ?>
    <div class="item">
        <div class="item-inner">
            <div class="item-photo">
                <a href="../view/product.php?masp=<?php echo $row4['masp']?>" target="_self">
                    <img data-src='<?php echo $row4['hinhanh']?>' data-original='<?php echo $row4['hinhanh']?>' data-lazy='<?php echo $row4['hinhanh']?>' alt='<?php echo $row4['tensp']?>' class='lazy img-responsive' src='<?php echo $row4['hinhanh']?>'  />
                </a>
            </div>
            <div class="item-info">
                <div class="item-header">
                    <div class="title">
                        <a href="../view/product.php?masp=<?php echo $row4['masp']?>" target="_self"><h3><?php echo $row4['tensp']?></h3></a>
                    </div>
                </div>
                <div class="event-calendar">
                    <div class="location">Giá</div>
                    <div class="date"><span class="time"><?php echo $row4['gia']?> VNĐ</span></div>
                </div>
            </div>
            <div class="register">
                <a class="btn btn-orange" href="" target="_self">
                    <i class="fa fa-hand-o-right"></i>
                    Mua Hàng
                </a>
            </div>
        </div>
    </div>
<?php }?>