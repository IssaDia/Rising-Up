<?php

$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['primary'];
$primaryNav = wp_get_nav_menu_items($menuID);
?>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
  wp_nav_menu(array(
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'bs-example-navbar-collapse-1',
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',

  ));
  ?>
</nav>
</div>

  <div class="row jumbotron">
    <?php include get_theme_file_path("template-parts/jumbotron-template.php"); ?>
</div>