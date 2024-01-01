<?php get_header();

$term = get_queried_object();
$slug = $term->slug;

?>


<main id="site-content pb-5">
    <div class="container border">
        <div class="row">
            <div class="col">
                <h1>book genree: <?php echo $slug ?></h1>
            </div>
            <div class="row pb-5 mb-5">
                <div class="col">
                    <?php
                    $term = get_queried_object();

                    if ($term && property_exists($term, 'taxonomy') && property_exists($term, 'slug')) {
                        $taxonomy = $term->taxonomy;
                        $slug = $term->slug;

                        if (get_query_var('paged')) {
                            $paged = get_query_var('paged');
                        } elseif (get_query_var('page')) {
                            $paged = get_query_var('page');
                        } else {
                            $paged = 1;
                        }

                        $args = array(
                            'posts_per_page' => 5,
                            'post_type' => 'books',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => $taxonomy,
                                    'field'    => 'slug',
                                    'terms'    => $slug,
                                ),
                            ),
                            'paged' => $paged,
                        );

                        $query = new WP_Query($args);



                        while ($query->have_posts()) {
                            $query->the_post(); ?>
                            <h5>
                                <a class='d-block' href='<?php echo get_the_permalink() ?>'><?php echo get_the_title() ?>
                                </a>
                            </h5>

                    <?php }

                        // Pagination
                        echo '<div class="pagination d-flex align-items-center justify-content-around">';
                        echo paginate_links(array(
                            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                            'total' => $query->max_num_pages,
                            'current' => max(1, get_query_var('paged')),
                            'format' => '?paged=%#%',
                            'show_all' => false,
                            'type' => 'plain',
                        ));
                        echo '</div>';
                    } else {
                        echo 'No taxonomy or slug found';
                    }
                    ?>
                </div>
            </div>

        </div>
</main><!-- #site-content -->


<style>
    .prev.page-numbers .next.page-numbers {
        border: 2px solid red;
        max-width: 300px;

    }

    .page-numbers {
        padding: 12px;
    }
</style>

<?php get_footer();
