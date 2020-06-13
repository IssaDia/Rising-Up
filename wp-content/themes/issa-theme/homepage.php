<?php

/**
 * Template Name: Homepage
 */
include get_theme_file_path("header.php");
include get_theme_file_path("template-parts/navigation.php");
?>
<section class="services row">
    <?php include get_theme_file_path("template-parts/services-template.php"); ?>
</section>
<section class="bio row">
    <?php include get_theme_file_path("template-parts/bio-template.php"); ?>
</section>
<section class="faq row" id="faq">
    <?php include get_theme_file_path("template-parts/faq-template.php"); ?>
</section>
<section class="contact row" id="contact">
    <?php include get_theme_file_path("template-parts/contact-template.php"); ?>
</section>
<?php include get_theme_file_path("footer.php"); ?>