<?php

wp_reset_postdata();
$args = array(
    'showposts' => '-1',
    'post_type' => 'faq',
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$faqs = new WP_Query($args);
$faq_custom_type_obj = get_post_type_object('faq');
$title = $faq_custom_type_obj->label;
?>
<div class="row">
    <div class="col-md-12 title">
        <h2><?php echo $title ?></h2>
    </div>
    <div class="faq-container col-md-12">
        <!-- Accordion  -->
        <div class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">
            <?php if ($faqs->have_posts()) : while ($faqs->have_posts()) : $faqs->the_post(); ?>
                    <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                        <span id="tab5" tabindex="0" class="accordion__title" aria-controls="panel5" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                            <h5><?php the_title(); ?></h5>
                        </span>
                        <div id="panel5" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab5" data-binding="expand-accordion-container">
                            <div class="accordion__content-inner">
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
        </div>
    </div>
</div>
<?php else : ?>
    <!-- article -->
    <article>
        <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
    </article>
    <!-- /article -->
<?php endif; ?>

<?php
wp_reset_postdata(); ?>

</div>