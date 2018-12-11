<?php require_once '../model/init.php';
if (isset($_GET['page1'])) {
    $i = $_GET['page'];
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
$sql1=$db->hienthisanpham_trasua($i,$d);
$query1=$db->query($sql1);
while ($row=$db->lay_rows($query1))
{?>
    <div class="col-sm-3">
        <div class="single-item">
            <div class="single-item-header">
                <img data-src='<?php echo $row['hinhanh']?>' data-original='<?php echo $row['hinhanh']?>' data-lazy='<?php echo $row['hinhanh']?>' alt='<?php echo $row['tensp']?>' class='lazy img-responsive' src='<?php echo $row['hinhanh']?>'  />
            </div>
            <div class="single-item-body">
                <p class="single-item-title"><?php echo $row['tensp']?></p>
                <p class="single-item-price">
                    <span><?php echo $row['gia']?> VNĐ</span>
                </p>
            </div>
            <div class="single-item-caption">
                <a class="add-to-cart pull-left" href="../view/add.php?id=<?php echo $row['masp']?>" ><i class="fa fa-shopping-cart"></i></a>
                <a class="beta-btn primary" href="../view/product.php?masp=<?php echo $row['masp']?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?php } ?>