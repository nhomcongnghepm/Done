
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
                                        <a href="/lop-hoc-nau-an/lop-banh-mousse-day-tay-71" target="_self">
                                            <img data-src='<?php echo $row1['hinhanh']?>' data-original='<?php echo $row1['hinhanh']?>' data-lazy='<?php echo $row1['hinhanh']?>' alt='<?php echo $row1['tensp']?>' class='lazy img-responsive' src='<?php echo $row1['hinhanh']?>'  />
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-header">
                                            <div class="title">
                                                <a href="/lop-hoc-nau-an/lop-banh-mousse-day-tay-71" target="_self"><h3><?php echo $row1['tensp']?></h3></a>
                                            </div>
                                        </div>
                                        <div class="event-calendar">
                                            <div class="location">Giá</div>
                                            <div class="date"><span class="time"><?php echo $row1['gia']?> VNĐ</span></div>
                                        </div>
                                    </div>
                                    <div class="register">
                                        <a class="btn btn-orange" href="/lop-hoc-nau-an/lop-banh-mousse-day-tay-71" target="_self">
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
                                <a href="/lop-hoc-nau-an/lop-banh-mousse-day-tay-71" target="_self">
                                    <img data-src='<?php echo $row3['hinhanh']?>' data-original='<?php echo $row3['hinhanh']?>' data-lazy='<?php echo $row3['hinhanh']?>' alt='<?php echo $row3['tensp']?>' class='lazy img-responsive' src='<?php echo $row3['hinhanh']?>'  />
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="item-header">
                                    <div class="title">
                                        <a href="/lop-hoc-nau-an/lop-banh-mousse-day-tay-71" target="_self"><h3><?php echo $row3['tensp']?></h3></a>
                                    </div>
                                </div>
                                <div class="event-calendar">
                                    <div class="location">Giá</div>
                                    <div class="date"><span class="time"><?php echo $row3['gia']?> VNĐ</span></div>
                                </div>
                            </div>
                            <div class="register">
                                <a class="btn btn-orange" href="/lop-hoc-nau-an/lop-banh-mousse-day-tay-71" target="_self">
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

    <style>
    #simplemodal-container a.modalCloseImg{opacity:0.4; right:10px;}
    .tab-header { text-transform:uppercase;color:#b2b2b2 }
    .tab-header.active { color:#000 !important; font-weight:bold; }
    .tab-header:last-child { margin-left:20px; }
</style>
<div id="login-popup-form">
    <div id="login-popup" class="login-popup login-verticle-box" style="margin: 0;max-width: 420px;padding: 0px;overflow: auto;width: 100%;display:none;">
        <div class="login-form-container" style="width: 100%; padding: 40px; height: 100%;">
            <div class="callback-msg" style="display:none" data-bind="visible: mergeMessage().length>0">
                <span data-bind="text: mergeMessage"></span>
            </div>
            <div class="form-group login-row text-center center" style="padding: 0px 0 15px 0;font-size: 18px;">
                <a href="javascript:void(0);" title="Đăng nhập" data-bind="click: function(){ toggleSignUp(false); },  css: { 'active': !isSignUp() }" class="tab-header">Đăng nhập</a>
                <a href="javascript:void(0);" title="Đăng ký thành viên" data-bind="click: function(){ toggleSignUp(true); },  css: { 'active': isSignUp() }" class="tab-header">Đăng ký</a>
            </div>
            <div class="register-form" style="padding:0;" data-bind="visible: !isSignUp()">
                <div class="register-social-wrapper login-social-wrapper">
                    <div class="login-social">
                        <div class="social-icon">
                            <ul class="list-unstyled">
                                <li class="fb wide">
                                    <a class="social-login" provider="1" href="javascript:void(0);" onClick="dataLayer.push({&#39;event&#39;: &#39;register&#39;});;">
                                        <div class="icon-btn">
                                            <span class="fa fa-facebook-f"></span>
                                        </div>
                                        <div class="text-btn">Đăng nhập với Facebook</div>
                                    </a>
                                </li>
                                <li class="gl wide">
                                    <a class="social-login" provider="2" href="javascript:void(0);" onClick="dataLayer.push({&#39;event&#39;: &#39;register&#39;});;">
                                        <div class="icon-btn">
                                            <img class="google-ico" src="/Content/img/icons/google-iconx64.png">
                                        </div>
                                        <div class="text-btn">Đăng nhập với Google</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="opt-label">
                    HOẶC
                    <span class="desc">Đăng nhập với tài khoản Email</span>
                </div>
                <div class="login-form-container" data-bind="with: $root.loginModel">
<form action="/dang-nhap" id="__AjaxAntiForgeryLoginForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="IjpFHJXrDlT54I9eyTdcH0xX9dv-S7EfbfupoV1Yq0Of_CToO05pvhuv86Tw00S-xo9NWGJEKJ_M941tijiHVu0u6gf3sUnaQuR3goVRkAE1" />                        <div class="login-inputs">
                            <div class="login-row">
                                <input class="form-control" autocomplete="current-username" data-bind="value: email" type="text" name="Email" placeholder="Tài khoản hoặc Email" />
                            </div>
                            <div class="login-row">
                                <input class="form-control" style="width:100%" autocomplete="current-password" data-bind="value: password, valueUpdate: 'afterkeydown', event: {keypress: passwordPress}" type="password" name="Password" placeholder="Mật khẩu" />
                            </div>
                        </div>
                        <div class="login-row login-remember" style="display:none; margin: 0 0 20px 0;">
                            <input type="checkbox" name="RememberMe" data-bind="checked: remember" style="float:left;margin: 2px 0;" checked />
                            <span style="font-size: 12px;margin-top: 0; display: block; float: left; margin-left: 4px;text-transform:uppercase;color:#b2b2b2;"> Lưu đăng nhập</span>
                        </div>
                        <button type="button" style="width:100%;border-radius: 30px;height: 50px; text-transform:uppercase; font-size: 16px;background:#c70808; background-image: linear-gradient(-90deg, #f54f7c 0%, #f3413b 100%);border:0;" data-bind="enable: isvalid, click: submit" class="btn btn-sm btn-danger">
                            <span class="fa fa-spin fa-spinner" data-bind="visible: submitting"></span>&nbsp;<span>Đăng nhập</span>
                        </button>
</form>                </div>
                <div class="opt-links">
                    <ul class="list-inline">
                        <li><a class="text-gray" href="javascript:void(0);" data-bind="click: function(){ toggleSignUp(true); }">Đăng ký tài khoản</a></li>
                        <li><span class="text-gray">|</span></li>
                        <li><a class="text-gray" href="/quen-mat-khau">Quên mật khẩu</a></li>
                    </ul>
                </div>
                <div class="tips">
                    Không kích hoạt được tài khoản? gửi phản hồi <a class="highlight" href="/gop-y">tại đây</a>
                </div>
            </div>
            <div class="register-form" style="padding:0;" data-bind="visible: isSignUp()">
                <div class="register-social-wrapper login-social-wrapper">
                    <div class="login-social">
                        <div class="social-icon">
                            <ul class="list-unstyled">
                                <li class="fb wide">
                                    <a class="social-login" provider="1" href="javascript:void(0);" onClick="dataLayer.push({&#39;event&#39;: &#39;register&#39;});;">
                                        <div class="icon-btn">
                                            <span class="fa fa-facebook-f"></span>
                                        </div>
                                        <div class="text-btn">Đăng nhập với Facebook</div>
                                    </a>
                                </li>
                                <li class="gl wide">
                                    <a class="social-login" provider="2" href="javascript:void(0);" onClick="dataLayer.push({&#39;event&#39;: &#39;register&#39;});;">
                                        <div class="icon-btn">
                                            <img class="google-ico" src="/Content/img/icons/google-iconx64.png">
                                        </div>
                                        <div class="text-btn">Đăng nhập với Google</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="opt-label">
                    HOẶC
                    <span class="desc">Đăng ký với tài khoản Email</span>
                </div>
                <div class="login-form-container" data-bind="with: $root.registerModel">
<form action="/dang-ky" id="__AjaxAntiForgeryRegisterForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="qP1upC3V7bjEDWR-LIHCu6J-QhC0y0v9z8qgHQ-6UD365JjwD-iqJ-VPv7D38r8L1GYzVdg_m-URxAx837-Eqsya9bMq0-dy_dbAu11ArJ81" />                        <div class="login-inputs">
                            <div class="login-row" data-bind="with: $data.firstName">
                                <div>
                                    <div class="register_bg">
                                        <input class="form-control" autocomplete="off" data-bind="value: text, event:{blur: $parent.firstNameValidate}" type="text" name="Email" placeholder="T&#234;n" />
                                    </div>
                                </div>
                                <div id="firstNameValid">
                                    <div data-bind="visible: !isfirst()">
                                        <img data-bind="visible: isvalid, attr:{ 'original-title': msg}" class="registerStatus" src="/style/images/icons/correct-icon.png" />
                                        <img data-bind="visible: !isvalid(),attr:{ 'original-title': msg}" class="registerStatus" src="/style/images/icons/incorrect-icon.png" />
                                    </div>
                                </div>
                            </div>
                            <div class="login-row register-row" data-bind="with: $data.email">
                                <div>
                                    <div class="register_bg">
                                        <input class="form-control" id="__ajax_register_email" autocomplete="off" data-bind="value: text, event:{blur: $parent.emailValidate}" type="text" name="Email" placeholder="Email" />
                                    </div>
                                    <img data-bind="visible: $parent.isValidatingEmail" src="/Style/images/icons/small-loading.gif" />
                                </div>
                                <div id='emailValid'>
                                    <div data-bind="visible: !isfirst()">
                                        <img data-bind="visible: isvalid, attr:{ 'original-title': msg}" class="registerStatus" src="/style/images/icons/correct-icon.png" />
                                        <img data-bind="visible: !isvalid(),attr:{ 'original-title': msg}" class="registerStatus" src="/style/images/icons/incorrect-icon.png" />
                                    </div>
                                </div>
                            </div>
                            <div class="login-row register-row" data-bind="with: $data.password">
                                <div class="register_bg">
                                    <input class="form-control no-space" id="__ajax_register_pass" style="width:100%" autocomplete="current-password" data-bind="value: text, event: {blur: $parent.passwordValidate}" type="password" name="Password" placeholder="Mật khẩu" />
                                </div>
                                <div id="passwordValid">
                                    <div data-bind="visible: !isfirst()">
                                        <img data-bind="visible: isvalid, attr:{ 'original-title': msg}" class="registerStatus" src="/style/images/icons/correct-icon.png" />
                                        <img data-bind="visible: !isvalid(),attr:{ 'original-title': msg}" class="registerStatus" src="/style/images/icons/incorrect-icon.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="register-row">
                            <button  onclick="dataLayer.push({ 'event': 'register' });;" class="btn btn-danger registerbutton" style="width:100%;border-radius: 30px;height: 50px; text-transform:uppercase; font-size: 16px;background:#c70808; background-image: linear-gradient(-90deg, #f54f7c 0%, #f3413b 100%);border:0;" type="button" data-bind="enable: isvalid, click: submit">
                                Đăng ký thành viên
                            </button>
                           
                        </div>
</form>                </div>
                <div class="opt-links">
                    <ul class="list-inline">
                        <li><a class="text-gray" href="javascript:void(0);" data-bind="click: function(){ toggleSignUp(false); }">Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="tips">
                    Không kích hoạt được tài khoản? gửi phản hồi <a class="highlight" href="/gop-y">tại đây</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="cooky-personal-setting-dialog" style="display:none" cooky-personal-setting-control class="personal-setting-modal fadeIn animated" title="Thiết lập tùy chọn cá nhân">
    <div class="clearfix">
        <div class="welcome-box" ng-show="currentStep==0">
            <div class="wel-content">
                <div class="wel-capt">
                    <div class="wel-head">Chào mừng bạn đến với Cooky.vn</div>
                    <div class="wel-user">
                        <div style="width:78px;height:78px;border-radius: 50%;background:#ddd;overflow:hidden;display:inline-block;"><img style="margin: -1px;" class="img-responsive" ng-src="{{user.AvatarUrl}}" /></div>
                    </div>
                    <div class="opt lead">
                        <button class="btn btn-check" ng-click="isChef()"><span class="fa" ng-class="{ 'fa-check-square success': userSetting.isChefChecked, 'fa-square': !userSetting.isChefChecked }"></span><span style="padding-left:10px;" class="text-black">Tôi là một đầu bếp</span></button>
                        <span class="desc"><span class="ico"></span>Nếu bạn là đầu bếp đừng bỏ qua tùy chọn này. Chúng tôi sẽ gợi ý cho bạn những nội dung và sự kiện phù hợp hơn</span>
                    </div>
                    <div class="opts">
                        <div class="row10">
                            <button class="tasty sour" ng-class="{ 'checked': isTasteChecked('ts9') }" ng-click="selectTaste('ts9')">
                                <i class="ticked fa fa-check-circle" ng-show="isTasteChecked('ts9')"></i>
                                Chua
                            </button>
                            <button class="tasty spicy" ng-class="{ 'checked': isTasteChecked('ts7') }" ng-click="selectTaste('ts7')">
                                <i class="ticked fa fa-check-circle" ng-show="isTasteChecked('ts7')"></i>
                                Cay
                            </button>
                            <button class="tasty salty" ng-class="{ 'checked': isTasteChecked('ts6') }" ng-click="selectTaste('ts6')">
                                <i class="ticked fa fa-check-circle" ng-show="isTasteChecked('ts6')"></i>
                                Mặn
                            </button>
                            <button class="tasty sweety" ng-class="{ 'checked': isTasteChecked('ts8') }" ng-click="selectTaste('ts8')">
                                <i class="ticked fa fa-check-circle" ng-show="isTasteChecked('ts8')"></i>
                                Ngọt
                            </button>
                            <button class="tasty light" ng-class="{ 'checked': isTasteChecked('ts5') }" ng-click="selectTaste('ts5')">
                                <i class="ticked fa fa-check-circle" ng-show="isTasteChecked('ts5')"></i>
                                Nhạt
                            </button>
                            <button class="tasty bitter" ng-class="{ 'checked': isTasteChecked('ts10') }" ng-click="selectTaste('ts10')">
                                <i class="ticked fa fa-check-circle" ng-show="isTasteChecked('ts10')"></i>
                                Đắng
                            </button>
                            <button class="tasty fatty" ng-class="{ 'checked': isTasteChecked('ts11') }" ng-click="selectTaste('ts11')">
                                <i class="ticked fa fa-check-circle" ng-show="isTasteChecked('ts11')"></i>
                                Béo
                            </button>
                        </div>
                        <div class="opts-desc">
                            Hoàn tất những tùy chọn dưới đây để Cooky tối ưu những thông tin dành riêng cho bạn.
                        </div>
                        <div class="head">
                            <i class="ico ico-inline ico-18 ico-cooky-region"></i> Bạn thích món ăn theo khẩu vị như thế nào?
                            <span class="desc">Bạn sẽ được gợi ý món ăn phù hợp với khẩu vị của mình</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="btn-acts">
                    <div class="btn-type">
                        <button class="btn btn-act" ng-click="skipSubmit()">
                            <span>Bỏ qua</span>
                            <span class="desc">
                                Tùy chỉnh sau tại quản lý tài khoản
                            </span>
                        </button>
                    </div>
                    <div class="btn-type">
                        <button class="btn btn-act primary" ng-click="nextStep()">
                            <span>Tiếp tục</span>
                            <span class="desc">
                                Chọn khẩu vị quan tâm
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-box" ng-show="currentStep==1">
            <div class="header">
                <a href="javascript:void(0);" ng-click="preStep()" title="Previous step"><span style="position: absolute; left: 20px; top: 20px; font-size: 24px; color: #e5e5e5;" class="fa fa-arrow-circle-left"></span></a>
                Tối ưu lựa chọn công thức
            </div>
            <div class="wel-content">
                <div class="opts-desc">
                    Chúng tôi gợi ý cho bạn những danh mục công thức bên dưới. Hãy chọn tối đa 5 danh mục mà bạn quan tâm nhất.
                </div>
                <div class="recommend-cuisine-box row10">
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('c5') }" ng-click="selectCat('c5')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g2/19711/s320/recipe19711-636283930080207292.jpg">
                            <img src="/Content/img/icons/food/egg.64.png" class="ico">
                            <span>Ăn sáng</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('p7') }" ng-click="selectCat('p7')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g3/20259/s320/recipe20259-636322627940948264.jpg">
                            <img src="/Content/img/icons/food/popcorn.png" class="ico">
                            <span>Ăn vặt</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('c1') }" ng-click="selectCat('c1')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g2/19494/s320/recipe19494-636274205695226444.jpg">
                            <img src="/Content/img/icons/food/cupcake.64.png" class="ico">
                            <span>Món khai vị</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('c3') }" ng-click="selectCat('c3')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g2/19009/s320/recipe19009-636231824356818385.jpg">
                            <img src="/Content/img/icons/food/cabbage.64.png" class="ico">
                            <span>Món chay</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('c4') }" ng-click="selectCat('c4')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g2/19886/s320/recipe19886-636296080044257040.jpg">
                            <img src="/Content/img/icons/food/dish.64.png" class="ico">
                            <span>Món chính</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('c6') }" ng-click="selectCat('c6')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g2/19590/s320/recipe19590-636275297732088505.jpg">
                            <img src="/Content/img/icons/food/quick.64.png" class="ico">
                            <span>Nhanh và dễ</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('c8') }" ng-click="selectCat('c8')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g1/5949/s320/recipe5949-636258644291409028.png">
                            <img src="/Content/img/icons/food/cake.64.png" class="ico">
                            <span>Làm bánh</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('p15') }" ng-click="selectCat('p15')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g3/20078/s320/recipe20078-636310593964379294.jpg">
                            <img src="/Content/img/icons/food/avocado.64.png" class="ico">
                            <span>Healthy</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('c7') }" ng-click="selectCat('c7')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g2/18851/s320/recipe18851-636209432858440692.jpg">
                            <img src="/Content/img/icons/food/martini.64.png" class="ico">
                            <span>Thức uống</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('d104') }" ng-click="selectCat('d104')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g1/7908/s320/recipe7908-635967510559333835.jpg">
                            <img src="/Content/img/icons/food/salad.64.png" class="ico">
                            <span>Salad</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div><div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('d105') }" ng-click="selectCat('d105')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g2/19376/s320/cooky-recipe-636265666436476029.JPG">
                            <img src="/Content/img/icons/food/soup.64.png" class="ico">
                            <span>Nước chấm</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('d124') }" ng-click="selectCat('d124')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g1/5304/s320/recipe5304-635983838729694335.jpg">
                            <img src="/Content/img/icons/food/spaghetti.64.png" class="ico">
                            <span>Pasta - Spaghetti</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('i5') }" ng-click="selectCat('i5')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g2/14854/s320/recipe14854-635604813872665684.jpg">
                            <img src="/Content/img/icons/food/chicken.stroke.64.png" class="ico">
                            <span>Gà</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('d122') }" ng-click="selectCat('d122')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g3/21228/s320/recipe21228-636386656291784619.jpg">
                            <img src="/Content/img/icons/food/snack.64.png" class="ico">
                            <span>Snacks</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('d126') }" ng-click="selectCat('d126')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g1/6096/s320/recipe6096-635628764315245408.jpg">
                            <img src="/Content/img/icons/food/noodles.stroke.64.png" class="ico">
                            <span>Bún - Mì - Phở</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0);" ng-class="{ 'item-checked': isCategoryChecked('d107') }" ng-click="selectCat('d107')">
                            <img class="bg-img" src="https://media.cooky.vn/recipe/g1/537/s320/recipe537-635620986017152292.jpg">
                            <img src="/Content/img/icons/food/hotpots.64.png" class="ico">
                            <span>Lẩu</span>
                            <span class="ico-check fa fa-check-circle"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="facebookFriendsPopup" style="display: none;">
    <div class="popup-heading">
        <div>
            Bạn Facebook
        </div>
    </div>
    <div class="popup-content" style="padding-top:10px;">
        <div class="loading">Đang tải ...</div>
        <div class="content"></div>
    </div>
    <div class="popup-controls"><a href="javascript:void(0)" class="btn btn-danger facebook-invite-friend"><span class="fa fa-plus"></span> Mời bạn bè</a></div>
</div>
<style>
    .big-photo-container{background-color: #fff;}
    /*@media (max-width: 735px) {
        .photo-header { height: 64px; }
        .photo-viewer-container { margin: 0 !important; padding: 0 !important; }
        .big-photo-container { margin: 0 auto !important; }
        .big-photo { width: 100%; max-height: 100%; }
    }

    @media (min-width: 481px) {
        #photoViewerContainer { padding: 0 40px; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); }
    }

    @media (min-width: 736px) {
        .photo-header { float: right; height: 78px; right: 24px; top: 0; width: 355px; }
        .big-photo { width: calc(100% - 355px); float: left; }
        
    }*/
</style>
<div id="cookyphotobox" style="display: none;height:100%" class="photo-viewer-wrapper" tabindex="1">
    <div class="overlay-box"></div>
    <a class="btn-photo-viewer-close"><img src="/Content/simplemodal/x-black.png" /></a>
    <script type="text/ng-template" id="owner-info.html">
        <div class="photo-viewer-user-info">
            <div ng-show="user!=null && user.UserId>0">
                <div class="user-avt">
                    <img class="img-responsive" ng-src="{{user.AvatarUrl}}">
                </div>
                <div class="user-info">
                    <a ng-href="{{user.ProfileUrl}}" href="#" target="_self" class="name cooky-user-link" data-userid="{{user.UserId}}">{{user.DisplayName}}</a>
                    <div class="user-stats">
                        <ul class="nomargin list-inline">
                            <li>{{user.TotalRecipes}} Công thức, {{user.TotalFollowers}} Quan tâm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div ng-show="user==null || user.UserId<=0">
                <span>Đang cập nhật</span>
            </div>
        </div>
    </script>
    <div ng-controller="PhotoViewController">
        <div class="photo-viewer-container ng-cloak" id="photoViewerContainer" ng-keypress="directionPress($event)">
            <div class="photo-viewer" id="photo-viewer">
                <div class="big-photo" style="background:#000; max-height:100%" actual-src="{{currentPhoto.img}}" dimension-width="{{currentDimension.Width}}" dimension-height="{{currentDimension.Height}}">
                    
                    <img id="full-img" class="photo img-responsive" style="display: none; margin:0 auto;" />
                    <a href="javascript:void(0)" ng-show="hasBack" ng-click="prev()" class="previous-btn control-btn">
                        <span data-icon="">
                        </span>
                    </a>
                    <a href="javascript:void(0)" ng-show="hasNext" ng-click="next()" class="next-btn control-btn">
                        <span data-icon="" style="right:8px"></span>
                    </a>
                </div>
                <div class="photo-header" id="photoInfo">
                    <owner-info user="currentPhoto.user"></owner-info>
                    <div class="photo-detail-url" style="margin-left:260px;" title="Xem chi tiết">
                        <a ng-href="/photo/detail/{{currentPhoto.id}}" href="#" target="_blank">
                            <span class="text-gray" style="font-size:12px"><span class="fa fa-globe"></span> Xem chi tiết</span>
                        </a>
                    </div>
                    <div class="review-item recipe-review-item nopadding">
                        <div class="photo-text">{{currentPhoto.caption()}}</div>
                        <div class="comment-widget-box" style="border:none;padding:0;margin-top: 5px;border-top: 1px solid #f5f5f5;">
                            <div class="cooky-like-comment-widget-new" ref-id="currentPhoto.id" ref-type="13" environment="'photopopup'" none-upload-image="true" ref-max-content-height="300"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

    <footer>
    <div class="footer-inner">
        <div class="wide-box">
            <div class="top-course-box">
                <div class="container">
                    <div class="top-course-list">
                        <div class="top-course-header">
                            <h3>Danh mục</h3>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-khai-vi-c1" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-folder-o text-gray"></span>
                                <span> M&#243;n khai vị </span>
                                <span class="text">(<span class="count">2635</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-trang-mieng-c2" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-folder-o text-gray"></span>
                                <span> M&#243;n tr&#225;ng miệng </span>
                                <span class="text">(<span class="count">4351</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-chay-c3" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-folder-o text-gray"></span>
                                <span> M&#243;n chay </span>
                                <span class="text">(<span class="count">855</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-chinh-c4" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-folder-o text-gray"></span>
                                <span> M&#243;n ch&#237;nh </span>
                                <span class="text">(<span class="count">10456</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam" target="_blank" class="other">
                                Xem thêm
                                <span class="text">
                                    <span class="fa fa-angle-double-right"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                                        <div class="top-course-list">
                        <div class="top-course-header">
                            <h3>Ẩm thực</h3>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-an-viet-nam-cs1" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span> Việt Nam
                                <span class="text">(<span class="count">20236</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-an-thai-lan-cs2" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span> Th&#225;i Lan
                                <span class="text">(<span class="count">364</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-an-y-cs3" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span> &#221;
                                <span class="text">(<span class="count">286</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-an-han-quoc-cs4" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span> H&#224;n Quốc
                                <span class="text">(<span class="count">658</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam" target="_blank" class="other">
                                Xem thêm
                                <span class="text">
                                    <span class="fa fa-angle-double-right"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                                        <div class="top-course-list">
                        <div class="top-course-header">
                            <h3>Loại món</h3>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-snacks-ngon-d122" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span>
                                Sandwich
                                <span class="text">(<span class="count">311</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-cupcake-ngon-d123" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span>
                                Cupcake
                                <span class="text">(<span class="count">131</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-pasta-spaghetti-ngon-d124" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span>
                                Latte
                                <span class="text">(<span class="count">306</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-mien-hu-tieu-ngon-d125" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span>
                                Binsu
                                <span class="text">(<span class="count">170</span>)</span>
                            </a>
                        </div>

                        <div class="top-course-item">
                            <a href="/cach-lam" target="_blank" class="other">
                                Xem thêm
                                <span class="text">
                                    <span class="fa fa-angle-double-right"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                                        <div class="top-course-list">
                        <div class="top-course-header">
                            <h3>Mục đích</h3>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-an-an-sang-p2" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span>
                                Ăn s&#225;ng
                                <span class="text">(<span class="count">5803</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-an-an-trua-p3" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span>
                                Ăn trưa
                                <span class="text">(<span class="count">13649</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-an-an-kieng-p4" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span>
                                Ăn ki&#234;ng
                                <span class="text">(<span class="count">712</span>)</span>
                            </a>
                        </div>
                        <div class="top-course-item">
                            <a href="/cach-lam/mon-an-giam-can-p5" target="_blank" class="mon-khai-vi">
                                <span class="fa fa-angle-right"></span>
                                Giảm c&#226;n
                                <span class="text">(<span class="count">810</span>)</span>
                            </a>
                        </div>


                        <div class="top-course-item">
                            <a href="/cach-lam" target="_blank" class="other">
                                Xem thêm
                                <span class="text">
                                    <span class="fa fa-angle-double-right"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</footer>
<div id="intro-content" style="display: none; padding: 0;" class="intro-content intro-content-right">
    <div style="position: relative">
        <a id="intro-content-url" target="_blank" href="">
            <img id="intro-content-image-url" class="" src="" />
        </a>
    </div>
    <div class="intro-content-close" style="position: absolute;right: 5px;top: 5px;">
        <a href="javascript:void(0)" style="overflow: hidden;display: block; color: #f6f6f6">
            <span style="font-size: 16px;line-height: 28px;border: 1px solid #ccc;background: #ececec;width: 30px;height: 30px;text-align: center;border-radius: 50%;color: #7e7e7e;display: block;font-weight: 100;">x</span>
        </a>
    </div>
</div>
<div id="vertical-intro-content" style="display:none;padding: 0;position: fixed;bottom: 0;left: 0;z-index: 999999;" class="vertical-intro-content vertical-intro-content-left">
    <div style="position: relative">
        <a id="vertical-intro-content-url" target="_blank" href="">
            <img id="vertical-intro-content-image-url" class="" src="" />
        </a>
    </div>
    <div class="vertical-intro-content-close" style="position: absolute;right: 5px;top: 5px;">
        <a href="javascript:void(0)" style="overflow: hidden;display: block; color: #777"><span class="fa fa-close text-gray" style="font-size: 16px"></span> &nbsp;</a>
    </div>
</div>
</body>
</html>