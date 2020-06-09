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
<div class="col-md-12 title">
    <h2><?php echo $title; ?></h2>
</div>
<div class="cards-list">
    <?php if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post(); ?>
            <div class="card-container">
                <a style="display:block" href="<?php the_permalink(); ?>">
                    <div class="card_image">
                        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), array('700', '600'), "", array("class" => "img-responsive")); ?>
                    </div>
                </a>
                <div class="card_title">
                    <p><?php the_title(); ?></p>
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

    <?php
    wp_reset_postdata(); ?>