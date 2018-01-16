<?php

// Register Custom Post Type
function yoo_post_type_partner() {

    $labels = array(
        'name'                  => 'Partners',
        'singular_name'         => 'Partner',
        'menu_name'             => 'Partners',
        'name_admin_bar'        => 'Partners',
        'archives'              => 'Partner Archives',
        'attributes'            => 'Partner Attributes',
        'parent_item_colon'     => 'Parent Partner:',
        'all_items'             => 'All Partners',
        'add_new_item'          => 'Add New Partner',
        'add_new'               => 'Add New',
        'new_item'              => 'New Partner',
        'edit_item'             => 'Edit Partner',
        'update_item'           => 'Update Partner',
        'view_item'             => 'View Partner',
        'view_items'            => 'View Partners',
        'search_items'          => 'Search Partners',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into item',
        'uploaded_to_this_item' => 'Uploaded to this item',
        'items_list'            => 'Items list',
        'items_list_navigation' => 'Items list navigation',
        'filter_items_list'     => 'Filter items list',
    );
    $args = array(
        'label'                 => 'Partner',
        'description'           => 'Partner',
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'revisions', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-megaphone'
    );
    register_post_type( 'partner', $args );

}
add_action( 'init', 'yoo_post_type_partner', 0 );


// Register Custom Post Type
function yoo_custom_type_article() {

    $labels = array(
        'name'                  => 'Article',
        'singular_name'         => 'Article',
        'menu_name'             => 'Article',
        'name_admin_bar'        => 'Article',
        'archives'              => 'Item Archives',
        'attributes'            => 'Item Attributes',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'All Articles',
        'add_new_item'          => 'Add New Article',
        'add_new'               => 'Add New',
        'new_item'              => 'New Article',
        'edit_item'             => 'Edit Article',
        'update_item'           => 'Update Article',
        'view_item'             => 'View Article',
        'view_items'            => 'View Articles',
        'search_items'          => 'Search Article',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Article',
        'uploaded_to_this_item' => 'Uploaded to this Article',
        'items_list'            => 'Articles list',
        'items_list_navigation' => 'Articles list navigation',
        'filter_items_list'     => 'Filter articles list',
    );
    $args = array(
        'label'                 => 'Post Type',
        'description'           => 'Post Type Description',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'revisions' ),
        'taxonomies'            => array( 'perspective' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'article', $args );

}
add_action( 'init', 'yoo_custom_type_article', 0 );

// Register Custom Taxonomy
function yoo_custom_taxonomy_perspective() {

    $labels = array(
        'name'                       => 'Perspectives',
        'singular_name'              => 'Perspective',
        'menu_name'                  => 'Perspective',
        'all_items'                  => 'All Perspectives',
        'parent_item'                => 'Parent Perspective',
        'parent_item_colon'          => 'Parent Perspective:',
        'new_item_name'              => 'New Perspective Name',
        'add_new_item'               => 'Add New Perspective',
        'edit_item'                  => 'Edit Perspective',
        'update_item'                => 'Update Perspective',
        'view_item'                  => 'View Perspective',
        'separate_items_with_commas' => 'Separate items with commas',
        'add_or_remove_items'        => 'Add or remove items',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Items',
        'search_items'               => 'Search Items',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No items',
        'items_list'                 => 'Items list',
        'items_list_navigation'      => 'Items list navigation',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'perspective', array( 'article' ), $args );

}
add_action( 'init', 'yoo_custom_taxonomy_perspective', 0 );
