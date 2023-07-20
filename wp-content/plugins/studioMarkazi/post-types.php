<?php
require_once plugin_dir_path( __FILE__ ) . '/classes/cpt.class.php';

$stmkz_prodcut_cpt_labels = array(
  'name'                  => _x( 'Food', 'Post type general name', 'studioMarkazi' ),
  'singular_name'         => _x( 'Food', 'Post type singular name', 'studioMarkazi' ),
  'menu_name'             => _x( 'Food', 'Admin Menu text', 'studioMarkazi' ),
  'name_admin_bar'        => _x( 'Food', 'Add New on Toolbar', 'studioMarkazi' ),
  'add_new'               => __( 'Add New', 'studioMarkazi' ),
  'add_new_item'          => __( 'Add New Food', 'studioMarkazi' ),
  'new_item'              => __( 'New Food', 'studioMarkazi' ),
  'edit_item'             => __( 'Edit Food', 'studioMarkazi' ),
  'view_item'             => __( 'View Food', 'studioMarkazi' ),
  'all_items'             => __( 'All Food', 'studioMarkazi' ),
  'search_items'          => __( 'Search Food', 'studioMarkazi' ),
  'parent_item_colon'     => __( 'Parent Food:', 'studioMarkazi' ),
  'not_found'             => __( 'No product found.', 'studioMarkazi' ),
  'not_found_in_trash'    => __( 'No product found in Trash.', 'studioMarkazi' ),
  'featured_image'        => _x( 'Food Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'studioMarkazi' ),
  'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'studioMarkazi' ),
  'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'studioMarkazi' ),
  'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'studioMarkazi' ),
  'archives'              => _x( 'Food archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'studioMarkazi' ),
  'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'studioMarkazi' ),
  'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'studioMarkazi' ),
  'filter_items_list'     => _x( 'Filter product list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'studioMarkazi' ),
  'items_list_navigation' => _x( 'Food list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'studioMarkazi' ),
  'items_list'            => _x( 'Food list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'studioMarkazi' ),
);

$stmkz_prodcut_cpt_args = array(
  'labels'             => $stmkz_prodcut_cpt_labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'stmkz_food' ),
  'capability_type'    => 'post',
  'exclude_from_search' => false,
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => null,
  'menu_icon'          => "dashicons-food",
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
);

$stmkz_prodcut_type_taxonomy_labels = array(
  'name'              => _x( 'Food Types', 'taxonomy general name', 'studioMarkazi' ),
  'singular_name'     => _x( 'Food Type', 'taxonomy singular name', 'studioMarkazi' ),
  'search_items'      => __( 'Search Food Types', 'studioMarkazi' ),
  'all_items'         => __( 'All Food Types', 'studioMarkazi' ),
  'parent_item'       => __( 'Parent Food Type', 'studioMarkazi' ),
  'parent_item_colon' => __( 'Parent Food Type:', 'studioMarkazi' ),
  'edit_item'         => __( 'Edit Food Type', 'studioMarkazi' ),
  'update_item'       => __( 'Update Food Type', 'studioMarkazi' ),
  'add_new_item'      => __( 'Add New Food Type', 'studioMarkazi' ),
  'new_item_name'     => __( 'New Food Type Name', 'studioMarkazi' ),
  'menu_name'         => __( 'Food Type', 'studioMarkazi' ),
);
 
$stmkz_prodcut_type_taxonomy_args = array(
  'hierarchical'      => false,
  'labels'            => $stmkz_prodcut_type_taxonomy_labels,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
  'show_in_rest'      => true,
  'rewrite'           => array( 'slug' => 'stmkz__prodcut_type' ),
);

$stmkz_animal_type_taxonomy_labels = array(
  'name'              => _x( 'Food Types', 'taxonomy general name', 'studioMarkazi' ),
  'singular_name'     => _x( 'Food Type', 'taxonomy singular name', 'studioMarkazi' ),
  'search_items'      => __( 'Search Food Types', 'studioMarkazi' ),
  'all_items'         => __( 'All Food Types', 'studioMarkazi' ),
  'parent_item'       => __( 'Parent Food Type', 'studioMarkazi' ),
  'parent_item_colon' => __( 'Parent Food Type:', 'studioMarkazi' ),
  'edit_item'         => __( 'Edit Food Type', 'studioMarkazi' ),
  'update_item'       => __( 'Update Food Type', 'studioMarkazi' ),
  'add_new_item'      => __( 'Add New Food Type', 'studioMarkazi' ),
  'new_item_name'     => __( 'New Food Type Name', 'studioMarkazi' ),
  'menu_name'         => __( 'Food Type', 'studioMarkazi' ),
);
 


$stmkz_product_taxonomies = [
  array($stmkz_prodcut_type_taxonomy_args, "stmkz__food_type"),
];


$stmkz_product_cpt = new stmkz_CPT($stmkz_prodcut_cpt_args, "stmkz_food", $stmkz_product_taxonomies);
add_action( 'init', array($stmkz_product_cpt, "stmkz_register_post_type" ));

function stmkz_rewrite_flush() {
  // First, we "add" the custom post type via the above written function.
  // Note: "add" is written with quotes, as CPTs don't get added to the DB,
  // They are only referenced in the post_type column with a post entry,
  // when you add a post of this CPT.
  // $stmkz_product_cpt -> stmkz_register_post_type();

  // ATTENTION: This is *only* done during plugin activation hook in this example!
  // You should *NEVER EVER* do this on every page load!!
  flush_rewrite_rules();
}