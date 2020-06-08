<?php

/**
 * Template Name: Bio
 */

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
$id = get_the_ID();
$title = get_field('titre', $id);
$image = get_field('image')['sizes']['large'];

var_dump($id);

?>
        <div class="row">
            <div class="col-md-7 bio">
                <?php $title  ?>
                <?php echo the_content() ?>
            </div>
            <div class="col-md-5">
                <div class="aboutme-pic-container">
                    <img src="<?php echo $image ?>">
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php else : ?>

    <!-- article -->
    <article>

        <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>