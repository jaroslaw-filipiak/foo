<?php


/*
|--------------------------------------------------------------------------
| Books CPT
|--------------------------------------------------------------------------
*/


if (!function_exists('books')) {


    function books()
    {

        $labels = array(
            'name'                  => _x('Books', 'Post Type General Name', 'child-of-twentytwenty'),
            'singular_name'         => _x('Book', 'Post Type Singular Name', 'child-of-twentytwenty'),
            'menu_name'             => __('Books', 'child-of-twentytwenty'),
            'name_admin_bar'        => __('Books', 'child-of-twentytwenty'),
            'archives'              => __('Archives', 'child-of-twentytwenty'),
            'attributes'            => __('Attributes', 'child-of-twentytwenty'),
            'parent_item_colon'     => __('Parent Item:', 'child-of-twentytwenty'),
            'all_items'             => __('All Items', 'child-of-twentytwenty'),
            'add_new_item'          => __('Add New Item', 'child-of-twentytwenty'),
            'add_new'               => __('Add New', 'child-of-twentytwenty'),
            'new_item'              => __('New Book', 'child-of-twentytwenty'),
            'edit_item'             => __('Edit Book', 'child-of-twentytwenty'),
            'update_item'           => __('Update', 'child-of-twentytwenty'),
            'view_item'             => __('View', 'child-of-twentytwenty'),
            'view_items'            => __('View', 'child-of-twentytwenty'),
            'search_items'          => __('Search', 'child-of-twentytwenty'),
            'not_found'             => __('Not found', 'child-of-twentytwenty'),
            'not_found_in_trash'    => __('Not found in Trash', 'child-of-twentytwenty'),
            'featured_image'        => __('Featured Image', 'child-of-twentytwenty'),
            'set_featured_image'    => __('Set featured image', 'child-of-twentytwenty'),
            'remove_featured_image' => __('Remove featured image', 'child-of-twentytwenty'),
            'use_featured_image'    => __('Use as featured image', 'child-of-twentytwenty'),
            'insert_into_item'      => __('Insert into item', 'child-of-twentytwenty'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'child-of-twentytwenty'),
            'items_list'            => __('Items list', 'child-of-twentytwenty'),
            'items_list_navigation' => __('Items list navigation', 'child-of-twentytwenty'),
            'filter_items_list'     => __('Filter items list', 'child-of-twentytwenty'),
        );
        $rewrite = array(
            'slug'                  => 'library',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __('Book', 'child-of-twentytwenty'),
            'description'           => __('Books CPT', 'child-of-twentytwenty'),
            'labels'                => $labels,
            'supports'              => array('title', 'editor', 'excerpt', 'thumbnail'),
            'taxonomies'            => array('genre'),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-book',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type('books', $args);
    }
    add_action('init', 'books', 0);
}
