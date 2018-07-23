<!-- Main Container -->
<div class="main-container col2-left-layout">
      <div class="container">
        <div class="row">
          <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
            <div class="category-description std">
              <div class="slider-items-products">
                <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                    <!-- Item -->
                    <div class="item">
                      <a href="#x">
                        <img alt="" src="public/images/cat-slider-img1.jpg">
                      </a>
                      <div class="inner-info">
                        <div class="cat-img-title">
                          <span>Our new range of</span>
                          <h2 class="cat-heading">
                            <strong>Smartphone</strong>
                          </h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                          <a class="info" href="#">Shop Now</a>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="item">
                      <a href="#x">
                        <img alt="" src="public/images/cat-slider-img2.jpg">
                      </a>
                    </div>

                    <!-- End Item -->

                  </div>
                </div>
              </div>
            </div>
            <div id="ajax_product">
            <div class="shop-inner">
              <div class="page-title">
                <h2><?php echo $data['nameType']; ?></h2>
              </div>

              <div class="product-grid-area">
                <ul class="products-grid">
                  <?php
                  $productsByType=$data['productsByType'];
                  if($productsByType!=null){
                  foreach($productsByType as $pt){
                  ?>
                  <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                    <div class="product-item">
                      <div class="item-inner">
                        <div class="product-thumbnail">
                          <?php
                          if($pt->promotion_price!=0){
                          ?>
                          <div class="icon-sale-label sale-left">Sale</div>
                          <?php } ?>
                          <?php
                          if($pt->new==1){
                          ?>
                          <div class="icon-new-label new-right">New</div>
                          <?php } ?>
                          <div class="pr-img-area" style="height:300px;">
                            <a title="<?php echo $pt->name; ?>" href="<?php echo $pt->url."-".$pt->id.".html"; ?>">
                              <figure>
                                <img class="first-img" src="public/images/products_2/products/<?php echo $pt->image; ?>" alt="">
                                <img class="hover-img" src="public/images/products_2/products/<?php echo $pt->image; ?>" alt="">
                              </figure>
                            </a>
                            <button type="button" class="add-to-cart-mt" data-id=<?php echo $pt->id; ?>>
                              <i class="fa fa-shopping-cart"></i>
                              <span> Add to Cart</span>
                            </button>
                          </div>

                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title">
                              <a title="<?php echo $pt->name; ?>" href="<?php echo $pt->url."-".$pt->id.".html"; ?>"><?php echo $pt->name; ?></a>
                            </div>
                            <div class="item-content">
                              <div class="item-price">
                                <div class="price-box">
                                  <?php
                                  if($pt->promotion_price!=0){
                                  ?>
                                  <span class="regular-price">
                                    <span class="price"><?php echo number_format($pt->promotion_price); ?></span>
                                  </span>
                                  <span class="old-price">
                                    <span class="price"><?php echo number_format($pt->price); ?></span>
                                  </span>
                                  <?php }else{ ?>
                                  <span class="regular-price">
                                    <span class="price"><?php echo number_format($pt->price); ?></span>
                                  </span>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php } //Dong foreach
                  }else{ echo "<div class='no-data'><i class='fa fa-frown-o'>&nbsp;No Data!</i></div>";}
                  ?>
                </ul>
              </div>
              <?php
              //Neu client ko xem theo gia cua tung chung loai thi moi show thanh phan trang
              if(!isset($_GET['price'])){
              ?>
              <div class="pagination-area ">
                <?php echo $data['showPagination']; ?>
              </div>
              <?php } ?>
            </div>
            </div>
          </div>
          <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            <div class="block category-sidebar">
              <div class="sidebar-title">
                <h3>Categories</h3>
              </div>
              <ul class="product-categories">
                <li class="cat-item current-cat cat-parent">
                  <a href="shop_grid.html">Women</a>
                  <ul class="children">
                    <li class="cat-item cat-parent">
                      <a href="shop_grid.html">
                        <i class="fa fa-angle-right"></i>&nbsp; Accessories</a>
                      <ul class="children">
                        <li class="cat-item">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Dresses</a>
                        </li>
                        <li class="cat-item cat-parent">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Handbags</a>
                          <ul style="display: none;" class="children">
                            <li class="cat-item">
                              <a href="shop_grid.html">
                                <i class="fa fa-angle-right"></i>&nbsp; Beaded Handbags</a>
                            </li>
                            <li class="cat-item">
                              <a href="shop_grid.html">
                                <i class="fa fa-angle-right"></i>&nbsp; Sling bag</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="cat-item cat-parent">
                      <a href="shop_grid.html">
                        <i class="fa fa-angle-right"></i>&nbsp; Handbags</a>
                      <ul class="children">
                        <li class="cat-item">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; backpack</a>
                        </li>
                        <li class="cat-item">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Beaded Handbags</a>
                        </li>
                        <li class="cat-item">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Fabric Handbags</a>
                        </li>
                        <li class="cat-item">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Sling bag</a>
                        </li>
                      </ul>
                    </li>
                    <li class="cat-item">
                      <a href="shop_grid.html">
                        <i class="fa fa-angle-right"></i>&nbsp; Jewellery</a>
                    </li>
                    <li class="cat-item">
                      <a href="shop_grid.html">
                        <i class="fa fa-angle-right"></i>&nbsp; Swimwear</a>
                    </li>
                  </ul>
                </li>
                <li class="cat-item cat-parent">
                  <a href="shop_grid.html">Men</a>
                  <ul class="children">
                    <li class="cat-item cat-parent">
                      <a href="shop_grid.html">
                        <i class="fa fa-angle-right"></i>&nbsp; Dresses</a>
                      <ul class="children">
                        <li class="cat-item">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Casual</a>
                        </li>
                        <li class="cat-item">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Designer</a>
                        </li>
                        <li class="cat-item">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Evening</a>
                        </li>
                        <li class="cat-item">
                          <a href="shop_grid.html">
                            <i class="fa fa-angle-right"></i>&nbsp; Hoodies</a>
                        </li>
                      </ul>
                    </li>
                    <li class="cat-item">
                      <a href="shop_grid.html">
                        <i class="fa fa-angle-right"></i>&nbsp; Jackets</a>
                    </li>
                    <li class="cat-item">
                      <a href="shop_grid.html">
                        <i class="fa fa-angle-right"></i>&nbsp; Shoes</a>
                    </li>
                  </ul>
                </li>
                <li class="cat-item">
                  <a href="shop_grid.html">Electronics</a>
                </li>
                <li class="cat-item">
                  <a href="shop_grid.html">Furniture</a>
                </li>
                <li class="cat-item">
                  <a href="shop_grid.html">KItchen</a>
                </li>
              </ul>
            </div>
            <div class="block shop-by-side">
              <div class="sidebar-bar-title">
                <h3>Shop By</h3>
              </div>
              <div class="block-content">
                <p class="block-subtitle">Shopping Options</p>
                <div class="layered-Category">
                  <h2 class="saider-bar-title">Categories</h2>
                  <div class="layered-content">
                    <ul class="check-box-list">
                    <?php
                    $idType=$data['idType'];
                    $categories=$data['categories'];
                    foreach($categories as $c){
                    ?>
                      <li>
                        <input type="radio" <?php if($idType==$c->id) echo "checked"; ?> id="jtv<?php echo $c->id; ?>" name="jtvc" >
                        <label for="jtv<?php echo $c->id; ?>" class="categories_radio" data-id="<?php echo $c->id; ?>">
                          <span class="button"></span><?php echo $c->name; ?>
                          <span class="count">(<?php echo $c->SoLuong; ?>)</span>
                        </label>
                      </li>
                    <?php } ?>
                    <li>
                        <input type="radio" id="jtv0" name="jtv0" >
                        <label for="jtv0" class="categories_radio" data-id="0">
                          <span class="button"></span>Tất cả
                          <span class="count">(<?php echo $data['allProducts']; ?>)</span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
            <div class="block product-price-range ">
              <div class="sidebar-bar-title">
                <h3>Price</h3>
              </div>
              <div class="block-content">
                <div class="slider-range">
                  <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50"
                    data-value-max="350"></div>
                  <div class="amount-range-price">Range: $10 - $550</div>
                  <ul class="check-box-list">
                    <?php
                    for($i=1;$i<=5;$i++){
                    ?>
                    <li>
                      <input type="radio" id="p<?php echo $i; ?>" name="cc" />
                      <label for="p<?php echo $i; ?>" class="price-radio" data-id="<?php echo $i; ?>">
                        <span class="button"></span> 
                        <?php
                        switch($i){
                          case "1":echo "Dưới 5 triệu<span class='count'>(".$data['soSP1'].")</span>";break;
                          case "2":echo "5 - 10 triệu<span class='count'>(".$data['soSP2'].")</span>";break;
                          case "3":echo "10 - 15 triệu<span class='count'>(".$data['soSP3'].")</span>";break;
                          case "4":echo "15 - 20 triệu<span class='count'>(".$data['soSP4'].")</span>";break;
                          default:echo "Trên 20 triệu<span class='count'>(".$data['soSP5'].")</span>";break;
                        }
                        ?>
                      </label>
                    </li>
                    <?php } //Dong foreach ?>
                  </ul>
                </div>
              </div>
            </div>
            <?php
            $cart=$data['cart'];
            if(isset($_SESSION['cartQty'])){
            ?>
            <div class="block sidebar-cart">
              <div class="sidebar-bar-title">
                <h3>GIỎ HÀNG CỦA BẠN</h3>
              </div>
              <div class="block-content">
                <p class="amount">Có
                  <?php echo $cart->totalQty; ?> sản phẩm trong giỏ hàng.</p>
                <ul>
                  <?php
                  foreach($cart->items as $crt){
                  ?>
                  <li class="item" style="width:100%">
                    
                      <img src="public/images/products_2/products/<?php echo $crt['item']->image; ?>" alt="Sample Product ">
                    
                    <div class="product-details">
                      
                      <p class="product-name">
                        <?php echo $crt['item']->name; ?>
                      </p>
                      <strong><?php echo $crt['qty']; ?></strong> x
                      <span class="price">
                      <?php
                      if($crt['item']->promotion_price < $crt['item']->price) echo number_format($crt['item']->promotion_price);
                      else echo number_format($crt['item']->price);
                      ?>
                      </span>
                    </div>
                  </li>
                  <?php } //Dong foreach ?>
                </ul>
                <div class="summary">
                  <p class="subtotal">
                    <span class="label">Tổng tiền:</span>
                    <span class="price">
                    <?php
                    if($cart->promtPrice < $cart->totalPrice) echo number_format($cart->promtPrice);
                    else echo number_format($cart->totalPrice);
                    ?>
                    </span>
                  </p>
                </div>
                
                <a href="dat-hang.html">
                <div class="cart-checkout">
                  <button class="button button-checkout" title="Submit" type="submit">
                    <i class="fa fa-check"></i>
                    <span>Checkout</span>
                  </button>
                </div>
                </a>
              </div>
            </div>
            <?php } //Dong if ?>

            <div class="single-img-add sidebar-add-slider ">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="public/images/add-slide1.jpg" alt="slide1">
                    <div class="carousel-caption">
                      <h3>
                        <a href="single_product.html" title=" Sample Product">Sale Up to 50% off</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a href="#" class="info">shopping Now</a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="public/images/add-slide2.jpg" alt="slide2">
                    <div class="carousel-caption">
                      <h3>
                        <a href="single_product.html" title=" Sample Product">Smartwatch Collection</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a href="#" class="info">All Collection</a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="public/images/add-slide3.jpg" alt="slide3">
                    <div class="carousel-caption">
                      <h3>
                        <a href="single_product.html" title=" Sample Product">Summer Sale</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
      
          </aside>
        </div>
      </div>
    </div>
    <!-- Main Container End -->

    <script type="text/javascript" src="public/js/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".categories_radio").click(function(){
          var idType=$(this).attr("data-id");          
          
          $.ajax({
            url:"show-product.php",
            type:"GET",
            data:{
              id:idType
            },
            success:function(response){
              $("#ajax_product").html(response);
              //console.log(idType);
            },
            error:function(){
              console.log("Error!");
            }
          })
        })


        $(".price-radio").click(function(){
          var priceLevel=$(this).attr("data-id");
          $.ajax({
            url:"show-product-by-price.php",
            data:{
              priceLevel:priceLevel
            },
            type:"GET",
            success:function(res){
              $("#ajax_product").html(res);
              //console.log(priceLevel);
            },
            error:function(){
              console.log("Error!");
            }
          })
          //console.log(priceLevel);
        })
        
      })
    </script>