<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Marm Consulting</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- <nav class="navbar navbar-expand-md navbar-dark sticky-top text-center">
      <div class="container-fluid container-lg">
      <img src="<?php bloginfo('stylesheet_directory');?>/img/logo1-update-small.svg" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item hvr-underline-from-center">
              <a class="nav-link" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Our Services
              </a>
              <ul class="dropdown-menu dropdown-secondary border-0 text-center text-md-start" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Environmental Management</a></li>
                <li><a class="dropdown-item" href="#">Procurement Management</a></li>
                <li><a class="dropdown-item" href="#">Information Systems</a></li>
                <li><a class="dropdown-item" href="#">Telecommunication</a></li>
                <li><a class="dropdown-item" href="#">Specialist Training</a></li>
                <li><a class="dropdown-item" href="#">Specialist Recruitment</a></li>
              </ul>
            </li>
            <li class="nav-item hvr-underline-from-center">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item hvr-underline-from-center">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top text-center" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <a href="<?php echo home_url(); ?>" class="navbar-brand" href="#"><img src="<?php bloginfo('stylesheet_directory');?>/img/logo1-update-small.svg" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'marm-consulting-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>  
</nav>