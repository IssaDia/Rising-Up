<?php

$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['primary'];
$primaryNav = wp_get_nav_menu_items($menuID);
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$logo = $image[0];
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#"><img src="<?php echo $logo ?>"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
  wp_nav_menu(array(
    'menu' => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 0,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'bs4navbar',
    'menu_class'        => 'navbar-nav ml-auto',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'fallback_cb'     => 'bs4navwalker::fallback',
    'walker'          => new bs4navwalker()

  ));
  ?>
</nav>

<div class="row jumbotron">
  <?php include get_theme_file_path("template-parts/jumbotron-template.php"); ?>
</div>