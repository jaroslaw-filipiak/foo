<?php

/*
|--------------------------------------------------------------------------
| Genre taxonomy for Books
|--------------------------------------------------------------------------
*/

if (!function_exists('genre_taxonomy')) {

    function genre_taxonomy()
    {

        $labels = array(
            'name'                       => _x('Genres', 'Taxonomy General Name', 'child-of-twentytwenty'),
            'singular_name'              => _x('Genre', 'Taxonomy Singular Name', 'child-of-twentytwenty'),
            'menu_name'                  => __('Genre', 'child-of-twentytwenty'),
            'all_items'                  => __('All Items', 'child-of-twentytwenty'),
            'parent_item'                => __('Parent Item', 'child-of-twentytwenty'),
            'parent_item_colon'          => __('Parent Item:', 'child-of-twentytwenty'),
            'new_item_name'              => __('New', 'child-of-twentytwenty'),
            'add_new_item'               => __('Add New', 'child-of-twentytwenty'),
            'edit_item'                  => __('Edit Item', 'child-of-twentytwenty'),
            'update_item'                => __('Update Item', 'child-of-twentytwenty'),
            'view_item'                  => __('View Item', 'child-of-twentytwenty'),
            'separate_items_with_commas' => __('Separate items with commas', 'child-of-twentytwenty'),
            'add_or_remove_items'        => __('Add or remove items', 'child-of-twentytwenty'),
            'choose_from_most_used'      => __('Choose from the most used', 'child-of-twentytwenty'),
            'popular_items'              => __('Popular Items', 'child-of-twentytwenty'),
            'search_items'               => __('Search Items', 'child-of-twentytwenty'),
            'not_found'                  => __('Not Found', 'child-of-twentytwenty'),
            'no_terms'                   => __('No items', 'child-of-twentytwenty'),
            'items_list'                 => __('Items list', 'child-of-twentytwenty'),
            'items_list_navigation'      => __('Items list navigation', 'child-of-twentytwenty'),
        );
        $rewrite = array(
            'slug'                       => 'book-genre',
            'with_front'                 => true,
            'hierarchical'               => false,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => $rewrite,
            'show_in_rest'               => true,
        );
        register_taxonomy('genre', array('books'), $args);
    }
    add_action('init', 'genre_taxonomy', 0);
}
