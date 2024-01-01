<?php

/*
|--------------------------------------------------------------------------
| Last recent book shortcode
|--------------------------------------------------------------------------
*/

function last_recent_book_shortcode()
{
    $args = array(
        'post_type' => 'books',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $query = new WP_Query($args);

    $output = '';

    while ($query->have_posts()) {
        $query->the_post();
        $output .= '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
    }

    return $output;
}
add_shortcode('recent_book', 'last_recent_book_shortcode');


/*
|--------------------------------------------------------------------------
| Last 5 recent books shortcode + genre_id as parameter
|--------------------------------------------------------------------------
*/

function last_five_recent_books_shortcode($genre_id)
{
    $args = array(
        'post_type' => 'books',
        'posts_per_page' => 5,
        'orderby' => 'title',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'genre',
                'field'    => 'id',
                'terms'    => $genre_id,
            ),
        ),
    );

    $query = new WP_Query($args);

    $output = '';

    while ($query->have_posts()) {
        $query->the_post();
        $output .= '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
    }

    return $output;
}
add_shortcode('last_five_recent_books', 'last_five_recent_books_shortcode');
