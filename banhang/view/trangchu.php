<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# ">
<head>
    <meta charset="utf-8" />   
    <title>Bán Hàng</title>
    <link href="../assets/css/frameworks.css" rel="stylesheet"/>
    <link href="../assets/css/core.css" rel="stylesheet"/>
    <link href="../assets/css/home.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<body>
<header class="clearfix header-cont newyear">
        <div class="navbar main-navbar clr-navbar">
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-main-navbar-collapse-1">
                <ul class="nav navbar-nav">
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
                <div style="float:right;">
                    <a href="" target="_blank"><img style="border-radius:2px;" src="../assets/image/banner-top.jpg" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-top clearfix">
        <div class="container" style="position:relative">
            <div class="logo header-top-1">
                <div class="navbar-brand">
                    <a href="/" style="color: #fff;">
                        <img class="logo img-responsive" src="../assets/image/logo.png">
                    </a>
                </div>
            </div>
            <div class="header-top-2">
                <marquee behavior="alternate"><marquee width="150">Đồ án môn học môn PHP: Xây Dựng Web bán hàng ẩm thực</marquee></marquee>
            </div>
        </div>
    </div>
</header>
<div class="home-body-container" ng-app="cookyHomeApp" ng-controller="homeController">
    <div class="cooky-featured-search">
        <div class="container">
            <div class="top-today-recipes">
                <div class="today-recipe">
                        <img src="../assets/image/banner_top_2.jpg" alt="Chọn đúng bột cho từng loại bánh là bí quyết giúp bạn luôn thành công dù chưa có kinh nghiệm làm bánh">
                    <div class="item-tips">
                        <div class="item-tip-2"><span class="fa fa-file-text-o"></span> Sản phẩm mới mỗi ngày </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%; position: absolute; top: 50px;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="recommend-cuisine-box row10">
           <?php include '../controler/hienthicacsanphammoinhat.php'?>
        </div>
    </div>
        <div class="wide-box wide-box-white home-top-box">
            <div class="container">
                <div class="headline">
                    <h2>
                            Bánh Ngọt-Bánh Tráng
                        <a href="../view/banh.php" target="_blank" class="view-more">xem thêm</a>
                        <span class="desc">
                        Mời bạn mua hàng
                    </span>
                </div>
                    </h2>
                <div class="home-class">
                    <div class="class-list">
                        <?php include '../controler/hienthibanhtrang.php';?>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="wide-box wide-box-white home-top-box">
    <div class="container">
        <div class="headline">
            <h2>
                Trà Sữa
                <a href="../view/trasua.php" target="_blank" class="view-more">xem thêm</a>
            </h2>
            <span class="desc">
                        Mời bạn mua hàng
                    </span>
        </div>
        <div class="home-class">
            <div class="class-list">
               <?php include '../controler/hienthitrasua.php'?>
            </div>
        </div>
    </div>
</div>
<div class="wide-box wide-box-white home-top-box">
    <div class="container">
        <div class="headline">
            <h2>
                    Chè
                <a href="../view/che.php" target="_blank" class="view-more">xem thêm</a>
            </h2>
            <span class="desc">
                        Mời bạn mua hàng
                    </span>
        </div>
        <div class="home-class">
            <div class="class-list">
                <?php include '../controler/hienthiche.php';?>
            </div>
        </div>
    </div>
</div>
    <div id="disableVBX"></div>
</div>
    <footer>
    <?php require_once 'footer.php'?>
    </footer>
</body>
</html>