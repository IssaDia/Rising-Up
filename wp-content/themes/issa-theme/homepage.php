<?php

/**
 * Template Name: Homepage
 */
include get_theme_file_path("header.php");
include get_theme_file_path("template-parts/navigation.php");

?>
<article></article>
<section class="aboutme">
    <div class="col-md-12 title">
        <h2>A propos de moi</h2>
    </div>
    <?php include get_theme_file_path("template-parts/bio-template.php"); ?>

</section>

<section class="services">
    <?php include get_theme_file_path("template-parts/services-template.php"); ?>

</section>
<section class="faq">
    <?php include get_theme_file_path("template-parts/faq-template.php"); ?>

</section>
<section class="contact">
    <div class="col-md-12 title">
        <h2>Nous contacter</h2>
    </div>
</section>

</div>

<?php

include get_theme_file_path("footer.php");

?>