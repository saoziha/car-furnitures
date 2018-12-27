<?php $menu = getMenu();?>
<!--
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i>Yêu thích</a></li>
                        <li><a href="checkout.html"><i class="fa fa-user"></i> Thanh toán</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>

                        <li><a href="#"><i class="fa fa-user"></i> Đăng nhập</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- End header area -->


<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo">
                    <img src="public/img/favicon.png"/>
                </div>
            </div>

            <div class="brandname col-sm-9">
                <a href="index.html"><h1>AUTO HUỲNH GIA PHÁT</h1></a>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php foreach ($menu as $e){ ?>
                        <li><a href="<?php echo $e['url'];?>"><?php echo $e['name'];?></a></li>
                    <?php } ?>
                    <!-- <li><a href="index.html">Trang chủ</a></li>
                    <li><a href="shop.html">Sản phẩm</a></li>
	                <li><a href="single-product.html">Single product</a></li>
                    <li><a href="cart.html">Giỏ hàng</a></li>
                    <li><a href="about.html">Giới thiệu</a></li>
                    <li><a href="contact.html">Liên hệ</a></li>
                    -->
                </ul>
            </div>
        </div>
    </div>
</div>
