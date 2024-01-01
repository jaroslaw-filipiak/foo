<?php
/*
 * The default template for displaying content of book page
 */

$post_id = get_the_ID();
$has_thumbnail = has_post_thumbnail($post_id);
$thumbnail_url = $has_thumbnail ? get_the_post_thumbnail_url($post_id, 'medium') : '';
?>

<article <?php post_class(); ?> id="book-<?php echo $post_id; ?>">
    <div class="container pt-5 pb-5 ps-5 pe-5">
        <div class="row d-flex flex-column flex-xl-row">
            <?php if ($has_thumbnail) : ?>
                <div class="col col-xl-4 pb-5">
                    <p>Book cover: </p>
                    <img class="img-fluid" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>">
                </div>
            <?php endif; ?>
            <div class="col ps-lg-5 pb-5 <?php echo $has_thumbnail ? 'col-xl-8' : 'col-xl-12' ?> ">
                <p>Book title:</p>
                <h1 class="m-0 pb-3"><?php echo esc_html(get_the_title($post_id)); ?></h1>
                <?php echo get_the_term_list($post_id, 'genre', '<p>Genre: ', ', ', '</p>'); ?>

                <?php
                $post_date = get_the_date('l F j, Y', $post_id);
                echo esc_html($post_date);
                ?>
            </div>
        </div>
    </div>
</article>