<?php

/**
 * Template Name: Homepage
 */
get_header();
?>
<div class="row jumbotron">
    <?php include get_theme_file_path("section-parts/jumbotron-section.php"); ?>
</div>
<div class="services row section">
    <?php include get_theme_file_path("section-parts/services-section.php"); ?>
</div>
<div class="bio row section">
    <?php include get_theme_file_path("section-parts/bio-section.php"); ?>
</div>
<div class="faq row section" id="faq">
    <?php include get_theme_file_path("section-parts/faq-section.php"); ?>
</div>
<div class="contact row section" id="contact">
    <?php include get_theme_file_path("section-parts/contact-section.php"); ?>
</div>
<?php get_footer(); ?>