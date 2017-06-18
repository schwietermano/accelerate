<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

// Custom post types function
function create_custom_post_types() {
  // Create a case study custom post types
      register_post_type('case_studies',  //gives new custom post type a name
        array(
            'labels' => array( //array defines settings for new post type
                'name' => __( 'Case Studies' ), //Case Studies human-readable name for single case study post
                'singular_name' => __( 'Case Study' ) //Case study human-readable collection of case studies posts (name seen in left nav in admin)
              ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array(
              'slug' => 'case-studies'
            ), //case-studies name used in URLS for case study posts (look like: localhost:888/accelerate/case-studies/)
        )  //more settings can be applied but these are good for now
    );

  // add services custom post type
    register_post_type( 'services',
        array(
          'labels' => array(
              'name' => __( 'Services' ),
              'singular_name' => __( 'Service' )
          ),
          'public' => true,
          'has_archive' => false,
          'rewrite' => array( 'slug' => 'services' ),
      )
  );
}

add_action( 'init', 'create_custom_post_types' );

/*
// Twitter Sidebar
function accelerate_theme_child_widget_init() {
register_sidebar( array(
    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
    'id' => 'sidebar-2',
    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' ); */
