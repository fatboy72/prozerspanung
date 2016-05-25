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

		<div class="">	
			<div class="container">
				
				<div class="row">
				
					

						
						
							<?php

	switch( $page_id ) {
							
					case 2:
							?>
						<div class="col-md-6">
					<?php 	$post = get_post( 1 );
							setup_postdata( $post ); ?>
							<h1><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<?php the_content( $more_link_text = null );
								  wp_reset_postdata(); ?>
							<p><a class="btn btn-default" href="#" role="button">Mehr erfahren</a></p>

							
						
						</div>
					
					</div>
				
				<div class="col-md-12" id="background-main" alt="background-main">
					    <img src="wp-content/uploads/2016/05/background-main.png">
				</div>
				
				<div  class="col-md-12" id="background-middle" alt="background-middle">
					    <img src="wp-content/uploads/2016/05/background-middle.png">
				</div>
				
				<div  class="col-md-12 over-bg" >
					<?php 	$post = get_post( 61 );
							setup_postdata( $post ); ?>
							<h2 class="h1"><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
					<p><a class="btn btn-default" href="#" role="button">Ansprechpartner</a></p><div style="margin-bottom: 80px;"></div>
				</div>
			
				<div  class="col-md-12 over-bg">	
					<div  class="col-md-8 over-bg" >
						<?php 	$post = get_post( 81 );
								setup_postdata( $post ); ?>
								<h2 class="h1"><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php 	the_content( $more_link_text = null );
								wp_reset_postdata(); ?><p><a class="btn btn-default" href="#" role="button">Mehr erfahren</a></p>
					</div>
					<div  class="col-md-4" >
						<img class="img-responsive" src="wp-content/uploads/2016/05/bg-kurbelwelle-kolben.png">
					</div>
				</div>
				
				<div  class="col-md-12 over-bg">	
					<div  class="col-md-4">
						<img class="img-responsive" src="wp-content/uploads/2016/05/bg-kugellager-unten.png">
					</div>
					<div  class="col-md-8 text-right" >
						<?php 	$post = get_post( 88 );
								setup_postdata( $post ); ?>
								<h2 class="h1"><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php 	the_content( $more_link_text = null );
								wp_reset_postdata(); ?><p><a class="btn btn-default" href="#" role="button">Mehr erfahren</a></p>
					</div>
				</div>	
	</div> <!-- /.row -->
<?php 
	break; 
?>



<!-- include page-content if not frontpage!  -->
<?php	
	default:		
			include( "sub-page.php" );
	break;
				
} ?>
<!-- /.include page-content if not frontpage!  -->
				
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 