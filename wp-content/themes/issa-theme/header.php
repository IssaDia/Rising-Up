<?php wp_head();
?>
<meta charset="<?php bloginfo('charset'); ?>">
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Rising Up</title>
  <?php wp_head() ?>
</head>

<body>
  <div class="container-fluid">
    <?php

    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations['primary'];
    $primaryNav = wp_get_nav_menu_items($menuID);
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    $logo = $image[0];
    ?>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand animate__animated animate__bounce" href="/"> <?php if ($logo) :  ?>
          <img src="<?php echo $logo ?>" alt="logo de Rising Up, site du kinésithérapeuthe de Tourcoing, Mathieu Corman"></img>
        <?php else : null  ?>

        <?php endif ?></a>
      <button class="navbar-toggler toggle-menu" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu(array(
        'menu' => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 0,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse animate__animated animate__backInRight',
        'container_id'      => 'bs4navbar',
        'menu_class'        => 'navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()

      ));
      ?>
    </nav>