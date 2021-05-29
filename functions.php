<?php
function CC_theme_support(){
  //adds dynamic title support
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('port1', 250, 250, false);
  add_image_size('port2', 500 ,500, true);
  add_image_size('port3', 700 ,700, true);


}
add_action('after_setup_theme','CC_theme_support');
function CC_menus(){
    $locations = array(
        'primary' => 'Desktop',
        'secondary' => 'Mobile',
        'footer1' => 'Explore',
        'footer2' => 'Learn' 
    );
    register_nav_menus($locations);
}
register_post_type('Portfolio',array(
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
        'name' => 'Portfolio',
        'add_new_item' => 'Add Portfolio',
        'edit-item' => 'Edit Portfolio',
        'all_items' => 'All Portfolios',
        'singular' => 'Portfolio'
    ),
    'menu_icon' => 'dashicons-portfolio'
));

add_action('init', 'CC_menus');
function AB_register_styles(){
    // $version = wp_get_theme()->get('version');
    // wp_enqueue_style('AB-style', get_template_directory(). '/style.css', array('AB-bootstrap'), $version, 'all');
    wp_enqueue_style('AB-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css", array(), '5.0.0', 'all');
    wp_enqueue_style('AB-fontawesome', "https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&display=swap", array(), '1.0', 'all');
    wp_enqueue_style('CC-font', "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap", array(), '1.0', 'all');
    wp_enqueue_style('AB-fontawesome2', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '1.0', 'all');
    wp_enqueue_style('AB-other', "https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap", array(), '1.0', 'all');
}
add_action('wp_head', 'AB_register_styles');
function university_files() {
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
} 
add_action('wp_enqueue_scripts', 'university_files');
function AB_register_scripts(){
    wp_enqueue_script('AB-jQuery', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js', array(), '2.9.1', true);
    wp_enqueue_script('AB-popper', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(), '2.1.1', true);
    wp_enqueue_script('AB-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js', array(), '5.0.0', true);
    wp_enqueue_script('AB-js', get_theme_file_uri('/assets/js/main.js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'AB_register_scripts');
function ccnew_menu(){
    register_post_type('Portfolio',array(
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Portfolio',
            'add_new_item' => 'Add Portfolio',
            'edit-item' => 'Edit Portfolio',
            'all_items' => 'All Portfolios',
            'singular' => 'Portfolio'
        ),
        'menu_icon' => 'dashicons-portfolio'
    ));
}

add_action('init', 'ccnew_menu');

add_action( 'template_redirect', 'remove_wpseo' );

/**
 * Removes output from Yoast SEO on the frontend for a specific post, page or custom post type.
 */
function remove_wpseo() {
    if ( is_singular ( 'portfolio'  ) ) {
        $front_end = YoastSEO()->classes->get( Yoast\WP\SEO\Integrations\Front_End_Integration::class );

        remove_action( 'wpseo_head', [ $front_end, 'present_head' ], -9999 );
    }
}
?>