<?php
/**
 * Created by PhpStorm.
 * User: hougang
 * Date: 10/11/15
 * Time: 9:42 PM
 * Template Name: AppleTreePackage
 */

get_header(); the_post(); ?>
<?php if( is_page() ): ?>
    <div class="row wrapper">
        <div class="col-xs-12">
            <img src="<?php echo get_post_meta(get_the_ID(), 'banner', $single); ?>" class="img-responsive">
        </div>
        <div class="clearfix"></div>
        <div class="apple-sep">
            <img src="/wp-content/uploads/2015/11/popular.png">
        </div>
        <div class="col-xs-12">
            <h1><?php $single='true'; _e(get_post_meta(get_the_ID(), 'h1', $single), 'appletreesg.com'); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>