<?php $id = 131; ?>

<footer class="footer-distributed row">
    <div class="col-md-4">
        <h3>Rising Up</h3>

    </div>
    <div class="col-md-4">
        <div class="footer-map-container row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10103.788630522733!2d3.1614911!3d50.7209195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa11786bb1be66c9e!2sCabinet%20de%20Kin%C3%A9sith%C3%A9rapie%20des%20ducs%20d&#39;Havr%C3%A9!5e0!3m2!1sfr!2sfr!4v1592507888685!5m2!1sfr!2sfr" width="450" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>
        <div class="contact-footer-container">
            <i class="fa fa-map-marker"></i>
            <p><span>Résidence Duc d'Havre Centre De Gaulle, 59200 TOURCOING </span> Adresse 2</p>
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
    <div class="col-md-4">
        <p class="footer-company-about">
            <span>A propos de Rising Up</span>
            Un voyage initiatique au service de votre santé
        </p>

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
        <p class="footer-company-name">Rising Up © 2020</p>

    </div>

</footer>