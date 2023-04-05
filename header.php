<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>

<div class="hero">
  <div class="hero-content">
    <h1>Welcome to Our Store</h1>
    <p>Find the best products for your needs</p>
    <a href="#" class="btn">Shop Now</a>
  </div>
</div>

        
    </header>