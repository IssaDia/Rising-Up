<?php

/**
 * Template Name: Homepage
 */
include get_theme_file_path('header.php');
include get_theme_file_path('template-parts/navigation.php');

?>

<div class="container-fluid">
    <div class=" aboutme-container">
        <div class="row">
            <div class="col-md-12 title">
                <h2>A propos de moi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 bio">
                <h3>Mathieu Corman</h3>
                <p>Parcours :</p>
                <p>Diplôme d'état de masseur kinésithérapeute
                    Ancien Salarié du centre de rééducation Hélène Borel spécialisé en neurologie notamment dans la prise
                    en charge des sclérose en plaques et des AVC
                    Titulaire d'un cabinet libéral composé de 3 masseurs kinésithérapeutes et 2 infirmières.</p>
                <p>Compétences :</p>
                <p>Counterstrain, Périnatal, Nourrissons , Trigger points, Nutrition, Vaccuothérapie .</p>
                <p>Vision :</p>
                <p>Emerveillé par l'anatomie et la physiologie du corps humain avec son fonctionnement si harmonieux qui
                    ne laisse rien au hasard,
                    Lassé par les résultats sur le long terme des traitements symptomatiques et de la médecine à vision
                    fragmentée et sectarisée,
                    D'un tempérament curieux et toujours en recherche de meilleurs résultats, c'est naturellement que je me
                    suis orienté vers des thérapies qui prennent en compte <strong>la globalité de la personne</strong> : approche multi-
                    système, mode de vie, environnement..</p>
            </div>
            <div class="col-md-5">
                <div class="aboutme-pic-container">
                    <img class='aboutme-pic' src="http://localhost/mattproject/wp-content/uploads/2020/06/profilMathieu-scaled.jpg" alt="risingup-creator">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 title">
            <h2>Services</h2>
        </div>
    </div>
    <?php
    $pages = get_posts(array(
        'post_type' => 'page',
        'numberposts' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => '3',
                'terms' => 3, /// Where term_id of Term 1 is "1".
                'include_children' => false
            )
        )
    ));

    
    var_dump($pages);
   
    

    ?>
    <div class="cards-list">
        <div class="card-container">
            <a style="display:block" href="/">
                <div class="card_image">
                    <?php echo get_the_post_thumbnail(13, 'thumbnail'); ?>
                </div>
            </a>
            <div class="card_title">
                <p><?php echo get_the_title(13); ?></p>
            </div>
        </div>
        <div class="card-container">
            <div class="card_image">
                <img src="https://i.redd.it/b3esnz5ra34y.jpg" />
            </div>
            <div class="card_title">
                <p><?php echo get_the_title(14); ?></p>
            </div>
        </div>
        <div class="card-container">
            <div class="card_image">
                <img src="https://i.redd.it/b3esnz5ra34y.jpg" />
            </div>
            <div class="card_title">
                <p><?php echo get_the_title(15); ?></p>
            </div>
        </div>
    </div>
</div>

<?php

include get_theme_file_path('footer.php');

?>