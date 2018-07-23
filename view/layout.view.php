<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic page needs -->
  <meta charset="utf-8">
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MyStore premium HTML5 &amp; CSS3 template</title>
  <base href="http://localhost/shop/">
  <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
  <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"
  />
  <!-- Mobile specific metas  , -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon  -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>

  <!-- CSS Style -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">

  <!-- font-awesome & simple line icons CSS -->
  <link rel="stylesheet" type="text/css" href="public/css/font-awesome.css" media="all">
  <link rel="stylesheet" type="text/css" href="public/css/simple-line-icons.css" media="all">

  <!-- owl.carousel CSS -->
  <link rel="stylesheet" type="text/css" href="public/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="public/css/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="public/css/owl.transitions.css">

  <!-- animate CSS  -->
  <link rel="stylesheet" type="text/css" href="public/css/animate.css" media="all">

  <!-- flexslider CSS -->
  <link rel="stylesheet" type="text/css" href="public/css/flexslider.css">

  <!-- jquery-ui.min CSS  -->
  <link rel="stylesheet" type="text/css" href="public/css/jquery-ui.css">

  <!-- Revolution Slider CSS -->
  <link href="public/css/revolution-slider.css" rel="stylesheet">

  <!-- style CSS -->
  <link rel="stylesheet" type="text/css" href="public/css/style.css" media="all">
</head>

<body class="cms-index-index cms-home-page">

  <!-- mobile menu -->
  <div id="mobile-menu">
    <ul>
      <li>
        <a href="index.html" class="home1">Home</a>
      </li>
      <li>
        <a href="contact_us.html">Contact us</a>
      </li>
      <li>
        <a href="about_us.html">About us</a>
      </li>
      <li>
        <a href="blog_full_width.html">Blog</a>
      </li>
    </ul>
  </div>
  <!-- end mobile menu -->
  <div id="page">

    <!-- Header -->
    <header>
      <div class="header-container">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-sm-4 hidden-xs">
                <!-- Default Welcome Message -->
                <div class="welcome-msg ">Welcome to MyStore! </div>
                <span class="phone hidden-sm">Call Us: +123.456.789</span>
              </div>

              <!-- top links -->
              <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
                <div class="links">
                  <div class="myaccount">
                    <a title="My Account" href="account_page.html">
                      <i class="fa fa-user"></i>
                      <span class="hidden-xs">My Account</span>
                    </a>
                  </div>

                  <div class="login">
                    <a href="account_page.html">
                      <i class="fa fa-unlock-alt"></i>
                      <span class="hidden-xs">Log In</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-md-3 col-xs-12">
              <!-- Header Logo -->
              <div class="logo">
                <a title="e-commerce" href="trang-chu.html">
                  <img alt="responsive theme logo" src="public/images/logo.png">
                </a>
              </div>
              <!-- End Header Logo -->
            </div>
            <div class="col-xs-9 col-sm-6 col-md-6">
              <!-- Search -->

              <div class="top-search">
                <div id="search">
                  <form method="POST" name="form1" action="search.php">
                    <div class="input-group">
                      <select class="cate-dropdown hidden-xs" name="category_id">
                      <option value="0"><?php echo "Tất cả"; ?></option>
                      <?php
                      foreach($categories as $c){
                      ?>
                        <option value=<?php echo $c->id; ?>><?php echo $c->name; ?></option>
                      <?php } ?>
                      </select>
                      <input type="text" class="txt-search" class="form-control" placeholder="&nbsp;Nhập từ khóa" name="search">
                      <button class="btn-search" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- End Search -->
            </div>
            <!-- top cart -->

            <div class="col-lg-3 col-xs-3 top-cart">
            
              <div class="top-cart-contain">
                <div class="mini-cart">
                  <div class="basket dropdown-toggle">
                    <a href="gio-hang.html">
                      <div class="cart-icon">
                        <i class="fa fa-shopping-cart"></i>
                      </div>
                      <div class="shoppingcart-inner hidden-xs">
                        <span class="cart-title"><?php if(isset($_SESSION['cartTitle'])) echo $_SESSION['cartTitle']; else echo "Giỏ hàng đang trống!" ?></span>
                        <span class="cart-total">
                          <span class="totalQty"><?php if(isset($_SESSION['cartQty'])) echo $_SESSION['cartQty']; ?></span>
                          <span class="cartPrice"><?php if(isset($_SESSION['cartPrice'])) echo $_SESSION['cartPrice']; ?></span>
                        </span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            
            </div>
            
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- Navbar -->
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <div class="mm-toggle-wrap">
              <div class="mm-toggle">
                <i class="fa fa-align-justify"></i>
              </div>
              <span class="mm-label">Categories</span>
            </div>
            <div class="mega-container visible-lg visible-md visible-sm">
              <div class="navleft-container">
                <div class="mega-menu-title">
                  <h3>Categories</h3>
                </div>
                <div class="mega-menu-category" style="display:none;">
                  <ul class="nav">
                  <?php
                  foreach($categories as $c){
                  ?>
                    <li>
                      <a href="<?php echo $c->url; ?>">
                        <i class="icon fa <?php echo $c->icon; ?>"></i><?php echo $c->name; ?></a>
                        <div class="wrap-popup column1">
                          <div class="popup">
                            <div class="row">
                              <div class="col-md-12">
                                <ul class="nav">
                                  <?php
                                  for($i=1;$i<=5;$i++){
                                  ?>
                                  <li>
                                      <span>
                                      <?php
                                      switch($i){
                                        case "1": ?>.<a href='<?php echo $c->url."/price/1.html"; ?>' class='price_level'>Dưới 5 triệu</a><?php ;break;
                                        case "2": ?>.<a href='<?php echo $c->url."/price/2.html"; ?>' class='price_level'>5 - 10 triệu</a><?php ;break;
                                        case "3": ?>.<a href='<?php echo $c->url."/price/3.html"; ?>' class='price_level'>10 - 15 triệu</a><?php ;break;
                                        case "4": ?>.<a href='<?php echo $c->url."/price/4.html"; ?>' class='price_level'>15 - 20 triệu</a><?php ;break;
                                        default: ?>.<a href='<?php echo $c->url."/price/5.html"; ?>' class='price_level'>Trên 20 triệu</a><?php ;break;
                                      }
                                      ?>
                                      </span>
                                  </li>
                                  <?php } //Dong for ?>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div class="mtmegamenu">
              <ul>
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item">
                    <a href="trang-chu.html">
                      <div class="title title_font">
                        <span class="title-text">Home</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item">
                    <a href="contact_us.html">
                      <div class="title title_font">
                        <span class="title-text">Contact Us</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item">
                    <a href="about_us.html">
                      <div class="title title_font">
                        <span class="title-text">about us</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item">
                    <a href="blog_full_width.html">
                      <div class="title title_font">
                        <span class="title-text">Blog</span>
                      </div>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end nav -->

    <?php include "view/$nameView.view.php"; ?>

    <!-- Footer -->
    <footer>
      <div class="footer-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-7">
              <form id="newsletter-validate-detail" method="post" action="#">
                <h3 class="hidden-sm">Sign up for newsletter</h3>
                <div class="newsletter-inner">
                  <input class="newsletter-email" name='Email' placeholder='Enter Your Email' />
                  <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                </div>
              </form>
            </div>
            <div class="social col-md-4 col-sm-5">
              <ul class="inline-mode">
                <li class="social-network fb">
                  <a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="social-network googleplus">
                  <a title="Connect us on Google+" target="_blank" href="https://plus.google.com/">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <li class="social-network tw">
                  <a title="Connect us on Twitter" target="_blank" href="https://twitter.com/">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="social-network linkedin">
                  <a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="social-network rss">
                  <a title="Connect us on Instagram" target="_blank" href="https://instagram.com/">
                    <i class="fa fa-rss"></i>
                  </a>
                </li>
                <li class="social-network instagram">
                  <a title="Connect us on Instagram" target="_blank" href="https://instagram.com/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
            <div class="footer-logo">
              <a href="index-2.html">
                <img src="public/images/footer-logo.png" alt="fotter logo">
              </a>
            </div>
            <p>Lorem Ipsum is simply dummy text of the print and typesetting industry.</p>
            <div class="footer-content">
              <div class="email">
                <i class="fa fa-envelope"></i>
                <p>Support@themes.com</p>
              </div>
              <div class="phone">
                <i class="fa fa-phone"></i>
                <p>(800) 0123 456 789</p>
              </div>
              <div class="address">
                <i class="fa fa-map-marker"></i>
                <p> My Company, 12/34 - West 21st Street, New York, USA</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
            <div class="footer-links">
              <h3 class="links-title">Information
                <a class="expander visible-xs" href="#TabBlock-1">+</a>
              </h3>
              <div class="tabBlock" id="TabBlock-1">
                <ul class="list-links list-unstyled">
                  <li>
                    <a href="#s">Delivery Information</a>
                  </li>
                  <li>
                    <a href="#">Discount</a>
                  </li>
                  <li>
                    <a href="sitemap.html">Sitemap</a>
                  </li>
                  <li>
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="faq.html">FAQs</a>
                  </li>
                  <li>
                    <a href="#">Terms &amp; Condition</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
            <div class="footer-links">
              <h3 class="links-title">Insider
                <a class="expander visible-xs" href="#TabBlock-3">+</a>
              </h3>
              <div class="tabBlock" id="TabBlock-3">
                <ul class="list-links list-unstyled">
                  <li>
                    <a href="sitemap.html"> Sites Map </a>
                  </li>
                  <li>
                    <a href="#">News</a>
                  </li>
                  <li>
                    <a href="#">Trends</a>
                  </li>
                  <li>
                    <a href="about_us.html">About Us</a>
                  </li>
                  <li>
                    <a href="contact_us.html">Contact Us</a>
                  </li>
                  <li>
                    <a href="#">My Orders</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
            <div class="footer-links">
              <h3 class="links-title">Service
                <a class="expander visible-xs" href="#TabBlock-4">+</a>
              </h3>
              <div class="tabBlock" id="TabBlock-4">
                <ul class="list-links list-unstyled">
                  <li>
                    <a href="account_page.html">Account</a>
                  </li>
                  <li>
                    <a href="wishlist.html">Wishlist</a>
                  </li>
                  <li>
                    <a href="shopping_cart.html">Shopping Cart</a>
                  </li>
                  <li>
                    <a href="#">Return Policy</a>
                  </li>
                  <li>
                    <a href="#">Special</a>
                  </li>
                  <li>
                    <a href="#">Lookbook</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-coppyright">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2018 MyStore. Edit by
              <a href="https://www.facebook.com/huongnguyen.nh"> Huong </a>. All Rights Reserved. </div>
            <div class="col-sm-6 col-xs-12">
              <div class="payment">
                <ul>
                  <li>
                    <a href="#">
                      <img title="Visa" alt="Visa" src="public/images/visa.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img title="Paypal" alt="Paypal" src="public/images/paypal.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img title="Discover" alt="Discover" src="public/images/discover.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img title="Master Card" alt="Master Card" src="public/images/master-card.png">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="totop"> </a>
    <!-- End Footer -->

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

  </div>


  <!-- JS -->

  <!-- jquery js -->
  <script type="text/javascript" src="public/js/jquery.min.js"></script>

  <!-- bootstrap js -->
  <script type="text/javascript" src="public/js/bootstrap.min.js"></script>


  <!-- owl.carousel.min js -->
  <script type="text/javascript" src="public/js/owl.carousel.min.js"></script>

  <!-- bxslider js -->
  <script type="text/javascript" src="public/js/jquery.bxslider.js"></script>

  <!-- Slider Js -->
  <script type="text/javascript" src="public/js/revolution-slider.js"></script>

  <!-- megamenu js -->
  <script type="text/javascript" src="public/js/megamenu.js"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var mega_menu = '0';

  /* ]]> */
  </script>

  <!-- jquery.mobile-menu js -->
  <script type="text/javascript" src="public/js/mobile-menu.js"></script>

  <!--jquery-ui.min js -->
  <script type="text/javascript" src="public/js/jquery-ui.js"></script>

  <!-- main js -->
  <script type="text/javascript" src="public/js/main.js"></script>

  <!-- countdown js -->
  <script type="text/javascript" src="public/js/countdown.js"></script>

  <!-- Revolution Slider -->
  <script type="text/javascript">
    jQuery(document).ready(function () {
      jQuery('.tp-banner').revolution(
        {
          delay: 9000,
          startwidth: 1170,
          startheight: 530,
          hideThumbs: 10,

          navigationType: "bullet",
          navigationStyle: "preview1",

          hideArrowsOnMobile: "on",

          touchenabled: "on",
          onHoverStop: "on",
          spinner: "spinner4"
        });
    });
  </script>

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
          //console.log(res);
        },
        error:function(){
          console.log("Error!");
        }
      })
    })

    $('.btn-search').click(function(){
      var txtSearch=$('.txt-search').val();
      if(txtSearch=='') {
      // console.log(txtSearch);
        alert('Chưa nhập liệu!');
        $('.txt-search').focus();
      }
    })

  })
  </script>



</body>

</html>
