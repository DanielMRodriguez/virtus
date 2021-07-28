<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package virtus
 */

get_header();
?>

<div class="carousel-container">
    <div class="swiper-wrapper">
        <?php

        $args = array(
            'post_type' => 'sliders'
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
    <div class="carousel-container">
        <div class="swiper-wrapper">
            <?php
            function post_actual($postActual, $postLoop)
            {
                if ($postActual == $postLoop) {
                    return "active";
                }
            }
            $args  = array(
                'category'        => 'proyectos',
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
                    <div class="item-image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Rincon" />
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
            <?php else : ?>
            <h2>
                Aún no hay proyectos
            </h2>
            <?php endif; ?>

        </div>

    </div>

    <!-- <div class="carousel">
        <div class="carousel-item">
            <div class="row">
                <div class="item-text">
                    <p>
                        Ubicación privilegiada en el corazón de la zona norte de
                        Saltillo. Es parte del desarrollo de usos mixtos más importante
                        de Saltillo, donde podrás encontrar centros de entretenimiento,
                        gastronomía, comercio, un club deportivo, oficinas, hospitales,
                        y mucho más.
                    </p>
                </div>
                <div class="item-title text-right">
                    <h2>INFO DE <span>CASAS</span></h2>
                    <button>CONOCE MÁS</button>
                </div>
                <div class="item-image">
                    <img src="./assets/img/rincon.jpg" alt="Rincon" />
                </div>
            </div>
        </div>
    </div> -->
</div>

<div class="container" id="solicita">
    <div class="row">
        <div class="solicita-content">
            <h3>
                Solicita información de cualquiera<br /><span>DE NUESTROS DESARROLLOS</span>
            </h3>

            <form action="" class="form-home text-center">
                <div>
                    <input type="text" placeholder="NOMBRE*" class="ctr" />
                </div>
                <div>
                    <input type="text" placeholder="APELLIDO*" class="ctr" />
                </div>
                <div>
                    <input type="text" placeholder="TELÉFONO*" class="ctr" />
                </div>


                <div class="form-home-down">
                    <select name="proyecto" id="proyecto" class="ctr">
                        <option value="PUNTA BOSQUE SALTILLO">PUNTA BOSQUE SALTILLO</option>
                        <option value=" RINCÓN DE ALCÁNTARA"> RINCÓN DE ALCÁNTARA</option>
                        <option value="">RINCÓN DE LOS ENCINOS</option>
                        <option value="">LAS HUERTAS</option>
                        <option value=""> VALLE DE FONTANNA</option>
                    </select>
                </div>

                <button>SOLICITAR MÁS INFORMACIÓN</button>
            </form>
        </div>
    </div>
</div>

<div class="container-full" id="conoce-mas"
    style="background-image:url(<?php echo get_template_directory_uri() . '/assets/static/contacto.jpg'; ?>)">
    <div class="container">
        <div class="conoce-content">
            <div>
                <h3>CONOCE LOS PROYECTOS</h3>
                <button
                    onclick='window.open(https://api.whatsapp.com/send?phone=8444599120&text=Hola", "_blank");'>AGENDA
                    UNA CITA</button>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();