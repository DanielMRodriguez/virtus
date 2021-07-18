<?php
/*
Template Name: Contacto
*/

get_header();


?>


<?php
while (have_posts()) :
    the_post();
    $ID =
        get_the_ID();
?>

<div class="container-full" id="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container" id="hero-wrapper">
        <?php get_main_menu(); ?>

        <div class="hero-elemento">
            <h1 class="hero-title"><?php the_title() ?></h1>
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
    <main class="content-contact">
        <div id="solicita">
            <div class="row">
                <div class="solicita-content">
                    <h3>
                        <!-- Solicita información de cualquiera<br /><span>DE NUESTROS DESARROLLOS</span> -->
                        <?php echo the_field('titulo-form', $ID); ?>
                    </h3>

                    <?php
                        $form = get_field('contact-form', $ID);

                        echo do_shortcode($form);
                        ?>
                </div>
            </div>
        </div>

        <hr>
        <?php
            $argsCon = array(
                'post_type' => 'sliders',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'Locations',
                        'terms' => 'contacto',
                        'field' => 'slug',
                        'include_children' => true,
                        'operator' => 'IN'
                    )
                ),

            );
            $contacto = new WP_Query($argsCon);
            if ($contacto->have_posts()) :
            ?>

        <div>
            <!-- Slider main container -->
            <div class="contacto-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php while ($contacto->have_posts()) :
                                $contacto->the_post(); ?>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="content">
                                <div class="arrow-left" onclick="prevConta()">
                                    <div class="cont">
                                        <div class="arrow-prev">

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <?php echo the_content(); ?>
                                </div>

                                <div class="arrow-right" onclick="nextConta()">
                                    <div class="cont">
                                        <div class="arrow-next">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="img">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="imagesn">
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <!-- Slides -->

                </div>

            </div>
        </div>
        <?php endif; ?>

        <div>
            <div style="text-align:center;padding:50px 0;">
                <button onclick="window.location = '<?php the_field('button-link', $ID); ?>'">
                    <?php the_field('button-text', $ID); ?>
                </button>
            </div>
        </div>

        <div>
            <div style="margin:auto;width:100%;text-align:center;padding:40px 0 80px 0;">
                <?php the_field('video', $ID) ?>
            </div>
        </div>
    </main>
</div>

<?php endwhile; ?>

<?php get_footer();