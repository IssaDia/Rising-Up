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
    <div class="row">
        <div class="col-md-7 bio">
            <h3>Mathieu Corman</h3>
            <p>Parcours :</p>
            <p>Diplôme d"état de masseur kinésithérapeute
                Ancien Salarié du centre de rééducation Hélène Borel spécialisé en neurologie notamment dans la prise
                en charge des sclérose en plaques et des AVC
                Titulaire d"un cabinet libéral composé de 3 masseurs kinésithérapeutes et 2 infirmières.</p>
            <p>Compétences :</p>
            <p>Counterstrain, Périnatal, Nourrissons , Trigger points, Nutrition, Vaccuothérapie .</p>
            <p>Vision :</p>
            <p>Emerveillé par l"anatomie et la physiologie du corps humain avec son fonctionnement si harmonieux qui
                ne laisse rien au hasard,
                Lassé par les résultats sur le long terme des traitements symptomatiques et de la médecine à vision
                fragmentée et sectarisée,
                D"un tempérament curieux et toujours en recherche de meilleurs résultats, c"est naturellement que je me
                suis orienté vers des thérapies qui prennent en compte <strong>la globalité de la personne</strong> : approche multi-
                système, mode de vie, environnement..</p>
        </div>
        <div class="col-md-5">
            <div class="aboutme-pic-container">
                <img class="aboutme-pic" src="http://localhost/mattproject/wp-content/uploads/2020/06/profilMathieu-scaled.jpg" alt="risingup-creator">
            </div>
        </div>
    </div>
</section>
<section class="row services">
    <div class="col-md-12 title">
        <?php $category_name = get_term(3)->name; ?>
        <h2><?php echo $category_name ?></h2>
    </div>
    <?php
    $services = get_posts(array(
        "post_type" => "page",
        "numberposts" => -1,
        "tax_query" => array(
            array(
                "taxonomy" => "category",
                "field" => "3",
                "terms" => 3, /// Where term_id of Term 1 is "1".
                "include_children" => false
            )
        )
    ));

    $term = print apply_filters('taxonomy-images-queried-term-image', '');
    // var_dump($services);

    ?>
    <div class="cards-list">
        <?php
        foreach ($services as $service) {
            $images = get_attached_media('image', $service->ID);

            foreach ($images as $image) { ?>
                <div class="card-container">
                    <a style="display:block" href="/">
                        <div class="card_image">
                            <?php

                            echo wp_get_attachment_image($image->ID, array('700', '600'), "", array("class" => "img-responsive")); ?>
                        </div>
                    </a>
                    <div class="card_title">
                        <p><?php echo $service->post_title ?></p>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</section>
<section class="faq row">
    <div class="col-md-12 title">
        <h2>FAQ</h2>
    </div>
    <div class="faq-container">
        <div class="accordion">
            <div class="accordion-item" id="quesition1">
                <a href="#question1" class="accordion-link">
                    where are you?
                    <ion-icon name="add-circle-outline" class="add"></ion-icon>
                    <ion-icon name="remove-circle-outline" class="remove"></ion-icon>
                </a>
                <div class="answer">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, libero. Corrupti sit eligendi fugiat, dicta enim commodi sapiente, molestias consequuntur beatae voluptate eos a libero quibusdam nulla similique. Dolorem, eos.
                </div>
            </div>
            <div class="accordion-item" id="quesition2">
                <a href="#question2" class="accordion-link">
                    why are you?
                    <ion-icon name="add-circle-outline" class="add"></ion-icon>
                    <ion-icon name="remove-circle-outline" class="remove"></ion-icon>
                </a>
                <div class="answer">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, libero. Corrupti sit eligendi fugiat, dicta enim commodi sapiente, molestias consequuntur beatae voluptate eos a libero quibusdam nulla similique. Dolorem, eos.
                </div>
            </div>
            <div class="accordion-item" id="quesition3">
                <a href="#question3" class="accordion-link">
                    how are you?
                    <ion-icon name="add-circle-outline" class="add"></ion-icon>
                    <ion-icon name="remove-circle-outline" class="remove"></ion-icon>
                </a>
                <div class="answer">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, libero. Corrupti sit eligendi fugiat, dicta enim commodi sapiente, molestias consequuntur beatae voluptate eos a libero quibusdam nulla similique. Dolorem, eos.
                </div>
            </div>
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