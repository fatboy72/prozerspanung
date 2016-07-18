<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package pnd-bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<?php get_sidebar('left'); ?> 


		<div class="container">

			<div class="col-md-12 backgrounded-middle-subpage">

				<h1><?php the_title(); ?></h1>

				<?php while (have_posts()) {

					the_post();
					get_template_part('content', get_post_format());
					echo "\n\n";
					bootstrapBasicPagination();
					echo "\n\n";
					// // If comments are open or we have at least one comment, load up the comment template
					// if (comments_open() || '0' != get_comments_number()) {
					// comments_template();
					// }
					echo "\n\n";

				} //endwhile; ?>

				<!-- background images -->
				<div id="background-middle-subpage">
					<img src="wp-content/themes/pnd-bootstrap-basic/img/web.jpg" alt="background-middle" />
				</div>
				<!-- /.background images -->

			</div>
				
		</div>

				
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?>

