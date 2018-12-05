<?php include '../controler/hienthisanpham_theoten.php'?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BetaDesign &mdash; Product</title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" title="style" href="../assets/dest/css/style.css">
	<link rel="stylesheet" href="../assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="../assets/dest/css/huong-style.css">
</head>
<body>

	<div id="header">
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.php" id="logo"><img src="../assets/dest/images/logo-cake.png" width="70px" alt=""></a>
				</div>
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="../view/trangchu.php">Trang chủ</a></li>
						<li><a href="../view/trasua.php">Trà Sữa</a>
                        </li>
						<li><a href="../view/che.php">Chè</a>
                        </li>
						<li><a href="../view/banh.php">Bánh tráng</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.php">Trang chủ</a> / <span>Thực đơn</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-4">
							<img src="<?php echo $row['hinhanh']?>" alt="<?php echo $row['tensp']?>">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">Tên sản phẩm: <?php echo $row['tensp']?></p>
								<p class="single-item-price">
									<span class="beta-sales-price">Giá: <?php echo $row['gia']?> VNĐ</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>
                            <div class="single-item-desc">
                                <p><?php echo $row['mota']?></p>
                            </div>
							<div class="space20">&nbsp;</div>

							<p>Thêm Vào Giỏ Hàng</p>
							<div class="single-item-options">
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">

					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">5 sản phẩm mới nhất</h3>
						<div class="widget-body">
                            <?php include '../controler/top5sanpham.php'?>
						</div>
					</div> <!-- best sellers widget -->
			
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->

	<div id="footer">
		<?php include '../view/footer.php'?>
	</div> <!-- #footer -->
	<!-- include js files -->
	<script src="assets/dest/js/jquery.js"></script>
	<script src="assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="assets/dest/vendors/animo/Animo.js"></script>
	<script src="assets/dest/vendors/dug/dug.js"></script>
	<script src="assets/dest/js/scripts.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/dest/js/waypoints.min.js"></script>
	<script src="assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
