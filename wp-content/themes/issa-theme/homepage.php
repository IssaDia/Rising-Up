<?php

/**
 * Template Name: Homepage
 */
include get_theme_file_path("header.php");
include get_theme_file_path("template-parts/navigation.php");
?>
<div class="services">
    <?php include get_theme_file_path("template-parts/services-template.php"); ?>
</section>
<section class="bio">
    <?php include get_theme_file_path("template-parts/bio-template.php"); ?>
</section>
<section class="faq" id="faq">
    <?php include get_theme_file_path("template-parts/faq-template.php"); ?>
</section>
<section class="contact" id="contact">
    <?php include get_theme_file_path("template-parts/contact-template.php"); ?>
</section>
<?php include get_theme_file_path("footer.php"); ?>