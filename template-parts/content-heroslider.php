<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package virtus
 */

?>
<div class=" container-full" id="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="overlay"></div>
    <div class="container" id="hero-wrapper">
        <!-- <div class="menu-menu-1">
            <ul id="primary-menu" class="menu">
                <li>
                    <a href="<?php echo get_site_url(); ?>">INICIO</a>
                </li>
                <li>
                    <a href="#">TERENOS</a>
                </li>
        
                <li>
                    <a href="http://localhost/virtus/contacto/">CONTACTOS</a>
                </li>
            </ul>
        </div> -->

        <?php get_main_menu(); ?>
        <div>

        </div>
        <div class="home-title__content">
            <?php the_content(); ?>
            <div class="scroll-prompt" style="opacity: 1;">
                <div class="scroll-prompt-arrow-container">
                    <div class="scroll-prompt-arrow">
                        <div></div>
                    </div>
                    <div class="scroll-prompt-arrow">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>