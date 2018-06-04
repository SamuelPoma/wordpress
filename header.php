<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo("description"); ?>">
    <link href="https://fonts.googleapis.com/css?family=Cutive|Domine|Fanwood+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <title></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('body_style'); ?>>

  <header>
    <div class="container-fluid">
       <div class="logo_cnt_left">
        <img src="http://www.johncatlin.co.uk/images/peaky_blinders.jpg" class="img-fluid" alt="">
      </div>
      <div class="nav-item_cnt">
        <div class="item_cnt">
          <?php wp_nav_menu(array(
            'theme_location' => 'header',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav-items'
          ));
          ?>
        </div>
      </div>
      <div class="logo_cnt_right">
        <img src="https://res.cloudinary.com/teepublic/image/private/s--L3YpfAzn--/t_Preview/b_rgb:191919,c_lpad,f_jpg,h_630,q_90,w_1200/v1488924542/production/designs/1299107_1.jpg" class="img-fluid" alt="">
      </div>
      <div class="logo_cnt_right rp">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </header>
    <?php if (is_front_page()) { ?>
    <div class="_container slide">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://i.pinimg.com/originals/87/08/18/87081839ffb081381920385fdb4f3862.jpg" class="img-fluid" alt="">
          </div>
          <div class="carousel-item">
            <img src="https://images8.alphacoders.com/594/thumb-1920-594275.jpg" class="img-fluid" alt="">
          </div>
          <div class="carousel-item">
            <img src="https://image.tmdb.org/t/p/original/s8vMp0biApA2f87XzInLjJVMXdU.jpg" class="img-fluid" alt="">
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  <?php } ?>
