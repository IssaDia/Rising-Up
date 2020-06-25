<?php

/**
 * Template Name: Contact
 */
get_header();
$contact_items = get_field('contact');
$map_url =  get_field('contact')['map'];
$adress =  get_field('contact')['adress'];
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-12 contact-map">
                <iframe src="<?php echo $map_url ?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="contact-adress-container">
                    <p><?php echo $adress ?></p>
                </div>
            </div>
            <div class="col-md-12 single-title-container">
                <h3 class="single-title"><?php the_title(); ?></h3>
            </div>
        </div>
        <section class="single-page-container row">


        </section>
    <?php endwhile;  ?>

<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>

<?php
wp_reset_postdata();
get_footer(); ?>