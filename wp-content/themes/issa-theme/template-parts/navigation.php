<?php

$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['primary'];
$primaryNav = wp_get_nav_menu_items($menuID);
?>


<div class='menu-wrap'>
    <input type='checkbox' class='toggler' />
    <div class='hamburger'>
        <div></div>
    </div>
    <div class='menu'>
        <div>
            <div>
                <ul>
                    <?php foreach ($primaryNav as $navItem) {

                        echo '<li><a href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a></li>';
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="showcase">
    <div class="container showcase-inner">
        <?php if (has_custom_logo()) { ?>
            <div class='logo'>
                <?php the_custom_logo() ?>
            </div>

        <?php } ?>
        <h1><?php bloginfo('name') ?></h1>
    </div>
</header>