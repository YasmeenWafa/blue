<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

function register_my_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
    }
    add_action( 'init', 'register_my_menu' );


    //hook into the init action and call faqs_nonhierarchical_taxonomy when it fires
 
// add_action( 'init', 'faqs_nonhierarchical_taxonomy', 0 );
 
// function faqs_nonhierarchical_taxonomy() {
 
// // Labels part for the GUI
 
//   $labels = array(
//     'name' => _x( 'Question Categories', 'question categories' ),
//     'singular_name' => _x( 'Question Category', 'question category' ),
//     'search_items' =>  __( 'Search Question Categories' ),
//     'popular_items' => __( 'Popular Question Categories' ),
//     'all_items' => __( 'All Question Categories' ),
//     'parent_item' => null,
//     'parent_item_colon' => null,
//     'edit_item' => __( 'Edit Question Category' ), 
//     'update_item' => __( 'Update Question Category' ),
//     'add_new_item' => __( 'Add New Question Category' ),
//     'new_item_name' => __( 'New Topic Question Category' ),
//     'separate_items_with_commas' => __( 'Separate question categories with commas' ),
//     'add_or_remove_items' => __( 'Add or remove question categories' ),
//     'choose_from_most_used' => __( 'Choose from the most used question categories' ),
//     'menu_name' => __( 'Question Categories' ),
//   ); 
 
// // Now register the non-hierarchical taxonomy like tag
 
//   register_taxonomy('question categories', null,array(
//     'hierarchical' => false,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_tagcloud' => true,
//     'show_in_rest' => true,
//     'show_admin_column' => true,
//     'update_count_callback' => '_update_post_term_count',
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'Question Category' ),
//   ));
// }




// Our custom post type function
function create_posttype() {
 
  register_post_type( 'faqs',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'FAQs' ),
              'singular_name' => __( 'FAQ' ),
              'menu_name'           => __( 'FAQs'),
              'parent_item_colon'   => __( 'Parent FAQ'),
              'all_items'           => __( 'All FAQs'),
              'view_item'           => __( 'View FAQ'),
              'add_new_item'        => __( 'Add New FAQ'),
              'add_new'             => __( 'Add New'),
              'edit_item'           => __( 'Edit FAQ'),
              'update_item'         => __( 'Update FAQ'),
              'search_items'        => __( 'Search FAQ'),
              'not_found'           => __( 'Not Found'),
              'not_found_in_trash'  => __( 'Not found in Trash')
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'faqs'),
          'show_in_rest' => true,
          'supports'=> array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'has_archive'         => true,
          'can_export'          => true,
          'capability_type'     => 'page'


      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('faqs'));
    }
 
return $query;
}
 
add_filter('pre_get_posts','searchfilter');



//products


// Creating a products Custom Post Type
function products_custom_post_type() {
	$labels = array(
		'name'                => __( 'Products' ),
		'singular_name'       => __( 'Product'),
		'menu_name'           => __( 'Products'),
		'parent_item_colon'   => __( 'Parent Product'),
		'all_items'           => __( 'All Products'),
		'view_item'           => __( 'View Product'),
		'add_new_item'        => __( 'Add New Product'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Product'),
		'update_item'         => __( 'Update Product'),
		'search_items'        => __( 'Search Product'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'products'),
		'description'         => __( 'Products'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'products', $args );
}
add_action( 'init', 'products_custom_post_type', 0 );



// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'products_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function products_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Product Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Product Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Product Categories' ),
    'all_items' => __( 'All Product Categories' ),
    'parent_item' => __( 'Parent Product Category' ),
    'parent_item_colon' => __( 'Parent Product Category:' ),
    'edit_item' => __( 'Edit Product Category' ), 
    'update_item' => __( 'Update Product Category' ),
    'add_new_item' => __( 'Add New Product Category' ),
    'new_item_name' => __( 'New Product Category Name' ),
    'menu_name' => __( 'Product Categories' ),
  ); 	
 
  register_taxonomy('product-categories',array('products'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'product-category' ),
  ));
}