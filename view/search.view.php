<div class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="product-grid-area">
                <ul class="products-grid">
                <?php
                $products=$data['products'];
                //Neu khong co ket qua tra ve thi in ra no data
                if($products==null) echo "<div class='no-data'><i class='fa fa-frown-o'>&nbsp;Sorry, No data!</i></div>";
                else{
                foreach($products as $p){
                ?>
                    <li class="item col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                        <div class="product-item">
                            <div class="item-inner">
                            <div class="product-thumbnail">
                                <div class="icon-sale-label sale-left">Sale</div>
                                <div class="icon-new-label new-right">New</div>
                                <div class="pr-img-area" style="height:300px;">
                                <a title="<?php echo $p->name; ?>" href="<?php echo $p->url."-".$p->id.".html"; ?>">
                                    <figure>
                                    <img class="first-img" src="public/images/products_2/products/<?php echo $p->image; ?>" alt="">
                                    <img class="hover-img" src="public/images/products_2/products/<?php echo $p->image; ?>" alt="">
                                    </figure>
                                </a>
                                <button type="button" class="add-to-cart-mt" data-id="<?php echo $p->id; ?>" >
                                    <i class="fa fa-shopping-cart"></i>
                                    <span> Add to Cart</span>
                                </button>
                                </div>

                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                <div class="item-title">
                                    <a title="<?php echo $p->name; ?>" href="<?php echo $p->url."-".$p->id.".html"; ?>"><?php echo $p->name; ?></a>
                                </div>
                                <div class="item-content">
                                    <div class="item-price">
                                    <div class="price-box">
                                    <?php
                                    if($p->promotion_price!=0){
                                    ?>
                                        <span class="regular-price">
                                        <span class="price"><?php echo number_format($p->promotion_price); ?></span>
                                        </span>
                                        <span class="old-price">
                                        <span class="price"><?php echo number_format($p->price); ?></span>
                                        </span>
                                    <?php }else{ ?>
                                        <span class="regular-price">
                                        <span class="price"><?php echo number_format($p->price); ?></span>
                                        </span>
                                    <?php }//Dong if ?>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </li>
                <?php } // Dong foreach ?>
                <?php } //Dong if ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div style="clear:both;"></div>
