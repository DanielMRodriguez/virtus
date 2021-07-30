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
while (have_posts()) :
    the_post();
    $ID_POST = get_the_ID();
?>



<div class="container-full" id="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="overlay"></div>
    <div class="container" id="hero-wrapper">
        <?php get_main_menu(); ?>

        <div class="hero-elemento">
            <h1 class="hero-title">
                <?php //the_title();
                    $var = get_the_title($ID_POST);
                    $slug = get_post_field('post_name', get_post());

                    echo transform_title($var); ?>
            </h1>
            <div class="scroll-prompt" scroll-prompt="" ng-show="showPrompt" style="opacity: 1;">
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
<div class="container">
    <main class="content-page">
        <aside>
            <ul class="list-terrenos">
                <?php
                    function post_actual($postActual, $postLoop)
                    {
                        if ($postActual == $postLoop) {
                            return "active";
                        }
                    }
                    $args  = array(
                        'category_name'        => 'proyectos',
                        'orderby'         => 'post_date',
                        'order'           => 'DESC'
                    );
                    $posts = get_posts($args);

                    foreach ($posts as $post) {


                        // var_dump($ID_POST);
                        // var_dump($post->ID);
                        // die;
                        echo "<li><a href='" .  get_permalink($post) . "' class=" . post_actual($ID_POST, $post->ID) . ">$post->post_title</a></li>";

                        $active = false;
                    }


                    ?>
            </ul>
        </aside>
        <article>
            <h2 class="title-proyecto">CONOCE MÁS SOBRE EL PROYECTO</h2>

            <?php echo the_content(); ?>
            <div class="row" id="text-footer-proyecto">
                <div class="img-text">
                    <img src="<?php the_field('img-text', $ID_POST); ?>" alt="img">
                </div>
                <div class="detalles">
                    <div class="detalles-item">

                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/static/check.jpg" alt=" Check">
                            <span>Estatus:</span> <?php the_field('status', $ID_POST);
                                                        ?>
                        </p>
                    </div>

                    <div class="detalles-item">

                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/static/check.jpg" alt=" Check">
                            <span>Superficie:</span> <?php the_field('superficie', $ID_POST); ?>
                        </p>
                    </div>

                    <div class="detalles-item">

                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/static/check.jpg" alt=" Check">
                            <span>Formas de pago:</span> <?php the_field('forma_de_pago', $ID_POST); ?>
                        </p>
                    </div>

                    <div class="detalles-item">

                        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/static/check.jpg" alt=" Check">
                            <span>Precio:</span> <?php the_field('precio', $ID_POST); ?>
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </main>
</div>

<!-- $slug -->


<?php

    $argsIma = array(
        'post_type' => 'sliders',
        'tax_query' => array(
            array(
                'taxonomy' => 'Locations',
                'terms' => $slug,
                'field' => 'slug',
                'include_children' => true,
                'operator' => 'IN'
            )
        ),

    );
    $terrenoImages = new WP_Query($argsIma);
    // var_dump($slug);
    // die;
    if ($terrenoImages->have_posts()) : ?>
<div class="container-full terreno-images">
    <div class="container">
        <div class="terreno-images-content">
            <!-- Slider main container -->
            <div class="swiper-terreno">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php while ($terrenoImages->have_posts()) :
                                $terrenoImages->the_post(); ?>
                    <div class="swiper-slide"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Terreno"
                            width="100%" height="auto">
                        <h4 class="subtitle-terreno"><?php echo the_content(); ?></h4>
                    </div>
                    <?php endwhile; ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<?php if(get_the_title( $ID_POST) == 'RINCÓN DE LOS ENCINOS'):?>
    <div>
        <h3 class="casa__title-fraccionamiento" style="margin-top:45px">
        CASAS DISPONIBLES
        </h3>
    </div>
<div class="container-full imagenes">
    <div class="imagenes__container">
        <div class="imagenes__imagen">
            <img src="<?php echo the_field('casa_imagenes_1');?>" alt="alt">
        </div>

        <div class="imagenes__imagen">
            <img src="<?php echo the_field('casa_imagenes_2');?>" alt="alt">
        </div>

        <div class="imagenes__imagen">
            <img src="<?php echo the_field('casa_imagenes_3');?>" alt="alt">
        </div>
    </div>
</div>
<div class="container-full button-seccion">
        <div class="">
            <a href="https://virtusbienesraices.com/casa-con-oficina/">
                <button>
                VER CASAS
                </button>
            </a>
        </div>
</div>
<?php endif;?>

<?php

    $argsAm = array(
        'post_type' => 'sliders',
        'tax_query' => array(
            array(
                'taxonomy' => 'Locations',
                'terms' => 'amenidades-' . $slug,
                'field' => 'slug',
                'include_children' => true,
                'operator' => 'IN'
            )
        ),

    );
    $amenidades = new WP_Query($argsAm);

    if ($amenidades->have_posts()) : ?>
<div class="container-full amenidades">
    <div class="container">
        <div class="amenidades-content">
            <h3 class="amenidades-title"><?php the_field('amenidades-title', $ID_POST); ?></h3>
            <p class="amenidades-text">
                <?php the_field('amenidades-parrafo', $ID_POST); ?>
            </p>

            <!-- Slider main container -->
            <div class="swiper-amenidades">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php while ($amenidades->have_posts()) :
                                $amenidades->the_post(); ?>
                    <div class="swiper-slide"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="amendia"
                            width="100%" height="auto">
                        <h4 class="subtitle-amenidad"><?php echo the_content(); ?></h4>
                    </div>
                    <?php endwhile; ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>


            </div>
        </div>
    </div>

    <?php endif; ?>

</div>

<?php
endwhile;

get_footer();
    ?>