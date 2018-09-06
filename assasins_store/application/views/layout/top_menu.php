  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/slick.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/design_halaman.css">
<header>
      <!-- TOP HEADER -->
      <div id="top-header">
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo anchor(base_url(), 'Weapons & Armors',['class' =>'navbar-brand', 'style' => 'font-family: electrical Regular'])?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li style="font-family: moaren Regular">
          <?php
          $text_cart_url = '<span class="glyphicon glyphicon-shopping-cart"  aria-hidden="true"></span>';
          $text_cart_url .= 'Inside Cart: ' . $this->cart->total_items() .' items';
          ?>
          <?=anchor('welcome/cart', $text_cart_url)?>
        </li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      </div>
      <!-- /TOP HEADER -->

      <!-- MAIN HEADER -->
      <div id="header">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
              <div class="header-logo">
                <a href="#" class="logo">
                  <img src="<?php echo base_url();?>bootstrap/img2/logo.png" alt="">
                </a>
              </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <h1 class="judul" style="color: white; font-family: electrical Regular" >Weapons & Armors</h1>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
              <div class="header-ctn">
                <!-- Wishlist -->
                
                  <div class="cart-dropdown">
                    <div class="cart-list">
                      <div class="product-widget">
                        <div class="product-img">
                          <img src="./img/product10.png" alt="">
                        </div>
                        <button class="delete"><i class="fa fa-close"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Cart -->

                <!-- Menu Toogle -->
              
                <!-- /Menu Toogle -->
              </div>
            </div>
            <!-- /ACCOUNT -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- /MAIN HEADER -->
    </header>