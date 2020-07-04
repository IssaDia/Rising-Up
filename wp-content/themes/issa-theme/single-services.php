<?php

get_header();
$tarif_label = get_field_object('tarif_de_la_seance')['label'];
$time_label = get_field_object('duree_de_la_consultation')['label'];
$price = get_field('tarif');
$time = get_field('duree_de_la_consultation');
$details = get_field('details_tarifs');

?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-12 single-title-container">
                <h3 class="single-title  animate__animated animate__backInRight"><?php the_title(); ?></h3>

            </div>
            
                <div class="single-content-container">
                    <?php
                    if (has_post_thumbnail()) {
                        echo '<div class="col-md-12">';
                        the_post_thumbnail('thumbnail');
                        echo '</div>';
                    }
                    ?>
                    <div class="col-md-12 single-text">
                        <?php the_content(); ?>
                    </div>
              
            </div>
            <div class="separation col-md-12"></div>
            <div class="col-md-6 details">
                <h3><?php echo $details['title']; ?></h3>
                <div class='detail-duree'>
                    <h4><?php echo $details['duree_title']; ?></h4>
                    <span><?php echo $details['duree_de_la_consultation']; ?></span>
                </div>
                <div class='detail-tarif'>
                    <h4><?php echo $details['tarif_title']; ?></h4>
                    <span><?php echo $details['tarif']; ?></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mx-auto" style="width: 34rem;height:300px">
                    <div class="card-body" style="margin-top: 80px;">
                        <div class="card-title">
                            <span >Prendre rendez-vous</span>
                        </div>
                        <div class="therapie-link" style="margin-top: 40px;">
                            <a style="float:left" href="http://localhost/mattproject/contact">
                                <h4>Contactez-nous</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    <?php endwhile;  ?>
<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>

<?php
wp_reset_postdata();
get_footer(); ?>