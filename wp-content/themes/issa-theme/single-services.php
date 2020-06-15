<?php

include get_theme_file_path("header.php");
include get_theme_file_path("template-parts/navigation.php");
?>


<section class="">

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="<?php the_title(); ?>-section">
            <h2 class="title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    <?php endwhile;  ?>
</section>

<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>

<?php
wp_reset_postdata();
get_footer(); ?>