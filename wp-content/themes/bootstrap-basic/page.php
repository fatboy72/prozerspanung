<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<?php get_sidebar('left'); ?> 

			<div class="jumbotron">
				<div class="container">
				
					<div class="col-md-6">

					<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column" style="position:relative;z-index:100;">
						<main id="main" class="site-main" role="main">
							<?php 
								if( $page_id > 2 ) {
									while (have_posts()) {
										the_post();
										get_template_part( 'content', 'page' );
										echo "\n\n";
									} //endwhile;
								}
							?>

					<?php 	$post = get_post( 1 );
							setup_postdata( $post ); ?>
							<h2><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2></a>
							<?php the_content( $more_link_text = null );
								  wp_reset_postdata(); ?>

							
						</main>
					</div>
					
				</div>
				
				<div  class="col-md-12" id="background-main" alt="background-main">
					    <img src="wp-content/uploads/2016/05/background-main.png">
				</div>
				
				<div  class="col-md-12" id="background-middle" alt="background-middle">
					    <img src="wp-content/uploads/2016/05/background-middle.png">
				</div>
				
				<div  class="col-md-12 over-bg" >
					<?php 	$post = get_post( 61 );
							setup_postdata( $post ); ?>
							<h2><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2></a>
					<?php 	the_content( $more_link_text = null );
							wp_reset_postdata(); ?>
				</div>
				 
			
				<div class="col-lg-4">
					<p> <div class="img-thumbnail">   <?php	$post = get_post( 70 );
							setup_postdata( $post );
							the_content( $more_link_text = null );
							wp_reset_postdata(); ?>Jochen Hermelbracht<br />
							<b>Gesch&auml;ftsf&uuml;hrer</b></div>
							
						<div class="img-thumbnail"><?php $post = get_post( 73 );
							setup_postdata( $post );
							the_content( $more_link_text = null );
							wp_reset_postdata(); ?>Frank Sielemann<br />
							<b>Verkaufsleitung</b></div></p>
				</div>
					<div class="col-lg-8">
					  <p><?php $post = get_post( 76 );
							setup_postdata( $post );
							the_content( $more_link_text = null );
							wp_reset_postdata(); ?>	</p>
					<p><a class="btn btn-lg btn-success" href="#" role="button">Ansprechpartner</a></p><div style="margin-bottom: 80px;"></div>
					</div>
			
			<div  class="col-md-12 over-bg">	
				<div  class="col-md-4 over-bg" >
					<?php 	$post = get_post( 81 );
							setup_postdata( $post ); ?>
							<h2><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2></a>
					<?php 	the_content( $more_link_text = null );
							wp_reset_postdata(); ?><p><a class="btn btn-lg btn-success" href="#" role="button">Mehr erfahren</a></p>
				</div>
				<div  class="col-md-4 over-bg" ></div>
				<div  class="col-md-4" >
					<img class="img-responsive" src="wp-content/uploads/2016/05/bg-kurbelwelle-kolben.png">
				</div>
			</div>
			
			<div  class="col-md-12 over-bg">	
				<div  class="col-md-4">
					<img class="img-responsive" src="wp-content/uploads/2016/05/bg-kugellager-unten.png">
				</div>
				<div  class="col-md-4 over-bg" ></div>
				<div  class="col-md-4 text-right" >
					<?php 	$post = get_post( 88 );
							setup_postdata( $post ); ?>
							<h2><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2></a>
					<?php 	the_content( $more_link_text = null );
							wp_reset_postdata(); ?><p><a class="btn btn-lg btn-success" href="#" role="button">Mehr erfahren</a></p>
				</div>
			</div>	


				
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 