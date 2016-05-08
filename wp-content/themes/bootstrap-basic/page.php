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
				<div  class="col-md-12" id="background-main">
					    <img src="wp-content/uploads/2016/05/background-main.png">
				</div>
				 
				 <div  class="col-md-12 over-bg" >
				
					<?php 	$post = get_post( 61 );
							setup_postdata( $post ); ?>
							<h2><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2></a>
					<?php 	the_content( $more_link_text = null );
							wp_reset_postdata(); ?>
								  
					
					<div class="col-md-8">
					<?php 	$post = get_post( 70 );
							setup_postdata( $post );
							the_content( $more_link_text = null );
							wp_reset_postdata(); ?>
					
					<?php 	$post = get_post( 73 );
							setup_postdata( $post );
							the_content( $more_link_text = null );
							wp_reset_postdata(); ?>
					</div>
					
					<div class="col-md-4">
					<?php 	$post = get_post( 76 );
							setup_postdata( $post );
							the_content( $more_link_text = null );
							wp_reset_postdata(); ?>		
					</div>
					
				 </div>
			</div>
		</div>
				
				
				
				
				
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 