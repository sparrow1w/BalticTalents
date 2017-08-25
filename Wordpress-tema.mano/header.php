<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
  
    <?php wp_head(); ?>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <?php wp_nav_menu( array(
      'theme_location' => 'primary',
      'menu_class' => 'navbar',
      'menu_id' => 'primary-menu' ) ); ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php bloginfo('template_directory');?>/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1><?php echo the_title(); ?>
              </h1>
              <span class="subheading"><?php echo get_bloginfo( 'description' ); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>