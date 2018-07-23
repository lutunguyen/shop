  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          
          <div class="page-content page-order"><div class="page-title">
            <h2>GIỎ HÀNG CỦA BẠN</h2>
          </div>
            
            <?php
            $cart=$data;
            if($cart==null) echo "<div class='no-data'><i class='fa fa-frown-o'>&nbsp;No data!</i></div>";
            else{
            ?>
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th>Tên sản phẩm</th>
                      <th class="cart_product">Hình ảnh</th>
                      <th>Đơn giá</th>
                      <th>Số lượng</th>
                      <th>Tổng tiền</th>
                      <th  class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($cart->items as $c){
                    ?>
                    <tr id="product-<?php echo $c['item']->id; ?>">
                      <td style="width:25%"><?php echo $c['item']->name; ?></td>
                      <td class="cart_product" style="width:25%; text-align:center;"><img src="public/images/products_2/products/<?php echo $c['item']->image; ?>" alt="Product"></td>
                      <td class="price" style="width:15%">
                        <?php
                        if($c['item']->promotion_price < $c['item']->price){
                          echo "<del style='color:lightgray'>".number_format($c['item']->price)."</del>";
                          echo "<br/>";
                          echo number_format($c['item']->promotion_price);
                        }else
                          echo number_format($c['item']->price);
                        ?>
                      </td>
                      <td class="qty"><input class="form-control input-sm txtQty" type="text" data-id=<?php echo $c['item']->id; ?> value="<?php echo $c['qty']; ?>"></td>
                      <td class="price" style="width:15%">
                        <?php
                          if($c['item']->promotion_price < $c['item']->price){
                            echo "<del style='color:lightgray' class='ttpbo-".$c['item']->id."'>".number_format($c['item']->price*$c['qty'])."</del>";
                            echo "<br/>";
                            echo "<div class='ptpbo-".$c['item']->id."'>".number_format($c['item']->promotion_price*$c['qty'])."</div>";
                          }else
                            echo "<div class='ttpbo-".$c['item']->id."'>".number_format($c['item']->price*$c['qty'])."</div>";
                        ?>
                      </td>
                      <td class="action" style="width:10%"><i class="icon-close" data-id="<?php echo $c['item']->id; ?>"></i></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="2">Tổng tiền chưa khuyến mãi:</td>
                      <td colspan="2" ><?php echo "<del style='color:lightgray' id='totalPrice'>".number_format($cart->totalPrice)."</del>"; ?></td>
                    </tr>
                    <tr>
                      <td colspan="2"><strong>Tổng tiền:</strong></td>
                      <td colspan="2"><strong id='promtPrice'>
                        <?php
                          echo number_format($cart->promtPrice);
                        ?>
                      </strong></td>
                    </tr>
                  </tfoot>
                </table>
                
              </div>
              <div class="cart_navigation">
                <a class="continue-btn" href="./"><i class="fa fa-arrow-left"> </i>&nbsp; Tiếp tục mua sắm</a> 
                <?php
                //Neu con san pham trong gio hang thi moi cho dat hang(de phong truong hop F5 refresh trang)
                if(isset($_SESSION['cartQty'])){ ?>
                <a class="checkout-btn" href="dat-hang.html"><i class="fa fa-check"></i> Đặt hàng</a> </div>
                <?php } ?>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="public/js/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $('.icon-close').click(function(){
      var id=$(this).attr("data-id");
      //console.log(id);
      $.ajax({
        type:"POST",
        url:"cart.php",
        data:{
          id:id,
          action:"delete"
        },
        dataType:"JSON",
        success:function(res){
          if(res.totalPrice==0){ 
            $('.order-detail-content').html('Đã xóa hết trong giỏ hàng!');
            $('.totalQty').html('');
            $('.cart-title').html('Giỏ hàng đang trống!');
            $('.cartPrice').html('');
          }else{
            $('#product-'+id).hide(500);
            $('#totalPrice').html(res.totalPrice);
            $('#promtPrice').html(res.promtPrice);
            $('.totalQty').html(res.cartQty);
            $('.cart-title').html(res.cartTitle);
            $('.cartPrice').html(res.cartPrice);
          }
        },
        error:function(){
          console.log("Error!");
        }
      })
    })

    $('.txtQty').keyup(function() {
      var soLuong = $(this).val();
      var id=$(this).attr("data-id");
      clearTimeout($.data(this, 'timer'));
      var wait = setTimeout(function(){
        //console.log(soluong);
        if(soLuong<=0 || isNaN(soLuong)){
          alert('Số lượng ko được bé hơn hoặc bằng 0!');
          $(this).focus();
        }
        else{
          $.ajax({
            type:"POST",
            url:"cart.php",
            data:{
              soLuong:soLuong,
              action:"update",
              id:id
            },
            dataType:"JSON",
            success:function(res){
              $('#totalPrice').html(res.totalPrice);
              $('#promtPrice').html(res.promtPrice);
              $('.ttpbo-'+id).html(res.totalPriceByOne);
              $('.ptpbo-'+id).html(res.promtPriceByOne);
              $('.totalQty').html(res.cartQty);
              $('.cart-title').html(res.cartTitle);
              $('.cartPrice').html(res.cartPrice);
            },
            error:function(){
              console.log("Error!");
            }
          })
        }
      }, 2000);
      $(this).data('timer', wait);
    });
  })
  </script>