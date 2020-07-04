<?php

wp_reset_postdata();
$args = array(
    'showposts' => '-1',
    'post_type' => 'services',
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$services_custom_type_obj = get_post_type_object('services');
$title = $services_custom_type_obj->label;
$services = new WP_Query($args);
?>

<?php if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post(); ?>
        <div class="col-md-6  mx-auto">
            <div class="card mx-auto animate__animated animate__backInLeft" style="width: 34rem;height:450px">
                <div class="card-body">
                    <div class="card-title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="therapie-texte">
                        <p><?php echo get_field('slogan_texte'); ?></p>
                    </div>
                    <div class="therapie-link">
                        <a href="<?php the_permalink(); ?>">
                            <h4>Découvrir</h4>
                        </a>
                    </div>
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
<?php wp_reset_postdata(); ?>