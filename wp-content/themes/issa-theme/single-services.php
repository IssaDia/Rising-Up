<?php

include get_theme_file_path("header.php");
include get_theme_file_path("template-parts/navigation.php");
?>



<section class="single-page-container">

    <div class="previous row">
        <div class="col-md-12">
            <a class="previous-button" onclick="history.back()">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <span class="previous-text">Retour</span>
            </a>
        </div>
    </div>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
       
            <div class="<?php echo strtolower(the_title()) ?>-section">
                <div class="">
                    <h3 class="single-title"><?php the_title(); ?></h3>
                </div>

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