<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package virtus
 */

get_header();
?>
<?php
 $ID_POST =null;
while (have_posts()):
    the_post();
    $ID_POST = get_the_ID();
?>
<div class="container-full" id="hero" style="background-image: url(<?php echo the_field('imagen_header') ?>);margin-bottom:0;">
    <div class="container" id="hero-wrapper">
        <?php get_main_menu(); ?>

        <div class="hero-elemento">
            <h1 class="hero-title">
              <?php echo get_the_title($ID_POST);?>
            </h1>
        </div>
    </div>
</div>

<div class="container-full casa_title__container">
    <div>
        <h2 class="casa__title">
            <?php echo the_field('title_casa');?>
        </h2>
        <h3 class="casa__title-fraccionamiento">
            <?php echo the_field('fraccionamiento_title');?>
        </h3>
    </div>
</div>


<div class="container-full">
    <div class="content-casa__container">
        <div class="content-casa__image">
            <img src="<?php echo the_field('casa_primera_imagen') ?>" alt="Primera imagen de la casa">
        </div>

        <div class="content-casa__text">
            <div>
                <p class="content-casa__paragraph">
                <?php echo the_field('casa_primer_texto') ?>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="container-full">
    <div class="caracteristicas__container">
        <?php
            if( have_rows('caracteristicas') ):?>
                <?php while( have_rows('caracteristicas') ) : the_row();  $image = get_sub_field('caracteristica_imagen');  $text = get_sub_field('caracteristica_text');?>  
                    <div class="caracteristicas__item">
                        <img src="<?php echo $image;?>" alt="image">
                        <h4>
                            <?php echo $text ;?>
                        </h4>
                    </div>
                <?php endwhile;?>
        <?php  else : ?>
                No hay
        <?php  endif; ?>
    </div>
</div>


<div class="container-full fraccionamiento_seccion">
    <div class="fraccionamiento_seccion__container">
        <div class="fraccionamiento_seccion__text">
            <p>
                <?php echo the_field('fraccionamiento_texto');?>
            </p>
        </div>
        <div class="fraccionamiento_seccion__image">
            <img src="<?php echo the_field('fraccionamiento_imagen');?>" alt="alt">
        </div>
    </div>
</div>

<div class="container-full imagenes">
    <div class="imagenes__container">
        <div class="imagenes__imagen">
            <img src="<?php echo the_field('imagenes_1');?>" alt="alt">
        </div>

        <div class="imagenes__imagen">
            <img src="<?php echo the_field('imagenes_2');?>" alt="alt">
        </div>

        <div class="imagenes__imagen">
            <img src="<?php echo the_field('imagenes_3');?>" alt="alt">
        </div>
    </div>
</div>
<div class="line-tour"></div>
<?php if(get_field('tourvirtual') !== '' || get_field('tourvirtual') !== null) :?>
<div class="container-full tourvirtual-title__seccion">
    <div>
        <h2 class="tourvirtual__title">
          TOUR VIRTUAL
        </h2>
    </div>
</div>

<div class="container-full tourvirtual-seccion">
    <div class="tourvirtual">
    <iframe width='853' height='480' src='<?php echo the_field('tourvirtual');?>' frameborder='0' allowfullscreen allow='xr-spatial-tracking'></iframe>
    </div>
</div>
<?php endif;?>
<div class="container-full button-seccion">
        <div class="">
            <a href="<?php echo get_site_url() . "/contacto/";?>">
                <button>
                    SOLICITA INFORMACIÓN
                </button>
            </a>
        </div>
</div>

<div class="container-full fraccionamiento-abajo">
    <div class="fraccionamiento-abajo__container">
        <div class="fraccionamiento-abajo__image">
            <img src="<?php echo the_field('fraccionamiento_abajo_imagen');?>" alt="alt">
        </div>
        <div class="fraccionamiento-abajo__text">
            <div class="fraccionamiento-abajo-content">
                <h2>Detalles</h2>
                <p>
                    <?php echo the_field('info_fraccionamiento');?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-full ultima-seccion">
    <div class="ultima-seccion__container">
        <div class="ultima-seccion__title">
            <h2><?php echo the_field('ultima_seccion-titulo');?></h2>
        </div>
        <div class="ultima-seccion-images">
            <div class="ultima-seccion__image">
                <img src="<?php echo the_field('ultima-seccion-image1');?>" alt="alt">
                <h4><?php echo the_field('ultima-seccion-image1-title');?></h4>
            </div>

            <div class="ultima-seccion__image">
                <img src="<?php echo the_field('ultima-seccion-image2');?>" alt="alt">
                <h4><?php echo the_field('ultima-seccion-image2-title');?></h4>
            </div>

            <div class="ultima-seccion__image">
                <img src="<?php echo the_field('ultima-seccion-image3');?>" alt="alt">
                <h4><?php echo the_field('ultima-seccion-image3-title');?></h4>
            </div>
        </div>
    </div>
</div>
<?php  
endwhile;
get_footer();

