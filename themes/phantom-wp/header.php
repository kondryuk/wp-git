<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class('is-preload'); ?>>

<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="<?php echo home_url('/'); ?>" class="logo">
                <span class="symbol">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
                </span>
                <span class="title"><?php bloginfo('name'); ?></span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <h2>Menu</h2>
        <?php
        wp_nav_menu([
            'theme_location' => 'main_menu',
            'container'      => false
        ]);
        ?>
    </nav>
