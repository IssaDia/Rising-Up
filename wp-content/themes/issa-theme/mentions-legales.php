<?php

/**
 * Template Name: Mentions-Légales
 */
get_header();
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-12 single-title-container">
                <h3 class="single-title"><?php the_title(); ?></h3>
            </div>
        </div>
        <section class="single-page-container row">
            <div class="single-content-container">
                <div class="col-md-12 single-text">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile;  ?>
        </section>

    <?php else : ?>
        <!-- show 404 error here -->
    <?php endif; ?>

    <?php
    wp_reset_postdata();
    get_footer(); ?>