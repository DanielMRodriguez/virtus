<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package virtus
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
    <main class="generic__main">
        <article>
            <?php echo the_content(); ?>
        </article>
    </main>
</div>
<?php endwhile; ?>


<?php

get_footer();
?>