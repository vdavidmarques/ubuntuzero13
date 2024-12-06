<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>

    <title itemprop="name">
        <?php
        if (is_home()) {
            echo "";
        } elseif (is_tax()) {
            echo single_cat_title() . ' |';
        } elseif (is_archive()) {
            echo get_the_archive_title() . ' |';
        } elseif (is_singular()) {
            echo single_post_title() . ' |';
        } else {
            echo get_the_title();
        }
        ?>
        Ubuntu Zero 13
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header class="header" role="banner">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/menu-icon.svg" alt="Menu - Ubuntu Zero 13" class="menu-icon" onclick="openMenu()">
            <div class="header--container">
                <button onclick="closeMenu()" class="bg-close-menu-mobile">
                    Fechar menu
                </button>
                <div class="header--container--branding">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <div class="header--container--icons">
                    <div class="top">
                        <div class="menu-items">
                            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'custom_header_menu',
                                    'menu'           => 'Menu do Header',
                                    'menu_id'        => 'custom-header-menu',
                                    'menu_class'     => 'main-menu',
                                    'fallback_cb'    => '__return_false',
                                ));
                                ?>
                            </nav>                           
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="main">
            <main id="content" role="main">