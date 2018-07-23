<div class="product-grid-area">
<ul class="products-grid">
    <?php
    $productsByType=$data['products'];
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
            <button type="button" class="add-to-cart-mt" data-id="<?php echo $pt->id; ?>">
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
    <?php } //Dong foreach ?>
</ul>
</div>


<script>
$(document).ready(function(){
    $('.add-to-cart-mt').click(function(){
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
        },
        error:function(){
          console.log("Error!");
        }
      })
    })
})
</script>