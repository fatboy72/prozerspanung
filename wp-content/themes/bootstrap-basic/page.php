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
     $teaser_info = get_teaser_info ();



	if( is_front_page() ) {
?>
						<div class="col-md-6">
                            <?php $post = $teaser_info['teaser1'];
                            setup_postdata( $post ); ?>
							<h1><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1>

                            <?php the_content( $more_link_text = null ); ?>
                            <p><a class="btn btn-default" href="<?php the_permalink() ?>" role="button">Mehr erfahren</a></p>
                        </div>

				
                        <div class="col-md-12" id="background-main">
                                <img src="wp-content/uploads/2016/05/background-main.png">
                        </div>
                        <div  class="row-fluid" >
                            <div  class="col-md-12" id="background-middle">
                                <img src="wp-content/uploads/2016/05/background-middle.png">
                            </div>
                        </div>

                        <div  class="col-md-12 over-bg" >
                            <?php $post = $teaser_info['teaser2'];
                            setup_postdata( $post ); ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
        
                            <?php the_content( $more_link_text = null ); ?>
                            <p><a class="btn btn-default" href="<?php the_permalink() ?>" role="button">Mehr erfahren</a></p>
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                 <?php $post = $teaser_info['geschaftsfuhrer'];
                                        setup_postdata( $post );
                                        the_content( $more_link_text = null ); ?>
                                 <p><a class="btn btn-primary" href="<?php the_permalink() ?>" role="button">Kontakt &raquo;</a></p>
                                </div>
                                <div class="col-lg-4">
                                    <?php $post = $teaser_info['vertriebsleiter'];
                                    setup_postdata( $post );
                                    the_content( $more_link_text = null ); ?>
                                    <p><a class="btn btn-primary" href="<?php the_permalink() ?>" role="button">Kontakt &raquo;</a></p>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <p><?php $zitat = $teaser_info['zitat_startseite'];
                                        echo "<mark>" .$zitat ."</mark>" ?></p>
                                </div>
                            </div>
                        </div>


                        <div  class="col-md-12 over-bg">
                            <div  class="col-md-8" >
                                <?php $post = $teaser_info['teaser4'];
                                setup_postdata( $post ); ?>
                                <h1><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1>
                                <?php 	the_content( $more_link_text = null ); ?>
                                <p><a class="btn btn-default" href="<?php the_permalink() ?>" role="button">Mehr erfahren</a></p>
                            </div>
                            <div  class="col-md-4">
                                <img class="img-responsive" src="wp-content/uploads/2016/05/bg-kurbelwelle-kolben.png" alt="kurbelwelle-kolben" />
                            </div>
                        </div>


                        <div  class="col-md-12 over-bg">
                            <div  class="col-md-4">
                                <img class="img-responsive" src="wp-content/uploads/2016/05/bg-kugellager-unten.png" alt="kugellager-unten" />
                            </div>
                            <div  class="col-md-8 text-right" >
                                <?php $post = $teaser_info['teaser5'];
                                setup_postdata( $post ); ?>
                                <h1><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1>
                                <?php 	the_content( $more_link_text = null ); ?>
                                <p><a class="btn btn-default" href="<?php the_permalink() ?>" role="button">Mehr erfahren</a></p>
                            </div>
                        </div>

<!-- include page-content if not frontpage!  -->
<?php
    wp_reset_postdata();
    } else {
	include("sub-page.php");
}
?>

				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /. -->


<!-- /.include page-content if not frontpage!  -->
				
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 