		
<div class="col-md-12 backgrounded-middle-subpage">				
				
    <h1><?php the_title(); ?></h1>

    <?php 	while (have_posts()) :
                the_post();
                the_content();
            endwhile; 
    ?>




<?php if( is_page( 284 ) ) { ?>
        <!-- background images -->
            <div id="background-middle-subpage">
                <img src="" alt="" />
            </div>
        <!-- /.background images -->
 <?php }; ?>

<?php if( is_page( 287 ) ) { ?>
    <!-- no background image for "jobs" page -->
 <?php }; ?>

<?php if( is_page( 101 ) XOR is_page( 157 ) ) { ?>
    <!-- background images -->
    <div id="background-middle-subpage-right">
        <img src="wp-content/uploads/2016/07/Contentfueller1.png" alt="contact-picture" /></div>
    <!-- /.background images -->
<?php }; ?>

<?php if( is_page( 291 ) ) { ?>
    <!-- background images -->
    <div id="background-middle-subpage-nine">
        <img src="wp-content/uploads/2016/07/Contentfueller2.png" alt="contact-picture" />
    </div>
    <!-- /.background images -->
<?php } ?>






</div>