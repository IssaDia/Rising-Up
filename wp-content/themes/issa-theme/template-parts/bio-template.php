<?php
$id = 80;
$title = get_field('titre', $id);
$image = get_field('photo', $id)['sizes']['large'];
$content_post = get_post($id);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-12 title">
                <h2>A propos de moi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 bio">
                <h3><?php echo $title  ?></h3>
                <p><?php echo $content ?></p>
            </div>
            <div class="col-md-5">
                <div class="aboutme-pic-container">
                    <img class="aboutme-pic img-fluid" src="<?php echo $image ?>" alt="">
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