<?php

function theme_enqueue_scripts()
{
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.0.0', 'all');
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

require_once('bs4navwalker.php');
function theme_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 40,
        'width'       => 40,
        'flex-height' => true,
    ));
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
}
add_action('init', 'theme_setup');


function myplugin_settings()
{
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page');
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
}
// Add to the admin_init hook of your theme functions.php file 
add_action('init', 'myplugin_settings');


function hide_admin_bar_from_front_end()
{
    if (is_blog_admin()) {
        return true;
    }
    return false;
}
add_filter('show_admin_bar', 'hide_admin_bar_from_front_end');


function cmb_get_image_id($image_src)
{
    global $wpdb;
    $image = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_src));
    return $image[0]; //return the image ID
}



function services_custom_type()
{

    register_post_type(
        'services',

        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service'),
                'menu_name' => 'Services'
            ),
            'hierarchical' => true,
            'supports' => array(
                'title',
                'thumbnail',
                'editor',
                'page-attributes'
            ),

            'rewrite'            => array('slug' => 'therapies', 'with_front' => false),
            'has_archive'        => true,
            'public'             => true,
            'publicly_queryable' => true,
        )
    );
}

add_action('init', 'services_custom_type');
flush_rewrite_rules();


function faq_custom_type()
{

    register_post_type(
        'faq',

        array(
            'labels' => array(
                'name' => __('Faq'),
                'singular_name' => __('Question'),
                'menu_name' => 'Questions Fréquentes',
                'add_new_item'        => __('Ajouter une nouvelle question'),
                'add_new'             => __('Ajouter une nouvelle'),
            ),
            'hierarchical' => false,
            'supports' => array(
                'title',
                'editor',
                'page-attributes'
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services', "with_front" => false),



        )
    );
}

add_action('init', 'faq_custom_type');

add_theme_support('post-thumbnails');

function wpc_dashicons()
{
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'wpc_dashicons');



function citations_custom_type()
{

    register_post_type(
        'citations',

        array(
            'labels' => array(
                'name' => __('Citation'),
                'singular_name' => __('Citation'),
                'menu_name' => 'Citations',
                'add_new_item'        => __('Ajouter une nouvelle citation'),
                'add_new'             => __('Ajouter une nouvelle'),
            ),
            'hierarchical' => false,
            'supports' => array(
                'title',
                'editor',
                'page-attributes'
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'citations', "with_front" => false),



        )
    );
}

add_action('init', 'citations_custom_type');

//Delete image compression
add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

//Delete error message from Contact form
function my_custom_admin_head_css() {
    echo '<style>ul.config-error {display:none !important;}[data-confiq-field][aria-invalid="true"]{border-color:grey;}</style>';
}
add_action( 'admin_head', 'my_custom_admin_head_css' );