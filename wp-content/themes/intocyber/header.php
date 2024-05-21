<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="robots" content="noindex, nofollow">
    <title><?php wp_title(); ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="main-body">
        <?php
        if (is_front_page()) : ?>
            <section id="header">
                <!-- Header -->
                <header>
                    <div class="container">
                        <div class="sub-block-header">
                            <div class="site-logo">
                                <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                                    <?php the_custom_logo(); ?>
                                <?php else : ?>
                                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php bloginfo('name'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="hamburger-menu">
                                <div class="hamburger-menu-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/hamburger.svg" alt="hamburger-menu-icon" class="show">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/close.svg" alt="hamburger-menu-icon" class="close">
                                </div>
                            </div>                         

                        </div>
                    </div>
                    <div id="main-nav-block">
                        <div id="sub-main-nav-block">
                            <div class="container">
                                <div class="block-header">
                                    <div class="nav-left-tab">
                                        <nav class="navbar">
                                            <?php
                                            wp_nav_menu(array(
                                                'theme_location'    => 'primary',
                                                'depth'             => 2,
                                                'container'         => 'div',
                                                'container_id'      => 'navbarNav'
                                            ));
                                            ?>
                                        </nav>
                                        <div class="nav-in-text">
                                            <h3>Get in Touch</h3>
                                            <p class="p16">Stay Connected, Get in Touch!</p>
                                            <div class="menu-list-info">
                                                <p class="p18">Are you ready to accelerate your cybersecurity sales? Contact
                                                    us today at<span class="pspan">+971528133079</span> or <span class="pspan">info@intocyber.com</span> to discover how we can drive
                                                    your growth.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="nav-right-tab">
                                        <div class="sub-nav-right-tab">
                                            <ul>
                                                <li><a href="#">Research Guidelines</a></li>
                                                <li><a href="#">Platform Terms & Conditions</a></li>
                                                <li><a href="#">Website Terms & Conditions</a></li>
                                                <li><a href="#">Privacy Cookies</a></li>
                                            </ul>
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/Linevtcl.svg" alt="Linevtcl">
                                            <button class="get-in">Get in Touch</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </header>
                <!-- End Header -->
                <!-- Banner Text Info here -->
                <div id="home-banner-txt">
                    <div class="container">
                        <div class="main-info-block">
                            <div class="banner-info-data">
                                <!-- Custom H1 Field -->
                                <?php $banner_title = get_field('banner_title', 'option'); ?>
                                <h1><?php echo $banner_title; ?></h1>
                                <?php $banner_description = get_field('banner_description', 'option'); ?>
                                <p class="p18"><?php echo $banner_description; ?></p>
                                <button id="btn-bm">Book Meeting</button>
                            </div>
                            <div class="arrow-dowm" style="display:none">
                                <p class="arrow-txt">SCROLL</p>
                                <div class="arrow-down-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/down-arrow.svg" alt="down-arrow">
                                </div>
                            </div>
                            <div class="icon-scroll">
                                <div class="mouse">
                                    <div class="wheel"></div>
                                </div>
                                <div class="icon-arrows">
                                    <span></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Banner Text -->
            </section>
        <?php else : ?>
            <section id="sub-header">
                <!-- Header -->
                <header>
                    <div class="container">
                        <div class="sub-block-header">
                            <div class="site-logo">
                                <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                                    <?php the_custom_logo(); ?>
                                <?php else : ?>
                                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php bloginfo('name'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="hamburger-menu">
                                <div class="hamburger-menu-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/hamburger.svg" alt="hamburger-menu-icon" class="show">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/close.svg" alt="hamburger-menu-icon" class="close">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div id="main-nav-block">
                        <div id="sub-main-nav-block">
                            <div class="container">
                                <div class="block-header">
                                    <div class="nav-left-tab">
                                        <nav class="navbar">
                                            <?php
                                            wp_nav_menu(array(
                                                'theme_location'    => 'primary',
                                                'depth'             => 2,
                                                'container'         => 'div',
                                                'container_id'      => 'navbarNav'
                                            ));
                                            ?>
                                        </nav>
                                        <div class="nav-in-text">
                                            <h3>Get in Touch</h3>
                                            <p class="p16">Stay Connected, Get in Touch!</p>
                                            <div class="menu-list-info">
                                                <p class="p18">Are you ready to accelerate your cybersecurity sales? Contact
                                                    us today at<span class="pspan">+971528133079</span> or <span class="pspan">info@intocyber.com</span> to discover how we can drive
                                                    your growth.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="nav-right-tab">
                                        <div class="sub-nav-right-tab">
                                            <ul>
                                                <li><a href="#">Research Guidelines</a></li>
                                                <li><a href="#">Platform Terms & Conditions</a></li>
                                                <li><a href="#">Website Terms & Conditions</a></li>
                                                <li><a href="#">Privacy Cookies</a></li>
                                            </ul>
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/Linevtcl.svg" alt="Linevtcl">
                                            <button class="get-in">Get in Touch</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </header>
                <!-- End Header -->

                <!-- Banner Text Info here -->
                <div id="sub-home-banner-txt">
                    <div class="container">
                        <div class="banner-img-main-info-block">
                            <?php $banner_image = get_field('banner_image'); ?>
                            <?php if (!empty($banner_image)) { ?>
                                <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
                            <?php } else { ?>
                                <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/wwd-img.png" alt="default banner Image" />
                            <?php } ?>

                            <div class="sub-banner-data">
                                <div class="banner-info-data">
                                    <?php $banner_title = get_field('banner_title'); ?>
                                    <?php if (!empty($banner_title)) { ?>
                                        <h1><?php echo $banner_title; ?></h1>
                                    <?php } else { ?>
                                        <h1 class="default-title"><?php the_title(); ?></h1>
                                    <?php } ?>
                                    <?php
                                    $banner_description = get_field('banner_description');
                                    if (!empty($banner_description)) : ?>
                                        <p class="p18"><?php echo $banner_description; ?></p>
                                    <?php endif; ?>

                                    <?php
                                    $button_link = get_field('banner_button_link');
                                    $banner_button_text = get_field('banner_button_text');
                                    ?>
                                    <?php if (!empty($banner_button_text)) : ?>
                                        <a href="<?php echo esc_url($button_link); ?>">
                                            <button id="btn-bm"><?php echo esc_html($banner_button_text); ?></button>
                                        </a>
                                    <?php endif; ?>



                                </div>
                                <!--<div class="arrow-dowm">-->
                                <!--    <p class="arrow-txt">SCROLL</p>-->
                                <!--    <div class="arrow-down-img">-->
                                <!--        <img src="<? php // bloginfo('template_url'); 
                                                        ?>/assets/images/down-arrow.svg"-->
                                <!--            alt="down-arrow">-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="icon-scroll">
                                    <div class="mouse">
                                        <div class="wheel"></div>
                                    </div>
                                    <div class="icon-arrows">
                                        <span></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- End Banner Text -->


            </section>
        <?php endif ?>