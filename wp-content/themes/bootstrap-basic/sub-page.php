		
				
				
					<h1><span class="red-pipes">||</span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1></a>

					<?php 	while (have_posts()) :
								the_post();
								the_content();
							endwhile; 
					?>




<?php

if( $page_id != 7 ) : ?>
	
<!-- background images -->				
				<div id="background-middle-subpage">
				    <img src="wp-content/uploads/2016/05/web.jpg" alt="background-middle" />
				</div>
<!-- /.background images -->
<?php endif; ?>