<?php
/*
Template Name: Casas
*/

get_header();
?>
<div class="container-full" id="hero" style="background-image: url(<?php echo the_field('image-main') ?>);margin-bottom:0;">
    <div class="container" id="hero-wrapper">
        <?php get_main_menu(); ?>

        <div class="hero-elemento">
            <h1 class="hero-title">
              CASAS EN VENTA
            </h1>
        </div>
    </div>
</div>

<div class="container-full main-casa">
    <div class="main-casas__container">
        <div class="main-casas___content">
        <div class="main-casas___text">
        <h2 class="main-casas___title">
            <?php echo the_field('casa_principal_titulo') ?>
            
            </h2>
            <p class="main-casas___paragraph">
            <?php echo the_field('casa_principal_texto') ?>
        
            </p>
            
            <a href="<?php echo the_field('casa_principal_link');?>"><button>CONOCE MÁS</button></a>
        </div>
        </div>
        <div class="main-casas__image">
        <img src="<?php echo the_field('casa_principal_image');?>" alt="imagen principal de casa">
        </div>
    </div>
</div>


<div class="container-full loop-casas">
    <div class="loop-casas__container">
        <div class="grid-casas">
            <?php
            $args  = array(
                'posts_per_page'  => 5000,
                'offset'          => 0,
                'category_name'   => 'casas',
                'orderby'         => 'post_date',
                'order'           => 'ASC',
                'post_type'       => 'post',
                'post_status'     => 'publish',
                'suppress_filters' => true ); 
            $posts = get_posts($args);
                foreach ($posts as $post) :
                ?>
                <div class="casa-item">
                    <div class="casa-item__container">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                        <h3 class="casa-item__title"><?php echo get_the_title();?></h3>
                        <p class="casa-item__paragraph"><?php echo get_the_excerpt();?></p>
                    
                    </div>
                    <a href="<?php echo get_permalink();?>" class="casa-item__button">
                            <button>
                            CONOCE MÁS
                            </button>
                        </a>
                </div>
                <?php endforeach; ?>
        </div>

        
    </div>
</div>

<?php

get_footer();
?>