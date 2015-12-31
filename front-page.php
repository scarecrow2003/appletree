<?php
/**
 * Apple Tree template for displaying the Front-Page
 *
 * @package WordPress
 * @subpackage Apple Tree
 * @since Apple Tree 1.0
 */

get_header(); the_post(); ?>
<?php if( is_page() ): ?>
    <div class="row wrapper">
        <div class="col-xs-12">
            <?php echo do_shortcode('[advps-slideshow optset="2"]'); ?>
        </div>
        <div class="clearfix"></div>
        <div class="apple-sep">
            <img src="/wp-content/uploads/2015/11/popular.png">
        </div>
        <div class="col-xs-12">
            <h1><?php echo __(get_post_meta(get_the_ID(), 'h1', true), 'appletreesg.com'); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-3 col-xs-6 cat-link">
            <a href="<?php echo get_post_meta(get_the_ID(), 'linkone', true); ?>">
                <img src="<?php echo get_post_meta(get_the_ID(), 'imageone', true); ?>" class="img-responsive" alt="New born">
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 cat-link">
            <a href="<?php echo get_post_meta(get_the_ID(), 'linktwo', true); ?>">
                <img src="<?php echo get_post_meta(get_the_ID(), 'imagetwo', true); ?>" class="img-responsive" alt="Studio">
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 cat-link">
            <a href="<?php echo get_post_meta(get_the_ID(), 'linkthree', true); ?>">
                <img src="<?php echo get_post_meta(get_the_ID(), 'imagethree', true); ?>" class="img-responsive" alt="Outdoor">
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 cat-link">
            <a href="<?php echo get_post_meta(get_the_ID(), 'linkfour', true); ?>">
                <img src="<?php echo get_post_meta(get_the_ID(), 'imagefour', true); ?>" class="img-responsive" alt="Maternity">
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
