<?php

/**
 * Template Name: Homepage
 */
include get_theme_file_path("header.php");
include get_theme_file_path("template-parts/navigation.php");

?>
<article></article>
<section class="">
    <?php include get_theme_file_path("template-parts/bio-template.php"); ?>
</section>

<section class="services">
    <?php include get_theme_file_path("template-parts/services-template.php"); ?>

</section>
<section class="faq">
<?php include get_theme_file_path("template-parts/faq-template.php"); ?>
</section>
<section class="contact">
<?php include get_theme_file_path("template-parts/contact-template.php"); ?>
</section>

</div>

<?php

include get_theme_file_path("footer.php");

?>