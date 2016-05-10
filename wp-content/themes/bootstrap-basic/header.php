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
				<div class="container">
					<div class="row row-with-vspace">
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="header-text">
									service hotline<br />
									0800 - 701 702<br />
									mo-fr 09.00 - 18.00 uhr
								</div>
								<div class="search-form"><?php get_search_form( ); ?></div>
							</div>
						
								<a href="#" rel="home"><img src="<?php site_url(); ?>wp-content/uploads/2016/05/logo.jpg" alt="logo" style="max-width:100%; height:auto; float:right;"></img></a>
							
						</div><!-- .col-md-12 -->
					</div><!--.row-->
				</div>
				
				<div class="container-nav">
					<div class="container">
						<div class="row main-navigation">
							<div class="col-md-12">
								<nav class="navbar navbar-inverse" role="navigation">
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
									</div><!--.navbar-collapse-->
								</nav>
							</div><!--.col-md-12-->
						</div><!--.main-navigation-->
					</div>
				</div>
				
				<div class="jumbotron" style="padding-top: 0px;">
					<img src="<?php site_url(); ?>wp-content/uploads/2016/05/header.jpg" alt="header-stage" style="max-width:100%; height:auto;"></img>
					<div class="slogan">
						<div class="container">
							<div class="slogan-text"><img src="<?php site_url(); ?>wp-content/uploads/2016/05/up-arrow.png" alt="up-arrow" style="max-width:100%; height:auto;"></img>newsbraek: <a href="#">AMB-Stuttgard - Ein grosser Erfolg f&uuml;r proZerspanung.</a></div>
						</div>
					</div>
				</div>
			</header>
			
			
			<div id="content" class="row site-content">