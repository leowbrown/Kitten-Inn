<?php

get_header(); ?>

<div class="welcome-con section">
    <div class="hero-img-con">
        <img
            src="https://images.pexels.com/photos/2870510/pexels-photo-2870510.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
            class="hero-img"
            alt=""
        />
        <img
            src="https://images.pexels.com/photos/1754986/pexels-photo-1754986.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
            class="hero-img-mb"
            alt=""
        />
    </div>
    <div class="cta-con fade-in">
        <h1 class="home-title"><?php bloginfo('name'); ?></h1>
        <h3 class="home-sub"><?php bloginfo('description'); ?></h3>
    </div>
</div>

<div class="info-con section">
    <div class="info-item-con fade-in">
        <div class="icon-con"><i class="fas fa-heart"></i></div>
        <h1 class="info-title">Donate</h1>
        <p class="info-sub">Donate and support us</p>
        <button class="info-button"><a href="index.php/donate/">Donate</a></button>
    </div>

    <div class="info-item-con fade-in">
        <div class="icon-con"><i class="fas fa-paw"></i></div>
        <h1 class="info-title">Adopt</h1>
        <p class="info-sub">Adopt a cat or Kitten</p>
        <button class="info-button"><a href="index.php/adopt">Adopt</a></button>
    </div>

    <div class="info-item-con fade-in">
        <div class="icon-con"><i class="fas fa-tshirt"></i></div>
        <h1 class="info-title">Merch</h1>
        <p class="info-sub">Buy a t-shirt and support our cause</p>
        <button class="info-button"><a href="index.php/shop">Shop</a></button>
    </div>
</div>

<?php
  get_footer(); 

/**
 * Template Name: home
 */
?>
