		
<div class="col-md-12 backgrounded-middle-subpage">				
				
    <h1><?php the_title(); ?></h1>

    <?php 	while (have_posts()) :
                the_post();
                the_content();
            endwhile; 
    ?>
	
<!-- background images -->				
    <div id="background-middle-subpage">
        <img src="wp-content/themes/bootstrap-basic/img/web.jpg" alt="background-middle" />
    </div>
<!-- /.background images -->

</div>