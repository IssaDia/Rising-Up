<?php


$title = get_field('titre');
$image = get_sub_field('bio_image');
['sizes']['large'];
$content_post = get_post($id);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
?>

<div class="col-md-7 bio-text">
    <?php if (have_rows('bio_content')) :
        while (have_rows('bio_content')) : the_row();
            $bio = get_field('bio_content'); ?>
            <?php echo $bio['bio_text']; ?>
</div>
<div class="col-md-5 aboutme-pic-container">
    <img class="aboutme-pic img-fluid animate__animated animate__bounceIn" src="<?php echo $bio['bio_image']['url']; ?>" alt="photo de profil de la biographie de Mathieu Corman, Kinésithérapeuthe à Tourcoing">
</div>
<?php endwhile;
?>
<?php else : ?>
    <!-- article -->
    <article>
        <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
    </article>
    <!-- /article -->
<?php endif; ?>