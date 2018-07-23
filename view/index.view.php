<!-- Home Slider Start -->
<div class="slider">
      <div class="tp-banner-container clearfix">
        <div class="tp-banner">
          <ul>
            <!-- SLIDE 1 -->
            <?php
            $slide=$data['slide'];
            foreach($slide as $s){
            ?>
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700">
              <!-- MAIN IMAGE -->
              <img src="public/images/slider/<?php echo $s->image; ?>" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption very_big_white skewfromrightshort fadeout" data-x="center" data-y="100" data-speed="500" data-start="1200"
                data-easing="Circ.easeInOut" style=" font-size:70px; font-weight:800; color:#fe0100;">Huge
                <span style=" color:#000;">sale</span>
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-caption medium_text skewfromrightshort fadeout" data-x="center" data-y="165" data-hoffset="0" data-voffset="-73"
                data-speed="500" data-start="1200" data-easing="Power4.easeOut" style=" font-size:20px; font-weight:500; color:#337ab7;">
                Sale off 75% all products </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="210" data-hoffset="0" data-voffset="98"
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none"
                data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="border: 2px solid #fed700;border-radius: 50px; font-size:14px; background-color:#fed700; color:#333; z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; letter-spacing:1px;">
                <a href='#' class='largebtn slide1'>Learn More</a>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>

    <!-- main container -->
    <div class="main-container col1-layout">
      <div class="container">
        <div class="row">

          <!-- Home Tabs  -->
          <div class="col-sm-12 col-md-12 col-xs-12">
            <div class="home-tab">
              <ul class="nav home-nav-tabs home-product-tabs">
                <li class="active">
                  <a href="#featured" data-toggle="tab" aria-expanded="false">SẢN PHẨM NỔI BẬT</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#top-sellers" data-toggle="tab" aria-expanded="false">SẢN PHẨM BÁN CHẠY</a>
                </li>
              </ul>
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane active in" id="featured">
                  <div class="featured-pro">
                    <div class="slider-items-products">
                      <div id="featured-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4">
                          <?php
                          $featureProducts=$data['featureProducts'];
                          foreach($featureProducts as $f){
                          ?>
                          <div class="product-item">
                            <div class="item-inner">
                              <div class="product-thumbnail">
                                <?php
                                if($f->promotion_price > 0){
                                ?>
                                <div class="icon-sale-label sale-left">Sale</div>
                                <?php } ?>
                                <?php
                                if($f->new==1){
                                ?>
                                <div class="icon-new-label new-right">New</div>
                                <?php } ?>
                                <div class="pr-img-area">
                                  <a title="<?php echo $f->name; ?>" href="<?php echo $f->url; ?>-<?php echo $f->id.".html"; ?>">
                                    <figure>
                                      <img class="first-img" src="public/images/products_2/products/<?php echo $f->image ?>" alt="html template">
                                      <img class="hover-img" src="public/images/products_2/products/<?php echo $f->image ?>" alt="html template">
                                    </figure>
                                  </a>
                                  <button type="button" class="add-to-cart-mt" data-id=<?php echo $f->id; ?>>
                                    <i class="fa fa-shopping-cart"></i>
                                    <span> Add to Cart</span>
                                  </button>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title">
                                    <a title="<?php echo $f->name; ?>" href="<?php echo $f->url; ?>-<?php echo $f->id.".html"; ?>"><?php echo $f->name; ?></a>
                                  </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box">
                                        <?php
                                        if($f->promotion_price!=0){
                                        ?>
                                        <span class="regular-price">
                                          <span class="price"><?php echo number_format($f->promotion_price); ?></span>
                                        </span>
                                        <span class="old-price">
                                          <span class="price"><?php echo number_format($f->price); ?></span>
                                        </span>
                                        <?php
                                        }else{
                                        ?>
                                        <span class="regular-price">
                                          <span class="price"><?php echo number_format($f->price); ?></span>
                                        </span>
                                        <?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } //Dong foreach ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="top-sellers">
                  <div class="top-sellers-pro">
                    <div class="slider-items-products">
                      <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 ">
                          <?php
                          $bestSeller=$data['bestSeller'];
                          foreach($bestSeller as $b){
                          ?>
                          <div class="product-item">
                            <div class="item-inner">
                              <div class="product-thumbnail">
                                <?php
                                if($b->promotion_price != 0){
                                ?>
                                <div class="icon-sale-label sale-left">Sale</div>
                                <?php } ?>
                                <?php
                                if($b->new==1){
                                ?>
                                <div class="icon-new-label new-right">New</div>
                                <?php } ?>
                                <div class="pr-img-area">
                                  <a title="<?php echo $b->name; ?>" href="<?php echo $b->url."-".$b->id.".html"; ?>">
                                    <figure>
                                      <img class="first-img" src="public/images/products_2/products/<?php echo $b->image; ?>" alt="html template">
                                      <img class="hover-img" src="public/images/products_2/products/<?php echo $b->image; ?>" alt="html template">
                                    </figure>
                                  </a>
                                  <button type="button" class="add-to-cart-mt" data-id=<?php echo $b->id; ?>>
                                    <i class="fa fa-shopping-cart"></i>
                                    <span> Add to Cart</span>
                                  </button>
                                </div>

                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title">
                                    <a title="<?php echo $b->name; ?>" href="<?php echo $b->name."-".$b->id.".html"; ?>"><?php echo $b->name; ?> </a>
                                  </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box">
                                        <?php
                                        if($b->promotion_price != 0){
                                        ?>
                                        <span class="regular-price">
                                          <span class="price"><?php echo number_format($b->promotion_price); ?></span>
                                        </span>
                                        <span class="old-price">
                                          <span class="price"><?php echo number_format($b->price); ?></span>
                                        </span>
                                        <?php }else{ ?>
                                          <span class="regular-price">
                                          <span class="price"><?php echo number_format($b->price); ?></span>
                                        </span>
                                        <?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } //Dong foreach ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- end main container -->

    <!--special-products-->

    <div class="container">
      <div class="special-products">
        <div class="page-header">
          <h2>SẢN PHẨM KHUYẾN MÃI</h2>
        </div>
        <div class="special-products-pro">
          <div class="slider-items-products">
            <div id="special-products-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4">
                <?php
                $promotionProducts=$data['promotionProducts'];
                foreach($promotionProducts as $pp){
                ?>
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <?php
                      if($pp->promotion_price!=0){
                      ?>
                      <div class="icon-sale-label sale-left">Sale</div>
                      <?php } ?>
                      <?php
                      if($pp->new==1){
                      ?>
                      <div class="icon-new-label new-right">New</div>
                      <?php } ?>
                      <div class="pr-img-area">
                        <a title="<?php echo $pp->name; ?>" href="<?php echo $pp->url."-".$pp->id.".html"; ?>">
                          <figure>
                            <img class="first-img" src="public/images/products_2/products/<?php echo $pp->image; ?>" alt="html template">
                            <img class="hover-img" src="public/images/products_2/products/<?php echo $pp->image; ?>" alt="html template">
                          </figure>
                        </a>
                        <button type="button" class="add-to-cart-mt" data-id=<?php echo $pp->id; ?>>
                          <i class="fa fa-shopping-cart"></i>
                          <span> Add to Cart</span>
                        </button>
                      </div>

                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title">
                          <a title="<?php echo $pp->name; ?>" href="<?php echo $pp->url."-".$pp->id.".html"; ?>"><?php echo $pp->name; ?></a>
                        </div>
                        <div class="item-content">

                          <div class="item-price">
                            <div class="price-box">
                            <?php
                            if($pp->promotion_price != 0){
                            ?>
                              <span class="regular-price">
                                 <span class="price"><?php echo number_format($pp->promotion_price); ?></span>
                              </span>
                              <span class="old-price">
                                  <span class="price"><?php echo number_format($pp->price); ?></span>
                              </span>
                            <?php }else{ ?>
                              <span class="regular-price">
                                  <span class="price"><?php echo number_format($pp->price); ?></span>
                              </span>
                            <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } //Dong foreach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- category area start -->
    <div class="jtv-category-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="jtv-single-cat">
              <h2 class="cat-title">SẢN PHẨM BÁN CHẠY</h2>
              <?php 
              $bestSeller2=$data['bestSeller2'];
              foreach($bestSeller2 as $bs){ 
              ?>
              <div class="jtv-product jtv-cat-margin">
                <div class="product-img">
                  <a href="<?php echo $bs->url."-".$bs->id.".html"; ?>">
                    <img src="public/images/products_2/products/<?php echo $bs->image; ?>" alt="html template">
                    <img class="secondary-img" src="public/images/products_2/products/<?php echo $bs->image; ?>" alt="html template"> </a>
                </div>
                <div class="jtv-product-content">
                  <h3>
                    <a href="single_product.html"><?php echo $bs->name; ?></a>
                  </h3>
                  <div class="price-box">
                    <?php 
                    if($bs->promotion_price!=0){ 
                    ?>
                    <p class="special-price">
                      <span class="price-label">Special Price</span>
                      <span class="price"><?php echo number_format($bs->promotion_price); ?></span>
                    </p>
                    <p class="old-price">
                      <span class="price-label">Regular Price:</span>
                      <span class="price"><?php echo number_format($bs->price); ?></span>
                    </p>
                    <?php }else{ ?>
                    <p class="special-price">
                      <span class="price-label">Special Price</span>
                      <span class="price"><?php echo number_format($bs->price); ?></span>
                    </p>
                    <?php } ?>
                  </div>
                  <div class="jtv-product-action">
                    <div class="jtv-extra-link">
                      <div class="button-cart" data-id="<?php echo $bs->id; ?>">
                        <button >
                          <i class="fa fa-shopping-cart"></i>
                        </button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <?php } //Dong foreach ?>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="jtv-single-cat">
              <h2 class="cat-title">SẢN PHẨM ĐANG KHUYẾN MÃI</h2>
              <?php
              $promotionProducts2=$data['promotionProducts2'];
              foreach($promotionProducts2 as $pp){
              ?>
              <div class="jtv-product jtv-cat-margin">
                <div class="product-img">
                  <a href="<?php echo $pp->url."-".$pp->id.".html"; ?>">
                    <img src="public/images/products_2/products/<?php echo $pp->image; ?>" alt="html template">
                    <img class="secondary-img" src="public/images/products_2/products/<?php echo $pp->image; ?>" alt="html template"> </a>
                </div>
                <div class="jtv-product-content">
                  <h3>
                    <a href="single_product.html"><?php echo $pp->name; ?></a>
                  </h3>
                  <div class="price-box">
                    <span class="regular-price">
                      <span class="price"><?php echo number_format($pp->promotion_price); ?></span>
                    </span>
                  </div>
                  <div class="jtv-product-action">
                    <div class="jtv-extra-link">
                      <div class="button-cart" data-id="<?php echo $pp->id; ?>">
                        <button>
                          <i class="fa fa-shopping-cart"></i>
                        </button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>

          <!-- service area start -->
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="jtv-service-area">

              <!-- jtv-single-service start -->

              <div class="jtv-single-service">
                <div class="service-icon">
                  <img alt="html template" src="public/images/customer-service-icon.png"> </div>
                <div class="service-text">
                  <h2>24/7 customer service</h2>
                  <p>
                    <span>Call us 24/7 at 000 - 123 - 456</span>
                  </p>
                </div>
              </div>
              <div class="jtv-single-service">
                <div class="service-icon">
                  <img alt="html template" src="public/images/shipping-icon.png"> </div>
                <div class="service-text">
                  <h2>free shipping worldwide</h2>
                  <p>
                    <span>On order over $199 - 7 days a week</span>
                  </p>
                </div>
              </div>
              <div class="jtv-single-service">
                <div class="service-icon">
                  <img alt="html template" src="public/images/guaratee-icon.png"> </div>
                <div class="service-text">
                  <h2>money back guaratee!</h2>
                  <p>
                    <span>Send within 30 days</span>
                  </p>
                </div>
              </div>

              <!-- jtv-single-service end -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- category-area end -->

  <script type="text/javascript" src="public/js/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $('.button-cart').click(function(){
      var idSP=$(this).attr("data-id");
      //console.log(id);
      $.ajax({
        type:"POST",
        url:"cart.php",
        data:{
          id:idSP
        },
        dataType:"JSON",
        success:function(res){
          $('#name-product').html(res.name);
          $('#notifycation').modal('show');
          $('.totalQty').html(res.cartQty);
          $('.cart-title').html(res.cartTitle);
          $('.cartPrice').html(res.cartPrice);
          //console.log(res);
        },
        error:function(){
          console.log("Error!");
        }
      })
    })
  })
  </script>