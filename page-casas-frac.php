<?php
/*
Template Name: Casas frac
*/

get_header();
?>

<div class="container-full" id="hero"
    style="background-image: url(<?php echo the_field('image-main') ?>);margin-bottom:0;">
    <div class="container" id="hero-wrapper">
        <?php get_main_menu(); ?>

        <div class="hero-elemento">
            <h1 class="hero-title">
                <?= get_the_title(); ?>
            </h1>
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
                'tag__in' => array(intval(get_field('etiqueta'))),
                'orderby'         => 'date',
                'order'           => 'ASC',
                'post_type'       => 'post',
                'post_status'     => 'publish',
                'suppress_filters' => true
            );
            $posts = get_posts($args);
            foreach ($posts as $post) :
            ?>
            <div class="casa-item">
                <div class="casa-item__container">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <h3 class="casa-item__title"><?php echo get_the_title(); ?></h3>
                    <p class="casa-item__paragraph"><?php echo get_the_excerpt(); ?></p>

                </div>
                <a href="<?php echo get_permalink(); ?>" class="casa-item__button">
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