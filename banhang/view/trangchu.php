
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
    <div class="root-nav">
        <div class="container">
            <ul class="list-inline">
                <li class="active"><a href="/">Ẩm thực hằng ngày</a></li>
                <li class=""><a href="/dia-diem"><span class="fa fa-user-o"></span> Liên hệ</a></li>
                <li class=""><a href="/san-pham"><span class="fa fa-shopping-basket"></span> Sản phẩm</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar main-navbar clr-navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-main-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-main-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/"><span class="glyphicon glyphicon-home"></span></a>
                    </li>
                    <li class="">
                        <a href="/cong-dong">Giới thiệu</a>
                    </li>
                    <li class="">
                        <a href="/blog"></a>
                    </li>
                    <li class="">
                        <a href="/bo-suu-tap">Trà Sữa</a>
                    </li>
                    <li class="">
                        <a href="/video">Sinh Tố</a>
                    </li>
                    <li class="">
                        <a href="/thanh-vien">Chè</a>
                    </li>
                    <li class="">
                        <a href="/lop-hoc-nau-an"><span class="fa fa-calendar"></span> Latte</a>
                    </li>
                    <li class="">
                        <a href="/contest">Bánh ngọt</a>
                    </li>
                    <li class="">
                        <a href="/contest">Bánh tráng</a>
                    </li>
                    <li class="">
                        <a href="/contest">Sandwich</a>
                    </li>
                    <li class="">
                        <a href="/contest">Coffee</a>
                    </li>
                    <li class="">
                        <a href="/contest">Topping</a>
                    </li>
                </ul>
                <div style="float:right;">
                    <a href="/hokkaido" target="_blank"><img style="border-radius:2px;" src="../assets/image/banner-top.jpg" /></a>
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
                <div class="aligncenter-sm" id="cookySearchBox">
                    <div ng-controller="SearchSuggestionController">
                        <form id="searchform" class="form-horizontal" data-behavior="url" data-source="[data-behavior=search_field]" method="get">
                            <div class="qsearch-box">
                                <input type="text" id="searchinput" autocomplete="off" name="url" data-behavior="search_field" placeholder="tìm kiếm" ng-focus="keywordPress(event)" ng-keyup="keywordPress(event)" ng-model="keyword" />
                                <button type="submit" class="glyphicon glyphicon-search ico-search"></button>
                            </div>
                            <div style="display: none" ng-cloak class="search-suggest-panel">
                                <ul class="group suggest-recipe">
                                    <li>
                                        <div class="left">Từ khóa</div>
                                        <ul class="items">
                                            <li>
                                                <div ng-click="goSearchResults()">
                                                    <span class="textname">{{keyword}}</span>
                                                    <a ng-href="{{viewAllLink()}}" class="detail-link">Xem tất cả</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="left">Công thức</div>
                                        <ul class="items">
                                            <li ng-repeat="item in items">
                                                <a href="" ng-href="{{item.DetailUrl}}" title="{{item.Name}}">
                                                    <div>
                                                        <img ng-src="{{item.Img}}" title="{{item.Name}}" alt="{{item.Name}}" />
                                                        <span class="textname title-suggest">{{item.Name}}</span>
                                                        <br />
                                                        <span class="info">{{item.TotalTime}} phút</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="group trend" style="display: none">
                                    <li>
                                        <div class="left" style="color:#f36f36;">Xu hướng tìm kiếm</div>
                                        <ul class="items trend-items ">
                                            <li ng-repeat="item in itemsTrend">
                                                <a href="" ng-href="{{item.Slug}}" title="{{item.Name}}">
                                                    <div>
                                                        <span class="textname title-suggest">{{item.Name}}</span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="home-body-container" ng-app="cookyHomeApp" ng-controller="homeController">
    <div class="cooky-featured-search">
        <div class="container">
            <div class="top-today-recipes">
                <div class="today-recipe">
                    <a target="_blank" class="item" href="">
                        <img src="../assets/image/banner_top_2.jpg" alt="Chọn đúng bột cho từng loại bánh là bí quyết giúp bạn luôn thành công dù chưa có kinh nghiệm làm bánh">
                    </a>
                    <div class="item-tips">
                        <div class="item-tip-2"><span class="fa fa-file-text-o"></span> Bột mì Uniflour </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%; position: absolute; top: 50px;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="recommend-cuisine-box row10">
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
                <a target="_blank" href="">
                    <img class="ico" src="<?php echo $row['hinhanh'];?>" />
                    <span><?php echo $row['tensp']?></span>
                </a>
            </div>
            <?php }?>
        </div>
    </div>
        <div class="wide-box wide-box-white home-top-box">
            <div class="container">
                <div class="headline">
                    <h2>
                            Bánh Ngọt-Bánh Tráng
                        <a href="" target="_blank" class="view-more">xem thêm</a>
                    </h2>
                    <span class="desc">
                        Mời bạn mua hàng
                    </span>
                </div>
                <div class="home-class">
                    <div class="class-list">
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
                                        <a href="" target="_self">
                                            <img data-src='<?php echo $row1['hinhanh']?>' data-original='<?php echo $row1['hinhanh']?>' data-lazy='<?php echo $row1['hinhanh']?>' alt='<?php echo $row1['tensp']?>' class='lazy img-responsive' src='<?php echo $row1['hinhanh']?>'  />
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-header">
                                            <div class="title">
                                                <a href="" target="_self"><h3><?php echo $row1['tensp']?></h3></a>
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
                <a href="" target="_blank" class="view-more">xem thêm</a>
            </h2>
            <span class="desc">
                        Mời bạn mua hàng
                    </span>
        </div>
        <div class="home-class">
            <div class="class-list">
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
                                <a href="" target="_self">
                                    <img data-src='<?php echo $row3['hinhanh']?>' data-original='<?php echo $row3['hinhanh']?>' data-lazy='<?php echo $row3['hinhanh']?>' alt='<?php echo $row3['tensp']?>' class='lazy img-responsive' src='<?php echo $row3['hinhanh']?>'  />
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="item-header">
                                    <div class="title">
                                        <a href="" target="_self"><h3><?php echo $row3['tensp']?></h3></a>
                                    </div>
                                </div>
                                <div class="event-calendar">
                                    <div class="location">Giá</div>
                                    <div class="date"><span class="time"><?php echo $row3['gia']?> VNĐ</span></div>
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
            </div>
        </div>
    </div>
</div>
<div class="wide-box wide-box-white home-top-box">
    <div class="container">
        <div class="headline">
            <h2>
                    Chề
                <a href="" target="_blank" class="view-more">xem thêm</a>
            </h2>
            <span class="desc">
                        Mời bạn mua hàng
                    </span>
        </div>
        <div class="home-class">
            <div class="class-list">
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
                                <a href="" target="_self">
                                    <img data-src='<?php echo $row4['hinhanh']?>' data-original='<?php echo $row4['hinhanh']?>' data-lazy='<?php echo $row4['hinhanh']?>' alt='<?php echo $row4['tensp']?>' class='lazy img-responsive' src='<?php echo $row4['hinhanh']?>'  />
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="item-header">
                                    <div class="title">
                                        <a href="" target="_self"><h3><?php echo $row4['tensp']?></h3></a>
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