<?php $id = 134;
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');
$logo = $image[0]; ?>
<div class="row">
    <div class="separation col-md-12"></div>
</div>
<footer class="footer-distributed row">
    <div class="col-md-4 footer-left">
        <h5>RISING UP</h5>
        <img src="<?php echo $logo ?>"></img>
    </div>
    <div class="col-md-4 footer-center">
        <h5>L'ADRESSE DU CABINET</h5>
        <div class="contact-footer-container">
            <i class="fa fa-map-marker"></i>
            <span>Résidence Duc d'Havre Centre De Gaulle, 59200 TOURCOING </span>
        </div>

        <div class="contact-footer-container">
            <i class="fa fa-phone"></i>
            <p><a href="tel:0613350067"> 06 13 35 00 67 </a></p>
        </div>
        <div class="contact-footer-container">
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:mathieu.corman@gmail.com">mathieu.corman@gmail.com</a></p>
        </div>
    </div>
    <div class="col-md-4 footer-right">
        <h5>A PROPOS DE RISING UP</h5>
        <p class="footer-company-about">Un voyage initiatique au service de votre santé</p>
        <div class="footer-icons">
            <?php if (get_field('facebook', $id)) : ?>
                <a href="<?php echo the_field('facebook', $id); ?>"><i class="fa fa-facebook"></i></a>
            <?php endif; ?>
            <?php if (get_field('instagram', $id)) : ?>
                <a href="<?php echo the_field('instagram', $id); ?>"><i class="fa fa-instagram"></i></a>
            <?php endif; ?>
            <?php if (get_field('twitter', $id)) : ?>
                <li><a href="<?php echo the_field('twitter', $id); ?>"><i class="fa fa-twitter"></i></a></li>
            <?php endif; ?>
            <?php if (get_field('linkedin', $id)) : ?>
                <li><a href="<?php echo the_field('linkedin', $id); ?>"><i class="fa fa-linkedin"></i></a></li>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-12 sub-footer">
        <p class="footer-company-name">Rising Up © 2020 - <a href="http://localhost/mattproject/mentions-legales">Mentions Légales</a></p>
    </div>

</footer>