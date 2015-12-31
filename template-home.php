<?php
/**
 * Created by PhpStorm.
 * User: hougang
 * Date: 10/11/15
 * Time: 9:38 PM
 * Template Name: AppleTreeHomePage
 */

get_header(); the_post(); ?>
<?php if( is_page() ): ?>
    <h1>No use</h1>
<?php endif; ?>
<?php get_footer(); ?>