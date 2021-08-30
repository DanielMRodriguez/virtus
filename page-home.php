<?php

/*
Template Name: Home
*/

get_header();
?>
<?php

$initID = 0;
while (have_posts()) {

    the_post();
    $initID = get_the_ID();
}
?>
<div class="carousel-container">
    <div class="swiper-wrapper">
        <?php

        $args = array(
            'post_type' => 'sliders',
            'tax_query' => array(
                array(
                    'taxonomy' => 'Locations',
                    'terms' => 'home',
                    'field' => 'slug',
                    'include_children' => true,
                    'operator' => 'IN'
                )
            ),
        );
        $the_query = new WP_Query($args);
        // var_dump($the_query);
        // die;
        if ($the_query->have_posts()) : ?>

            <?php while ($the_query->have_posts()) :
                $the_query->the_post(); ?>
                <div class="swiper-slide">
                    <?php get_template_part('template-parts/content-heroslider'); ?>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</div>



<div class="container">
    <div class="carousel-container-a">
        <div class="swiper-wrapper">
            <?php
            function post_actual($postActual, $postLoop)
            {
                if ($postActual == $postLoop) {
                    return "active";
                }
            }
            $args  = array(
                'category_name'   => 'proyectos',
                'orderby'         => 'post_date',
                'order'           => 'DESC'
            );
            $posts = get_posts($args);

            if ($posts) : ?>


                <?php foreach ($posts as $post) : ?>

                    <div class="swiper-slide">
                        <div class="row">
                            <div class="item-title">

                                <h2>
                                    <div class="flecha-left" onclick="prev()">
                                        <div id="left-arrow"></div>
                                    </div>
                                    <?php echo transform_title($post->post_title); ?>
                                    <div class="flecha-right" onclick="next()">
                                        <div id="right-arrow"></div>
                                    </div>
                                </h2>
                                <button onclick="window.location = '<?php echo get_permalink($post); ?>'">CONOCE
                                    MÁS</button>

                            </div>
                            <div class="item-text">
                                <p>
                                    <?php echo $post->post_excerpt; ?>
                                </p>
                            </div>
                            <div class="item-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
                                <!-- <img src="" alt="Rincon" /> -->
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_query(); ?>
            <?php else : ?>
                <h2>
                    Aún no hay proyectos
                </h2>
            <?php endif; ?>

        </div>

    </div>


</div>

<div class="container">
    <div class="title__section">
        <h2>Casas en venta</h2>
    </div>
    <div class="carousel-container-a2">
        <div class="swiper-wrapper">
            <?php

            $args  = array(
                'category_name'   => 'casas',
                'orderby'         => 'post_date',
                'order'           => 'DESC'
            );
            $posts = get_posts($args);

            if ($posts) : ?>


                <?php foreach ($posts as $post) : ?>

                    <div class="swiper-slide">
                        <div class="row">
                            <div class="item-title">

                                <h2>
                                    <div class="flecha-left" onclick="prev2()">
                                        <div id="left-arrow"></div>
                                    </div>
                                    <?php echo transform_title($post->post_title); ?>
                                    <div class="flecha-right" onclick="next2()">
                                        <div id="right-arrow"></div>
                                    </div>
                                </h2>
                                <button onclick="window.location = '<?php echo get_permalink($post); ?>'">CONOCE
                                    MÁS</button>

                            </div>
                            <div class="item-text">
                                <p>
                                    <?php echo $post->post_excerpt; ?>
                                </p>
                            </div>
                            <div class="item-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
                                <!-- <img src="" alt="Rincon" /> -->
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_query(); ?>
            <?php else : ?>
                <h2>
                    Aún no hay proyectos
                </h2>
            <?php endif; ?>

        </div>

    </div>


</div>

<div class="container">
    <div class="row content__antesform">
        <div class="antesform">
            <h3 class="title__antesform">Somos Virtus Bienes Raíces</h3>
        </div>
        <div class="antesform">
            <?php

            echo the_field('video_antes_form', $initID);
            ?>

        </div>
    </div>
</div>

<div class="container" id="solicita">
    <div class="row">
        <div class="solicita-content">
            <h3>
                <?php the_field('titulo-form', $initID); ?>
            </h3>
            <?php $form = get_post_field('form', $initID);

            echo do_shortcode($form); ?>

        </div>
    </div>
</div>

<div class="container-full" id="conoce-mas" style="background-image:url(<?php the_field('imagen-seccion-inferior', $initID); ?>)">
    <div class="container">
        <div class="conoce-content">
            <div>
                <h3><?php the_field('secction-inferior', $initID); ?></h3>

                <button onclick="window.open('<?php echo the_field('link_button', $initID); ?>', '_blank');"><?php the_field('text_button', $initID); ?></button>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
