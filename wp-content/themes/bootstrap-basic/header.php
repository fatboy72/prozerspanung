<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
	
		<div class=" page-container">
			<?php do_action('before'); ?> 
			<header role="banner">
				<div class="container" style="padding-top: 20px;">
					<div class="row row-with-vspace">
                                            <div class="col-xs-4 col-md-6 header-text">
                                                            service hotline<br />
                                                <?php pll_e( 'Telefonnummer' ); ?><br />
                                                <?php pll_e( 'Oeffnungszeiten' ); ?><br />
                                                <?php pll_e( 'Datumausgabe' ); echo '&nbsp;'.show_time(); ?>
                                            </div>

                                            <div class="col-xs-8 col-md-6 header-logo">
                                                <a href="<?php echo country_switch() ?>" rel="home"><img src="<?php site_url(); ?>wp-content/themes/bootstrap-basic/img/logo.jpg" alt="logo" class="img-responsive"/></a>
                                            </div>
					</div><!--.row-->
				</div><!--.container-->

				<nav id="main-navigation" class="container-nav navbar navbar-inverse navbar-static-top">
                                    <div class="container">								

                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                                                <span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div class="collapse navbar-collapse navbar-primary-collapse">
                                            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
                                            <?php dynamic_sidebar('navbar-right'); ?> 

                                            <!--.navbar-burger-button-->
                                            <div class="pull-right">
                                                <span class="search-form pull-xs-left"><?php get_search_form( ); ?></span>
                                            </div>
                                        </div><!--.navbar-collapse-->
                                        
                                    </div>
				</nav>

                <?php
                  $slogan_info = get_slogan_info ();
                ?>
                <div class="header-stage">	
                    <img src="wp-content/uploads/2016/05/header.jpg" alt="header-stage" style="width:100%; height:auto;" />
                    <div class="header-stage-content">
                        <div class="container">
                            <div class="intro-container jumbotron">
                                <div class="intro-text">
                                    <h2><?php echo $slogan_info['sloganbig'] ; ?></h2>
                                </div>
<?php
    if (isset ( $slogan_info ['slogansmall'] ) AND empty ($slogan_info ['slogansmall']) === FALSE) {
?>
                                <div class="intro-text-inner"><p><?php echo $slogan_info ['slogansmall']; ?></p></div>
    <?php
        }
    ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slogan">
                    <div class="container">
                        <div class="slogan-icon">
                            <img class="img-responsive pull-left" src="wp-content/themes/bootstrap-basic/img/up-arrow.png" alt="up-arrow"></img>
                        </div>
                        <div class="slogan-text">
                            <h4 class="h3">newsbreak:</h4>

                             <?php

                                $newsbreak = get_newsbreak();
                                if ( $newsbreak->ID ) {
                                    $post = $newsbreak;
                                    setup_postdata( $newsbreak );
                                    echo get_the_excerpt_more_linked();
                                    wp_reset_postdata();
                                }
                             ?>
                        </div>

                    </div>
                </div>
			
				
            </header>
			
			
            <div id="content" class="site-content">