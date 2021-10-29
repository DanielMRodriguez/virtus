<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package virtus
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald:wght@300;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Virtus</title>
    <?php wp_head(); ?>
    <style>
    .antesform {
        display: block;
        width: 100%;
        text-align: center;
        padding: 15px 10px;
    }

    .content__antesform {
        padding: 55px 10px;
    }

    .title__antesform {
        font-size: 40px;
        color: black;
        text-transform: uppercase;
        text-align: center;

    }
    </style>
</head>


<body>
    <?php if (!is_single(3101)) : ?>
    <div class="menu-icon-movil">
        <div class="logo-movile-header">
            <?php echo get_custom_logo(); ?>
        </div>
        <div class="menu-icon-right">
            <div class="menuIconH" id="menuHamburguer">
                <div class="menu__tap-1 no-ani"></div>
                <div class="menu__tap-2 no-ani"></div>
                <div class="menu__tap-3 no-ani"></div>
            </div>
        </div>
    </div>

    <div class="menu-movil-content" id="menu-movil-container">

        <?php
            wp_nav_menu(
                array(
                    'menu_id'        => 'primary-menu',
                    'menu_class'    => 'menu-movil-l',
                    'container'         => 'div',
                    'container_class' => 'menu-movil'
                )
            );
            ?>
    </div>
    <?php endif; ?>

    <header class="container-full">
        <div class="container">
            <div class="row header-content">
                <div class="site-logo">
                    <!-- <img src="./assets/img/logo.jpg" alt="logo" class="site-logo-img" /> -->
                    <?php echo get_custom_logo(); ?>
                </div>

                <div class="header-widget">
                    <div class="widget-redes-header">
                        <div class="widget-redes-list">
                            <?php dynamic_sidebar('header-1');
                            ?>
                        </div>
                    </div>


                    <?php dynamic_sidebar('telefono-1');
                    ?>


                    <div class="widget-email">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background: new 0 0 512 512" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M467,76H45C20.137,76,0,96.262,0,121v270c0,24.885,20.285,45,45,45h422c24.655,0,45-20.03,45-45V121
			C512,96.306,491.943,76,467,76z M460.698,106c-9.194,9.145-167.415,166.533-172.878,171.967c-8.5,8.5-19.8,13.18-31.82,13.18
			s-23.32-4.681-31.848-13.208C220.478,274.284,64.003,118.634,51.302,106H460.698z M30,384.894V127.125L159.638,256.08L30,384.894z
			 M51.321,406l129.587-128.763l22.059,21.943c14.166,14.166,33,21.967,53.033,21.967c20.033,0,38.867-7.801,53.005-21.939
			l22.087-21.971L460.679,406H51.321z M482,384.894L352.362,256.08L482,127.125V384.894z" />
                                </g>
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                        <p>virtus.bienesraices@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </header>