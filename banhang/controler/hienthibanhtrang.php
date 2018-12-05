<?php
$sql3=$db->demsanpham_banh();
$query3=$db->query($sql3);
$rows2=$db->lay_rows($query3);
$dem1=$rows2['dem'];
$sql2=$db->hienthisanpham_banh($dem1-3,$dem1);
$query2=$db->query($sql2);
while ($row1=$db->lay_rows($query2))
{
    ?>
    <div class="item">
        <div class="item-inner">
            <div class="item-photo">
                <a href="../view/product.php?masp=<?php echo $row1['masp']?>" target="_self">
                    <img data-src='<?php echo $row1['hinhanh']?>' data-original='<?php echo $row1['hinhanh']?>' data-lazy='<?php echo $row1['hinhanh']?>' alt='<?php echo $row1['tensp']?>' class='lazy img-responsive' src='<?php echo $row1['hinhanh']?>'  />
                </a>
            </div>
            <div class="item-info">
                <div class="item-header">
                    <div class="title">
                        <a href="../view/product.php?masp=<?php echo $row1['masp']?>" target="_self"><h3><?php echo $row1['tensp']?></h3></a>
                    </div>
                </div>
                <div class="event-calendar">
                    <div class="location">Giá</div>
                    <div class="date"><span class="time"><?php echo $row1['gia']?> VNĐ</span></div>
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