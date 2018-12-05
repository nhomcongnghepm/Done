<?php include '../controler/dembanhtrang.php'?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>phố cổ </title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="../assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="../assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="../assets/dest/css/style.css">
	<link rel="stylesheet" href="../assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="../assets/dest/css/huong-style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<div id="header">
		<div class="header-body">
		<div class="header-bottom color-div">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
                        <li class="">
                            <a href="../view/trangchu.php">Trang Chủ</a>
                        </li>
                        <li class="">
                            <a href="../view/trasua.php">Trà Sữa-Sinh Tố</a>
                        </li>
                        <li class="">
                            <a href="../view/che.php">Chè</a>
                        </li>
                        <li class="">
                            <a href="../view/banh.php">Bánh</a>
                        </li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Các sản phẩm bánh</h4>
							<div class="beta-products-details">
								<p class="pull-left">Hiện đang có <?php echo $dem?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>
                            <div class="row">
				            <?php include '../controler/chitietbanhtrang.php';?>
							</div>
						</div>
						<div class="space50">&nbsp;</div>
						</div>
					</div>
                <div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)">
                    <ul class="nav  pager">
                        <li class="previous">
                            <a href="?page1rev=<?php echo $i?>" style=" background-color:#ffcccc"="">←Trước</a>
                        </li>
                        <li class="next"><a href="?page1=&lt;?php echo $i?&gt;" style=" background-color:#ffcccc"="">Sau→</a></li>
                    </ul>
                </div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<?php include '../view/footer.php';?>
	</div>
</body>
</html>
