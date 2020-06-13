<?php

function theme_add_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'test', get_stylesheet_directory_uri() . '/responsive.css' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, false );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
add_theme_support( 'post-thumbnails' );

function add_menu_link_class( $atts, $item, $args ) {
    if ( $args->link_class ) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
	if ( get_field('headerlogo') ) {
		echo 'style="background: url(' . get_field('headerlogo') . ')"';
	}
/*
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;\005C&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;\005C&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;\005C&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;\005C&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}
*/

?>