
<?php

/**
 * Template Name: Single-Service
 */
include get_theme_file_path("header.php");
include get_theme_file_path("template-parts/navigation.php");
?>

<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');

$query = new WP_Query( array( 'post_type' => 'services', 'paged' => $paged ) );

if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="entry">
<h2 class="title"><?php the_title(); ?></h2>
<?php the_content(); ?>
</div>
<?php endwhile; wp_reset_postdata(); ?>
<!-- show pagination here -->
<?php else : ?>
<!-- show 404 error here -->
<?php endif; ?>

<?php get_footer(); ?>