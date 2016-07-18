<?php
/**
 * Template for displaying pages
 * 
 * @package pnd-pnd-pnd-bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php get_sidebar('left'); ?> 

		<div class="<?php echo ( is_front_page() ? 'homepage-content' : 'normal-content' );?>">	
			<div class="container">
				
				<div class="row">
						
<?php
     $teaser_info = get_teaser_info ();

	if( is_front_page() ) {
?>          <!-- teaser-Section 1 -->   
            <div class="homepage-section homepage-section-1">
                <div class="col-md-12 homepage-text">
                    <!-- Intro Section 1 -->  
                    
                    <?php
                    wp_reset_postdata();
                    the_content(); ?>  
                </div>

                <!-- first Teaser -->
                <div class="col-md-12 teaser teaser-1 teaser-important">                    
                    <?php 
                        $post = $teaser_info['teaser1'];
                        setup_postdata($post);
                        show_teaser(); 
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            <!-- teaser-Sections separator -->
            <div class="col-md-12" id="background-main">
                    <img src="wp-content/themes/pnd-bootstrap-basic/img/background-main.png">
            </div>


            <!-- teaser Section 2 -->
            <div class="homepage-section homepage-section-2">
                <div  class="col-md-12 homepage-text">
                    <h2 class="h1"><?php echo get_field( 'homepageintrottitle2' );?></h2>
                    <?php echo get_field( 'homepageintrotext2' );?>
                </div>
                <div  class="col-md-12 teaser teaser-2 teaser-important">
                    <?php 
                        $post = $teaser_info['teaser2'];
                        setup_postdata($post);
                        show_teaser(); 
                        wp_reset_postdata();
                    ?>
                </div>

                <div  class="col-md-12 teaser teaser-3">
                    <?php 
                        $post = $teaser_info['teaser4'];
                        setup_postdata($post);
                        show_teaser(); 
                        wp_reset_postdata();
                    ?>
                    
                </div>


                <div  class="col-md-12 teaser teaser-4">
                    <?php 
                        $post = $teaser_info['teaser5'];
                        setup_postdata($post);
                        show_teaser(); 
                        wp_reset_postdata();
                    ?>
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