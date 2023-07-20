<?php
include_once plugin_dir_path( __FILE__ ) . "/taxonomies.php";

function stmkz_register_custom_taxonomy() {

  $labels = array(
    'name'              => _x( 'Product Types', 'taxonomy general name', 'hezardasht' ),
    'singular_name'     => _x( 'Product Type', 'taxonomy singular name', 'hezardasht' ),
    'search_items'      => __( 'Search Product Types', 'hezardasht' ),
    'all_items'         => __( 'All Product Types', 'hezardasht' ),
    'view_item'         => __( 'View Product Type', 'hezardasht' ),
    'parent_item'       => __( 'Parent Product Type', 'hezardasht' ),
    'parent_item_colon' => __( 'Parent Product Type:', 'hezardasht' ),
    'edit_item'         => __( 'Edit Product Type', 'hezardasht' ),
    'update_item'       => __( 'Update Product Type', 'hezardasht' ),
    'add_new_item'      => __( 'Add New Product Type', 'hezardasht' ),
    'new_item_name'     => __( 'New Product Type Name', 'hezardasht' ),
    'not_found'         => __( 'No Product Types Found', 'hezardasht' ),
    'back_to_items'     => __( 'Back to Product Types', 'hezardasht' ),
    'menu_name'         => __( 'Product Type', 'hezardasht' ),
  );

  $args = array(
    'labels'            => $labels,
    'hierarchical'      => true,
    'public'            => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'product_type' ),
    'show_in_rest'      => true,
  );


  register_taxonomy( 'stmkz__product_type', 'stmkz__product', $args );

}