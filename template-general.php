<?php
/**
 * Created by PhpStorm.
 * User: hougang
 * Date: 10/17/15
 * Time: 10:35 PM
 * Template Name: AppleTreeGeneralPage
 */

get_header(); the_post(); ?>
<?php if( is_page() ): ?>
    <div class="row wrapper">

        <div class="col-lg-12 col-no-padding banner-body">
            <img src="<?php echo get_post_meta(get_the_ID(), 'banner', true); ?>" class="img" />
        </div>

        <div class="clearfix"></div>

        <div class="col-xs-12">
            <h1><?php $single='true'; _e(get_post_meta(get_the_ID(), 'h1', $single), 'appletreesg.com'); ?></h1>

            <?php the_content(); ?>
        </div>

    </div>
<?php endif; ?>
<?php get_footer(); ?>