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
            <?php echo do_shortcode('[wp_owl id="225"]'); ?>
        </div>
        <div class="clearfix"></div>
        <div class="apple-sep">
            <div class="popular"></div>
        </div>
        <div class="col-xs-12">
            <h1><?php echo __(get_post_meta(get_the_ID(), 'h1', true), 'appletreesg.com'); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-3 col-xs-6 cat-link">
            <a href="<?php echo get_post_meta(get_the_ID(), 'linkone', true); ?>">
                <img src="<?php echo get_post_meta(get_the_ID(), 'imageone', true); ?>" width="300" height="307" class="img-responsive" alt="New born">
                <div class="link-text home-link-text" id="link-1">
                    <label>Dream Begin</label>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 cat-link">
            <a href="<?php echo get_post_meta(get_the_ID(), 'linktwo', true); ?>">
                <img src="<?php echo get_post_meta(get_the_ID(), 'imagetwo', true); ?>" width="300" height="307" class="img-responsive" alt="Studio">
                <div class="link-text home-link-text" id="link-2">
                    <label>Happy Life</label>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 cat-link">
            <a href="<?php echo get_post_meta(get_the_ID(), 'linkthree', true); ?>">
                <img src="<?php echo get_post_meta(get_the_ID(), 'imagethree', true); ?>" width="300" height="307" class="img-responsive" alt="Outdoor">
                <div class="link-text home-link-text" id="link-3">
                    <label>Forest Story</label>
                </div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 cat-link">
            <a href="<?php echo get_post_meta(get_the_ID(), 'linkfour', true); ?>">
                <img src="<?php echo get_post_meta(get_the_ID(), 'imagefour', true); ?>" width="300" height="307" class="img-responsive" alt="Maternity">
                <div class="link-text home-link-text" id="link-4">
                    <label>All Love</label>
                </div>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
