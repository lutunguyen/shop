<?php
$pd=$data['productDetail'];
$relatedProduct=$data['relatedProduct'];
?>
    <!-- Main Container -->
    <div class="main-container col1-layout">
      <div class="container">
        <div class="row">
          <div class="col-main">
            <div class="product-view-area">
              <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                <?php
                if($pd->promotion_price!=0){
                ?>
                <div class="icon-sale-label sale-left">Sale</div>
                <?php } ?>
                <div class="large-image">
                  <a href="public/images/products_2/products/<?php echo $pd->image; ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20">
                    <img class="zoom-img" src="public/images/products_2/products/<?php echo $pd->image; ?>" alt="products"> </a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">

                <div class="product-name">
                  <h1><?php echo $pd->name; ?></h1>
                </div>
                <div class="price-box">
                  <?php
                  if($pd->promotion_price!=0){
                  ?>
                  <p class="special-price">
                    <span class="price-label">Special Price</span>
                    <span class="price"><?php echo number_format($pd->promotion_price); ?></span>
                  </p>
                  <p class="old-price">
                    <span class="price-label">Regular Price:</span>
                    <span class="price"><?php echo number_format($pd->price); ?></span>
                  </p>
                  <?php }else{ ?>
                  <p class="special-price">
                    <span class="price-label">Special Price</span>
                    <span class="price"><?php echo number_format($pd->price); ?></span>
                  </p>
                  <?php } ?>
                </div>
                
                <?php if($pd->detail) { ?>
                <div class="short-description">
                  <h2>Quick Overview</h2>
                  <p><?php echo $pd->detail; ?></p>
                </div>
                <?php } ?>

                <div class="product-variation">
                  <form action="#" method="post">
                    <div class="cart-plus-minus">
                      <label for="qty">Quantity:</label>
                      <div class="numbers-row">
                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty>1) result.value--;return 'false';"  class="dec qtybutton">
                          <i class="fa fa-minus">&nbsp;</i>
                        </div>
                        <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                          class="inc qtybutton">
                          <i class="fa fa-plus">&nbsp;</i>
                        </div>
                      </div>
                    </div>
                    <button class="button pro-add-to-cart" title="Add to Cart" type="button">
                      <span>
                        <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                    </button>
                  </form>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Main Container End -->
    <!-- Related Product Slider -->
    <section class="upsell-product-area">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">

            <div class="page-header">
              <h2>SẢN PHẨM LIÊN QUAN</h2>
            </div>
            <div class="slider-items-products">
              <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                  <?php
                  foreach($relatedProduct as $rp){
                  ?>
                  <div class="product-item">
                    <div class="item-inner fadeInUp">
                      <div class="product-thumbnail">
                        <?php
                        if($rp->promotion_price!=0){
                        ?>
                        <div class="icon-sale-label sale-left">Sale</div>
                        <?php } ?>
                        <?php if($rp->new==1){ ?>
                        <div class="icon-new-label new-right">New</div>
                        <?php } ?>
                        <div class="pr-img-area">
                          <img class="first-img" src="public/images/products_2/products/<?php echo $rp->image; ?>" alt="">
                          <img class="hover-img" src="public/images/products_2/products/<?php echo $rp->image; ?>" alt="">
                          <button type="button" class="add-to-cart-mt" data-id="<?php echo $rp->id; ?>">
                            <i class="fa fa-shopping-cart"></i>
                            <span> Add to Cart</span>
                          </button>
                        </div>

                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a title="<?php echo $rp->name; ?>" href="<?php echo $rp->url."-".$rp->id.".html"; ?>"><?php echo $rp->name; ?></a>
                          </div>
                          <div class="item-content">

                            <div class="item-price">
                              <div class="price-box">
                                <?php if($rp->promotion_price!=0) { ?>
                                <span class="regular-price">
                                  <span class="price"><?php echo number_format($rp->promotion_price); ?></span>
                                </span>
                                <span class="old-price">
                                  <span class="price"><?php echo number_format($rp->price); ?></span>
                                </span>
                                <?php }else{ ?>
                                <span class="regular-price">
                                  <span class="price"><?php echo number_format($rp->price); ?></span>
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
    </section>
    <!-- Related Product Slider End -->
  
  <div id="notifycation" class="modal fade" role="dialog">
    <div class="modal-dialog model-sm">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <p style="font-size:18px">Đã thêm <b id="name-product">....</b> vào giỏ hàng</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript" src="public/js/jquery.min.js"></script>

    <script>
    $(document).ready(function(){
      $('.pro-add-to-cart').click(function(){
        var idSP="<?php echo $_GET['id'] ?>"
        var qty=$('#qty').val();
        // console.log(idSP);
        // console.log(qty);
        if(qty <=0 || isNaN(qty)){
          alert('Số lượng phải lớn hơn 0 hoặc phải là số!');
          $("#qty").focus();
        }
        else{
          $.ajax({
          type:"POST",
          url:"cart.php",
          data:{
            id:idSP,
            qty:qty
          },
          dataType:"JSON",
          success:function(res){
            $('#name-product').html(res.name);
            $('#notifycation').modal('show');
            $('.totalQty').html(res.cartQty);
            $('.cart-title').html(res.cartTitle);
            $('.cartPrice').html(res.cartPrice);
          },
          error:function(){
            console.log("Error!");
          }
        })
        }
      })

    $('.qty').keyup(function() {
    var soLuong = $(this).val();
    //var id=$(this).attr("data-id");
    clearTimeout($.data(this, 'timer'));
    var wait = setTimeout(function(){
      //console.log(soluong);
      if(soLuong<=0 || isNaN(soLuong)){
        alert('Số lượng ko được bé hơn hoặc bằng 0!');
        $(this).focus();
      }
    }, 2000);
    $(this).data('timer', wait);
  });

    })
  </script>