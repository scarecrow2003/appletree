<?php
/**
 * Apple Tree template for displaying the footer
 *
 * @package WordPress
 * @subpackage Apple Tree
 * @since Apple Tree 1.0
 */
?>

				<ul class="footer-widgets"><?php
					if ( function_exists( 'dynamic_sidebar' ) ) :
						dynamic_sidebar( 'footer-sidebar' );
					endif; ?>
				</ul>

                <div class="row footer">
                    <div class="col-lg-12 copyright text-center">
                        <p>
                            <?php _e('Copyright © 2009-2016 Apple Tree Studio', 'appletreesg.com'); ?> &nbsp;|&nbsp;<?php _e('All Rights Reserved.', 'appletreesg.com'); ?>
                        </p>
                    </div>
                </div>

			</div>
        <!-- Bower dependencies -->
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. v2. -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-00000000-1', 'auto');
            ga('send', 'pageview');
        </script>

        <!-- Bower dependencies: Bootstrap plugins -->
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
        <!-- Template script dependency -->
        <!--<script src="<?php /*echo get_template_directory_uri(); */?>/scripts/main.js"></script>-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

		<?php wp_footer(); ?>
	</body>
</html>