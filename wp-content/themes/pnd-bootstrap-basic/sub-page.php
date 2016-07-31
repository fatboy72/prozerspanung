		
<div class="col-md-12 backgrounded-middle-subpage">				
				
    <h1><?php the_title(); ?></h1>

    <?php 	while (have_posts()) :
                the_post();
                the_content();
            endwhile; ?>
 


    <?php if( is_page( 287 ) ) { ?>
        <!-- no background image for "jobs" page -->
     <?php }; ?>

    <?php if( is_page( 35 ) XOR is_page( 151 ) ) { ?>
        <div id="background-middle-subpage-right-small"><img src="wp-content/uploads/2016/07/Contentfueller3.png" alt="background-picture" /></div>
     <?php }; ?>

    <?php if( is_page( 291 ) XOR is_page( 395 ) ) { ?>
        <!-- background images -->
        <div id="background-middle-subpage-nine"><img src="wp-content/uploads/2016/07/Contentfueller2.png" alt="contact-picture" />
        </div>
        <!-- /.background images -->
    <?php } ?>

    <?php if( is_page( 101 ) XOR is_page( 157 ) ) { ?>
        <!-- background images -->
        <div id="background-side-subpage-right"><img src="wp-content/themes/pnd-bootstrap-basic/img/web.jpg" alt="background-picture" /></div>
        <!-- /.background images -->
    <?php }; ?>

    <?php if( is_page( 293 )  XOR is_page( 397 ) ) { ?>
    <!-- background images -->
    <div id="background-side-subpage-left"><img src="wp-content/themes/pnd-bootstrap-basic/img/web.jpg" alt="background-picture" /></div>
        <div id="background-middle-subpage-right-turned"><img src="wp-content/themes/pnd-bootstrap-basic/img/web.jpg" alt="background-picture" /></div>
    <!-- /.background images -->
    <?php }; ?>

    <?php if( is_page( 284 ) XOR is_page( 391 ) ) { ?>
        <!-- background images -->
        <div id="background-middle-subpage-right"><img src="wp-content/uploads/2016/07/Contentfueller2.png" alt="background-picture" /></div>
        <!-- /.background images -->
    <?php }; ?>


</div>