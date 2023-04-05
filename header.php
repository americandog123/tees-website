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

<nav class="main-menu">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Shop by Category</a>
      <ul class="sub-menu">
        <li><a href="#">T-Shirts</a></li>
        <li><a href="#">Hoodies</a></li>
        <li><a href="#">Sweatshirts</a></li>
        <li><a href="#">Tank Tops</a></li>
        <li><a href="#">Long Sleeve Shirts</a></li>
      </ul>
    </li>
    <li><a href="#">Shop by Tag</a>
      <ul class="sub-menu">
        <li><a href="#">Funny</a></li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">TV and Movies</a></li>
        <li><a href="#">Holidays</a></li>
      </ul>
    </li>
    <li><a href="#">Customize Your Own</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</nav>

        
    </header>