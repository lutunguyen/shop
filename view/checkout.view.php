<!-- Main Container -->
<section class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <div class="col-main col-sm-12 col-xs-12">
        <div class="page-content checkout-page"><div class="page-title">
          <h2>THÔNG TIN KHÁCH HÀNG</h2>
        </div>
            <div class="box-border">
                <ul>
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="first_name" class="required">Họ tên:</label>
                            <input type="text" class="input form-control" name="" id="name">
                            <span id="name_msg" class="msg_error"></span>
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label class="required">Giới tính:</label>
                            <select class="input form-control" name="" id="gender">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="company_name">Điện thoại:</label>
                            <input type="text" name="" class="input form-control" id="phone" required>
                            <span id="phone_msg" class="msg_error"></span>
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="email_address" class="required">Email:</label>
                            <input type="text" class="input form-control" name="" id="email" required>
                            <span id="email_msg" class="msg_error"></span>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row"> 
                        <div class="col-xs-12">

                            <label for="address" class="required">Địa chỉ:</label>
                            <input type="text" class="input form-control" name="" id="address" required>
                            <span id="address_msg" class="msg_error"></span>

                        </div><!--/ [col] -->

                    </li><!-- / .row -->

                    <li class="row"> 
                        <div class="col-xs-12">

                            <label for="address" class="required">Ghi chú:</label>
                            <textarea name="" id="note" cols="" rows="5" class="input form-control"></textarea>
                        </div><!--/ [col] -->

                    </li><!-- / .row -->

                    <li>
                        <button class="button continue"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Tiếp tục</span></button>
                    </li>
                </ul>
            </div>
        </div>
      </div>
      
    </div>
  </div>
  </section>
  <!-- Main Container End -->

<!-- Modal -->
<div class="modal fade" id="notifycation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle" style="color:red;" >
        <i class="fa fa-check-circle" aria-hidden="true"></i>
        Thông báo</h3>
      </div>
      <div class="modal-body" id="checkoutContent" style="font-size:20px;font-family:Arial;">
        ...
      </div>
      <div class="modal-footer">
        <a href="trang-chu.html" style="color:blue;font-size:20px;font-family:Arial;">Đóng</a>
      </div>
    </div>
  </div>
</div>

  <script type="text/javascript" src="public/js/jquery.min.js"></script>

  <script>
  $(document).ready(function(){

    $('#name').blur(function(){
        var inputValue=$(this).val();
        $.ajax({
            url:"validate.php",
            data:{
                inputValue:inputValue
            },
            type:"POST",
            success:function(res){
                if(res=='ko'){
                    $('#name_msg').html('Bắt buộc phải nhập!');
                    $('#name').focus();
                }
                else $('#name_msg').html('');
            }
        })
    })

    $('#phone').blur(function(){
        var inputValue=$(this).val();
        $.ajax({
            url:"validate.php",
            data:{
                inputValue:inputValue
            },
            type:"POST",
            success:function(res){
                if(res=='ko'){
                    $('#phone_msg').html('Bắt buộc phải nhập!');
                    $('#phone').focus();
                }
                else $('#phone_msg').html('');
            }
        })
    })

    $('#email').blur(function(){
        var inputValue=$(this).val();
        $.ajax({
            url:"validate.php",
            data:{
                inputValue:inputValue
            },
            type:"POST",
            success:function(res){
                if(res=='ko'){
                    $('#email_msg').html('Bắt buộc phải nhập!');
                    $('#email').focus();
                }
                else $('#email_msg').html('');
            }
        })
    })

    $('#address').blur(function(){
        var inputValue=$(this).val();
        $.ajax({
            url:"validate.php",
            data:{
                inputValue:inputValue
            },
            type:"POST",
            success:function(res){
                if(res=='ko'){
                    $('#address_msg').html('Bắt buộc phải nhập!');
                    $('#address').focus();
                }
                else $('#address_msg').html('');
            }
        })
    })

    $('.continue').click(function(){
        var name=$('#name').val();
        var phone=$('#phone').val();
        var email=$('#email').val();
        var address=$('#address').val();
        var gender=$('#gender').val();
        var note=$('#note').val();

        $.ajax({
            data:{
                name:name,
                phone:phone,
                email:email,
                address:address,
                gender:gender,
                note:note
            },
            type:"POST",
            url:"checkout-ajax.php",
            success:function(res){
                $('#checkoutContent').html(res);
                $('#notifycation').modal('show');
                //console.log(res);
            },
            error:function(){
                console.log(error);
            }
        })
    })

  })
  </script>