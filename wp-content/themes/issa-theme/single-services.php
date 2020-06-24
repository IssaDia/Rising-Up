<?php

get_header();
?>



<section class="single-page-container row">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="single-service-container">
               
                    <div class="col-md-12">
                        <a class="previous-button" onclick="history.back()">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            <span class="previous-text">Retour</span>
                        </a>
                    </div>
            
                <?php
                if (has_post_thumbnail()) {
                    echo '<div class="col-md-12">';
                    the_post_thumbnail('thumbnail');
                    echo '</div>';
                }
                ?>
                <div class="col-md-12 single-title-container">

                    <h3 class="single-title"><?php the_title(); ?></h3>
                </div>

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