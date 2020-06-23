<?php

/**
 * Template Name: Homepage
 */
get_header();
?>
<div class="row jumbotron">
    <?php include get_theme_file_path("template-parts/jumbotron-template.php"); ?>
</div>
<div class="services row section">
    <?php include get_theme_file_path("template-parts/services-template.php"); ?>
</div>
<div class="bio row section">
    <?php include get_theme_file_path("template-parts/bio-template.php"); ?>
</div>
<div class="faq row section" id="faq">
    <?php include get_theme_file_path("template-parts/faq-template.php"); ?>
</div>
<div class="contact row section" id="contact">
    <?php include get_theme_file_path("template-parts/contact-template.php"); ?>
</div>
<?php get_footer(); ?>