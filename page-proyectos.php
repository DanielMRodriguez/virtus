<?php
/*
Template Name: Proyectos
*/

get_header();
?>

<?php
while (have_posts()) :
    the_post(); ?>



<div class="container-full" id="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container" id="hero-wrapper">
        <?php get_main_menu(); ?>

        <div class="hero-elemento">
            <h1 class="hero-title">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
</div>
<div class="container">
    <main class="content-page">
        <aside>
            <ul class="list-terrenos">
                <li>
                    <a href="#" class="active"> PUNTA BOSQUESE CASTILLO </a>
                </li>
                <li>
                    <a href="#"> RINCÓN DE LA ALCÁNTARA </a>
                </li>
                <li>
                    <a href="#"> RINCÓN DE LOS ENCINOS </a>
                </li>
                <li>
                    <a href="#"> LAS HUERTAS </a>
                </li>
                <li>
                    <a href="#"> VALLE DE FONTANA </a>
                </li>
            </ul>
        </aside>
        <article>
            <h2 class="title-proyecto">CONOCE MÁS SOBRE EL PROYECTO</h2>

            <?php echo the_content(); ?>
        </article>
    </main>
</div>

<div class="container" style="margin-top: 50px; margin-bottom: 50px">
    <button style="display: block; margin: auto">SOLICITA INFORMACIÓN</button>
</div>
<?php endwhile; ?>


<?php

get_footer();
?>