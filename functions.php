<?php

function my_register_style(){
    wp_register_style ('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bootstrap');
    wp_register_style ('stylesheet', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('stylesheet');
}

add_action( 'wp_enqueue_scripts', 'my_register_style');

function my_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts');

// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('top', 'Top menu');

function addWidgets(){
    register_sidebar( array(
        'name' => 'Footer left',
        'id' => 'footer-left'
    ));
    register_sidebar( array(
        'name' => 'Footer center',
        'id' => 'footer-center'
    ));
    register_sidebar( array(
        'name' => 'Footer right',
        'id' => 'footer-right'
    ));

}

add_action('widgets_init', 'addWidgets');

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
            height:150px;
            width: auto;
            background-size: 150px auto;
            background-repeat: no-repeat;
            padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );