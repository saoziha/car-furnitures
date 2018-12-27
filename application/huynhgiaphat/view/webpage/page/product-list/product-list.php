<?php
    $listP = getProductList();
?>

<div class="single-product-area">

        <div class="zigzag-bottom"></div>
        <div class="container">
          <div class="search-bar">
            <div class="container">
              <form action="">
                <div class="row">
                  <div class="col-sm-6">
                    <form>
                      <div class="search-bar">
                        <input  type="text" id="searchProduct"  placeholder="Nhập tên sản phẩm...">
                        <input  type="submit" id="searchProduct" value="Tìm kiếm" >
                    </div>
                    </form>
                  </div>
                  <div class="col-sm-6"></div>
                </div>
                </form>
              </div>
          </div>

            <div class="row">
                <ul id="ulProduct">
                    <?php foreach($listP as $p){ ?>
                        <li>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-shop-product">
                                    <div class="product-upper">
                                      <a href=<?php printProdURL($p)?>><img src=<?php printProdDetail('cover_image_url', $p)?> alt=""></a>
                                    </div>
                                    <h2><a href=<?php printProdURL($p)?>><?php printProdDetail('name', $p)?></a></h2>
                                    <div class="product-carousel-price">
                                        <?php if (isPrivatePrice($p)) { ?>
                                            <ins>Giá: </ins> Liên hệ
                                        <?php } else { ?>
                                            <ins>$700.00</ins> <del>$800.00</del>
                                        <?php } ?>
                                    </div>
              						<!--
                                      <div class="product-option-shop">
                                          <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Thêm vào giỏ</a>
                                      </div>
              						-->
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!--
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
