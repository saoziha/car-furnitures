<?php
    $mainP = getProduct(); hit($mainP['id']);
    $mostviewP = getMostViewProduct(5);
    $relatedP = getRelatedProduct($mainP['id']);
?>

<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">XEM NHIỀU NHẤT</h2>
                        <?php foreach($mostviewP as $p){ ?>
                            <div class="thubmnail-recent">
                              <div class="product-img">
                                <img src=<?php printProdDetail('cover_image_url', $p)?> class="recent-thumb" alt="">
                              </div>
                              <div class="product-info">
                                <h2><a href=<?php printProdURL($p)?>><?php printProdDetail('name', $p)?></a></h2>
                                <div class="product-sidebar-price">
                                    <?php if (isPrivatePrice($p)) { ?>
                                        <ins>Liên hệ</ins>
                                    <?php } else { ?>
                                        <ins>$700.00</ins> <del>$800.00</del>
                                    <?php } ?>
                                </div>
                              </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!--
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">ĐĂNG GẦN ĐÂY</h2>
                        <ul>
                            <li><a href="Boc-tran-xe.html">BỌC TRẦN DA XE HƠI 5D</a></li>
                            <li><a href="Boc-tran-xe.html">BỌC TRẦN DA XE HƠI 5D</a></li>
                            <li><a href="Boc-tran-xe.html">BỌC TRẦN DA XE HƠI 5D</a></li>
                            <li><a href="Boc-tran-xe.html">BỌC TRẦN DA XE HƠI 5D</a></li>
                            <li><a href="Boc-tran-xe.html">BỌC TRẦN DA XE HƠI 5D</a></li>
                        </ul>
                    </div>
                    -->
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="/">Home</a>
                            <a href="#"><?php printProdDetail('cat_name', $mainP) ?></a>
                            <a href=<?php printProdURL($mainP)?> >
                                <?php printProdDetail('name', $mainP) ?>
                            </a>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src=<?php printProdDetail('cover_image_url', $mainP)?> alt="">
                                    </div>

                                    <!--
                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                        <img src="img/product-thumb-4.jpg" alt="">
                                    </div>
                                    -->
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php printProdDetail('name', $mainP)?></h2>
                                    <div class="product-inner-price">
                                        <?php if (isPrivatePrice($mainP)) { ?>
                                            <ins>Giá: </ins> Liên hệ
                                        <?php } else { ?>
                                            <ins>$700.00</ins> <del>$800.00</del>
                                        <?php } ?>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                        <h2>Mô tả sản phẩm</h2>
                                        <p><?php printProdDetail('description', $mainP)?></p>
                                    </div>

                                    <!--
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Thêm vào giỏ</button>
                                    </form>

                                    <div class="product-inner-category">
                                        <p>Danh mục: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div>

                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh giá</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Mô tả sản phẩm</h2>
                                                <p>blah blah</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Đánh giá</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Tên</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Xếp hạng sản phẩm</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Viết đánh giá</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Gửi"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>


                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">SẢN PHẨM LIÊN QUAN</h2>
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="related-products-carousel">
                                    <?php foreach($relatedP as $p){ ?>
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src=<?php printProdDetail('cover_image_url', $p)?> alt="">
                                                <div class="product-hover">
                                                    <!-- <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a> -->
                                                    <a href=<?php printProdURL($p)?> class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                                                </div>
                                            </div>

                                            <h2><a href=<?php printProdURL($p)?>><?php printProdDetail('name', $p)?></a></h2>

                                            <div class="product-carousel-price">
                                                <?php if (isPrivatePrice($p)) { ?>
                                                    <ins>Liên hệ</ins>
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
                </div>
            </div>
        </div>
    </div>
