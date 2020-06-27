<?php

/**
 * Template Name: Contact
 */
get_header();
$contact_items = get_field('contact');
$map_url =  get_field('contact')['map'];
$adress =  get_field('contact')['adress'];
$mobile_phone =  get_field('contact')['telephone'];

?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-12 contact-map">
                <iframe src="<?php echo $map_url ?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="contact-adress-container">
                    <div class='contact-adress-text  animate__animated animate__backInUp'><?php echo $adress ?></div>
                </div>
            </div>
            <div class="col-md-12 single-title-container">
                <h3 class="single-title"><?php the_title(); ?></h3>
            </div>
        </div>
        <div class="row contact-items-container">
            <div class="col-md-6 contact-tel-container"></div>
            <div class="col-md-6 contact-tel-container">
                <div class="contact-tel-items-container">
                    <span><i class="fa fa-mobile" aria-hidden="true"></i></span>
                    <p>Téléphone</p>
                    <p>Tél : <?php echo $mobile_phone ?></p>
                </div>
            </div>

            <div class=" col-md-6 contact-form-container">
                <h5>Formulaire de contact</h5>
                <?php echo do_shortcode('[contact-form-7 id="74" title="Formulaire de Contact Rising Up"]'); ?>
            </div>
            <div class="col-md-6 contact-form-container"></div>
        </div>


    <?php endwhile;  ?>

<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>

<?php
wp_reset_postdata();
get_footer(); ?>