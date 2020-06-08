<?php

/**
 * Template Name: Homepage
 */
include get_theme_file_path("header.php");
include get_theme_file_path("template-parts/navigation.php");

?>

<section class="row">
    <div class="col-md-12 title">
        <h2>A propos de moi</h2>
    </div>
   <?php include get_theme_file_path("template-parts/bio-template.php"); ?>

</section>
<section class="row services">
    
    <?php include get_theme_file_path("template-parts/services-template.php"); ?>
    
</section>
<section class="faq row">
    <div class="col-md-12 title">
        <h2>FAQ</h2>
    </div>
    <div class="faq-container">
        <!-- Accordion  -->
        <div class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">
            <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                <span id="tab5" tabindex="0" class="accordion__title" aria-controls="panel5" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                    <h5>Heading 1</h5>
                </span>
                <div id="panel5" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab5" data-binding="expand-accordion-container">
                    <div class="accordion__content-inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </article>

            <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
                <span id="tab6" tabindex="0" class="accordion__title" aria-controls="panel6" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
                    <h5>Heading 2</h5>
                </span>
                <div id="panel6" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab6" data-binding="expand-accordion-container">
                    <div class="accordion__content-inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
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