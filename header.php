<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title();?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
            <a href="<?php echo site_url() ?>"><strong>Power Up</strong>Theme</a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
            <nav class="main-navigation">
                <ul>
                <li><a href="<?php echo site_url('/about-us') ?>">ABOUT US</a></li>
                <li><a href="<?php echo site_url('/blogs') ?>">BLOGS</a></li>
                <li><a href="<?php echo site_url('/pages') ?>">PAGES</a></li>
                <li><a href="<?php echo site_url('/contact-us') ?>">CONTACT US</a></li>
                <li><a href="<?php echo site_url('/projects') ?>"">PROJECTS</a></li>
                </ul>
            </nav>
        <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
        </div>
    </div>
</header>    
