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
<div class="container-full" style="padding-top:45px">
    <div>
        <h3 class="casa__title-fraccionamiento" style="color:#0569CC">
            Selecciona el fraccionamiento
        </h3>
    </div>

</div>
<div class="container-full loop-casas">
    <div class="loop-casas__container">
        <div class="grid-casas-fracs">
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
                        VER CASAS
                    </button>
                </a>
            </div>

            <?php endwhile; ?>
            <?php else : ?>

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="padding-bottom: 75px;">
        <div class="antesform">
            <div class="solicita-content">
                <h3>
                    VENTAJAS DE COMPRAR UNA<br>
                    <span>CASA EN PREVENTA</span>
                </h3>
            </div>

        </div>
        <div class="antesform">
            <?php

            echo the_field('video');
            ?>

        </div>
    </div>
</div>


<?php

get_footer();
?>