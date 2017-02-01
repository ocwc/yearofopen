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
