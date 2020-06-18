<?php

/**
 * Template Name: Homepage
 */
include get_theme_file_path("header.php");
include get_theme_file_path("template-parts/navigation.php");
?>
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
<?php include get_theme_file_path("footer.php"); ?>