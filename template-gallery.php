<?php
/**
 * Created by PhpStorm.
 * User: hougang
 * Date: 10/17/15
 * Time: 10:35 PM
 * Template Name: AppleTreeGalleryPage
 */

get_header(); the_post(); ?>
<?php if( is_page() ): ?>
    <div class="row wrapper">
        <div class="col-xs-12">
            <h1><?php _e(get_post_meta(get_the_ID(), 'h1', true), 'appletreesg.com'); ?></h1>
            <div class="nobanner-content">
                <?php the_content(); ?>
            </div>
        </div>

        <?php
        $slug = substr($_SERVER["REQUEST_URI"], 1, strlen($_SERVER["REQUEST_URI"])-1);
        $query_images_args = array(
            'post_type' => 'attachment',
            'post_mime_type' =>'image',
            'post_status' => 'inherit',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => $slug,
                ),
            ),
        );
        $query_images = new WP_Query( $query_images_args );
        if ( $query_images->have_posts() ) {
            while ( $query_images->have_posts() ) {
                $query_images->the_post();;
                $url = wp_get_attachment_url( get_the_ID());
                echo '<div class="col-xs-12 category-img"><img src="'.$url.'" class="img-responsive"></div>';
            }
        }
        wp_reset_postdata();
        ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>