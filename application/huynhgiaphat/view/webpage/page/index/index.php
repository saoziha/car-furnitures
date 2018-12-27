<?php
    $hotP = getHotProduct();
    $mostviewP = getMostViewProduct(3);
    $latestP = getLatestProduct(3);
?>
<star name="slider" wrap="false"></star>

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Sản Phẩm Nổi Bật</h2>
                    <div class="product-carousel">
                        <?php foreach($hotP as $p){ ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src=<?php printProdDetail('cover_image_url', $p)?> alt="">
                                    <div class="product-hover">
                                        <!-- <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a> -->
                                        <a href=<?php printProdURL($p)?> class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                                    </div>
                                </div>

                                <h2><a href=<?php printProdURL($p)?>><?php printProdDetail('name', $p)?></a></h2>

                                <div class="product-carousel-price">
                                    <?php if (isPrivatePrice($p)) { ?>
                                        <ins>Giá: </ins> Liên hệ
                                    <?php } else { ?>
                                        <ins>$700.00</ins> <del>$800.00</del>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<!-- End brands area -->

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Xem nhiều nhất</h2>
                    <a href="shop.html" class="wid-view-more">Xem tất cả</a>
                    <?php foreach($mostviewP as $p){ ?>
                        <div class="single-wid-product">
                            <a href=<?php printProdURL($p)?>>
                                <img src=<?php printProdDetail('cover_image_url', $p)?> alt="" class="product-thumb">
                            </a>
                            <h2><a href=<?php printProdURL($p)?>><?php printProdDetail('name', $p)?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <?php if (isPrivatePrice($p)) { ?>
                                    <ins>Giá: </ins> Liên hệ
                                <?php } else { ?>
                                    <ins>$700.00</ins> <del>$800.00</del>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Mới Nhất</h2>
                    <a href="shop.html" class="wid-view-more">Xem tất cả</a>
                    <?php foreach($latestP as $p){ ?>
                        <div class="single-wid-product">
                            <a href=<?php printProdURL($p)?>>
                                <img src=<?php printProdDetail('cover_image_url', $p)?> alt="" class="product-thumb">
                            </a>
                            <h2><a href=<?php printProdURL($p)?>><?php printProdDetail('name', $p)?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <?php if (isPrivatePrice($p)) { ?>
                                    <ins>Giá: </ins> Liên hệ
                                <?php } else { ?>
                                    <ins>$700.00</ins> <del>$800.00</del>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</div> <!-- End product widget area -->
