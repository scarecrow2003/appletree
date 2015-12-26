<?php
/**
 * Apple Tree template for displaying the header
 *
 * @package WordPress
 * @subpackage Apple Tree
 * @since Apple Tree 1.0
 */
?>

<?php

function isPartOfCurrentMenuItem( $item )
{
    $uri = $_SERVER["REQUEST_URI"];

    if( $uri === '/' )
    {
        return false;
    }

    if ( strpos($item->url, $uri) !== false )
    {
        return true;
    }

    if ( $item->children && count($item->children)>0 )
    {
        foreach ( $item->children as $childItem )
        {
            if ( strpos($childItem->url, $uri) !== false )
            {
                return true;
            }
        }
    }

    return false;
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie ie-no-support" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( ); ?></title>
		<meta name="viewport" content="width=device-width" />
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css" />

        <!-- Template stylesheets -->
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!-- Template scripts -->
        <!--<script src="<?php /*echo get_template_directory_uri(); */?>/bower_components/modernizr/modernizr.js"></script>-->
        <script type="text/javascript">
            var templateDir = "<?php bloginfo('template_directory') ?>";
        </script>


		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="site container-fluid row-offcanvas row-offcanvas-right">

			<header class="site-header header-menu">

                <div class="header row">
                    <div id="logo">
                        <?php if ( '' != get_custom_header()->url ) : ?>
                            <img src="<?php header_image(); ?>" class="img-responsive custom-header" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                        <?php endif; ?>
                    </div>

                    <div class="col-xs-6 pull-right">
                        <div class="lang-container">
                            <?php
                            $uri = $_SERVER['REQUEST_URI'];
                            $qpos = strpos($uri, '?');
                            if ($qpos != -1) {
                                $uri = substr($uri, 0, $qpos);
                            }
                            ?>
                            <div class="lang" class="lang <?php if(isset($_GET['lang']) && $_GET['lang'] == 'zh') {?>selected<?php }?>">
                                <a href="<?php echo $uri;?>?lang=zh"><?php echo '中'; ?></a>
                            </div>
                            <div class="lang">|</div>
                            <div class="lang" class="lang <?php if(!isset($_GET['lang']) || $_GET['lang'] !='zh') {?>selected<?php }?>">
                                <a href="<?php echo $uri;?>?lang=en"><?php echo 'EN'; ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-9 col-md-2 pull-right">
                        <div class="head-social">
                            <ul>
                                <li>
                                    <a href="http://www.facebook.com/appletreestudiosg"  target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" alt="Facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.pinterest.com/appletreesg" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.jpg" alt="Pinterest">
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:contactus@appletreesg.com">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/email.jpg" alt="Email Us">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.twitter.com">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg" alt="Twitter">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

				<div class="col-xs-12 col-md-8 col-md-offset-3 menu"><?php
                    $menuItems = wp_get_nav_menu_items('Header Menu');

                    $menuArray = array();
                    $lastParentMenuItem = null;

                    foreach ( $menuItems as $item )
                    {
                        if (!$item->menu_item_parent)
                        {
                            array_push($menuArray, $item);
                            $lastParentMenuItem = $item;
                            $lastParentMenuItem->children = array();
                        }
                        else
                        {
                            $lastParentMenuItem->children[] = $item;
                        }
                    }
                    ?>

                    <nav class="navbar menu" role="navigation">
                        <div>
                            <ul class="nav navbar-nav navbar-nav-custom">
                                <?php
                                foreach ( $menuArray as $item )
                                {
                                    if ( $item->children && count($item->children)>0 ) {
                                        $menuTitle = __($item->title, 'appletreesg.com');
                                        echo '<li class="dropdown">';
                                        echo '<a href="' . $item->url . '" class="dropdown-toggle menu-item-level-1 ' . (isPartOfCurrentMenuItem($item) ? 'active' : '') . '">' . $menuTitle . '</a>';

                                        echo '<ul class="dropdown-menu dropdown-menu-custom dropdown-menu-custom-left multi-column columns-2">';
                                        echo '<div class="row">';
                                        echo '<div class="col-sm-6">';
                                        echo '<ul class="multi-column-dropdown">';
                                        foreach ($item->children as $childItem) {
                                            $menuChildItem = __($childItem->title, 'appletreesg.com');
                                            echo '<li><a href="' . $childItem->url . '">' . $menuChildItem . '</a></li>';
                                        }
                                        echo '</ul>';
                                        echo '</div>';

                                        echo '<div class="col-sm-6">';
                                        echo '<ul class="multi-column-dropdown">';
                                        echo '<img class="img-menu-item" src="'.get_template_directory_uri().'/images/facebook-icon.png" />';
                                        echo '</ul>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</ul>';

                                        echo '</li>';
                                    }
                                    else
                                    {
                                        $menuTitle = __($item->title, 'appletreesg.com');
                                        echo '<li><a href="' . $item->url .'" class="menu-item-level-1 menu-item-link ' . (isPartOfCurrentMenuItem( $item ) ? 'active' : '') . '">' . $menuTitle . '</a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
				</div>

                <div class="clearfix"></div>

                <div class="col-xs-12 col-md-9 dashed-sep pull-right"></div>

			</header>