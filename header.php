<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO: meta description + Open Graph -->
    <meta name="description" content="Estatein — discover your dream property. Explore featured listings, client stories and expert real estate guidance.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:description" content="Discover your dream property with Estatein. Explore our featured listings to find the home that matches your dreams.">
    <meta property="og:image" content="<?php echo estatein_img('hero-building.webp'); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Accessibility: skip to content -->
<a class="skip-link" href="#main-content">Skip to content</a>

<!-- TOP BAR -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-inner">
            <span>✨ Discover Your Dream Property with Estatein</span>
            <a href="#" class="top-bar-link">Learn More</a>
            <button class="top-bar-close">✕</button>
        </div>
    </div>
</div>

<!-- HEADER -->
<header class="site-header">
    <div class="container">
        <div class="header-inner">

            <a href="#" class="logo">
                <img src="<?php echo estatein_img('logo.webp'); ?>" alt="Estatein">
            </a>

            <nav class="main-nav">
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Properties</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </nav>

            <a href="#" class="btn-outline">Contact Us</a>

            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </div>
</header>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Properties</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</div>