<?php
/*
Template Name: Casas
*/

get_header();
?>
<div class="container-full" id="hero"
    style="background-image: url(<?php echo the_field('image-main') ?>);margin-bottom:0;">
    <div class="container" id="hero-wrapper">
        <?php get_main_menu(); ?>

        <div class="hero-elemento">
            <h1 class="hero-title">
                CASAS EN VENTA
            </h1>
        </div>
    </div>
</div>
<div class="container-full">

</div>
<div class="container-full loop-casas">
    <div class="loop-casas__container">
        <div class="grid-casas">
            <?php
            if (have_rows('fraccionamientos')) : ?>
            <?php while (have_rows('fraccionamientos')) : the_row();
                    $image = get_sub_field('imagen');
                    $text = get_sub_field('titulo');
                    $link = get_sub_field('link'); ?>

            <div class="casa-item">
                <div class="casa-item__container">
                    <img src="<?php echo $image ?>" alt="">
                    <h3 class="casa-item__title"><?php echo $text ?></h3>


                </div>
                <a href="<?php echo $link ?>" class="casa-item__button">
                    <button>
                        CONOCE MÁS
                    </button>
                </a>
            </div>

            <?php endwhile; ?>
            <?php else : ?>

            <?php endif; ?>
        </div>
    </div>
</div>


<?php

get_footer();
?>