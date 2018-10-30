<?php
	
function awesome_script_enqueue() {
	
	wp_enqueue_style('groundwork', get_template_directory_uri() . '/css/groundwork.css', array(), '1.0.0', 'all');
	wp_enqueue_style('custome_css', get_template_directory_uri() . '/css/custome.css', array(), '1.0.0', 'all');
	wp_enqueue_script('modernizr-2.6.2', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), '1.0.0', true);
	wp_enqueue_script('jquery_1.10.2', get_template_directory_uri() . '/js/jquery-1.10.2.min.js', array(), '1.0.0', true);
	wp_enqueue_script('groundwork_all_js', get_template_directory_uri() . '/js/groundwork.all.js', array(), '1.0.0', true);


	
	
	
}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');


/* Theme setup */
function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'awesome_theme_setup');



		
/*Remove version */
// Remove query string from static files
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	$src = remove_query_arg( 'ver', $src );
	return $src;
   }
   add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
   add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
   
   remove_action('wp_head', 'print_emoji_detection_script', 7);
   remove_action('wp_print_styles', 'print_emoji_styles');
   
   remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
   remove_action( 'admin_print_styles', 'print_emoji_styles' );


   add_filter('nav_menu_css_class', 'discard_menu_classes', 10, 2);


function discard_menu_classes($classes, $item) {
    $classes = array_filter( 
        $classes, 
        create_function( '$class', 
                 'return in_array( $class, 
                      array( "current-menu-item", "current-menu-parent" ) );' )
        );
    return array_merge(
        $classes,
        (array)get_post_meta( $item->ID, '_menu_item_classes', true )
        );
    }


   // Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
 return '<p><button class="asphalt"><a style="color:#ffffff" href="'. get_permalink($post->ID) . '"> Read More</a></button></p>';
}

add_filter('excerpt_more', 'new_excerpt_more');


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 300;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
    