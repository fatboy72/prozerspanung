<?php
/**
 * Template for aside post format
 * 
 * @package pnd-bootstrap-basic
 */
?>

<div class="container">
	
	<div class="row">
		
		<div class="col-md-12 backgrounded-middle-subpage">

			<h2><?php the_title(); ?></h2>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(bootstrapBasicMoreLinkText()); ?>
					<div class="clearfix"></div>
					<?php
					/**
					 * This wp_link_pages option adapt to use bootstrap pagination style.
					 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
					 */
					wp_link_pages(array(
						'before' => '<div class="page-links">' . __('Pages:', 'pnd-bootstrap-basic') . ' <ul class="pagination">',
						'after'  => '</ul></div>',
						'separator' => ''
					));
					?>
				</div><!-- .entry-content -->

				<footer class="entry-meta">
					<?php
					if (is_single()) {
						?>
						<?php if ('post' == get_post_type()) { // Hide category and tag text for pages on Search ?>
						<div class="entry-meta-category-tag">
							<?php
								/* translators: used between list items, there is a space after the comma */
								$categories_list = get_the_category_list(__(', ', 'pnd-bootstrap-basic'));
								if (!empty($categories_list)) {
							?>
<!--							<span class="cat-links">-->
<!--								--><?php //echo bootstrapBasicCategoriesList($categories_list); ?>
<!--							</span>-->
							<?php } // End if categories ?>

							<?php
								/* translators: used between list items, there is a space after the comma */
								$tags_list = get_the_tag_list('', __(', ', 'pnd-bootstrap-basic'));
								if ($tags_list) {
							?>
							<span class="tags-links">
								<?php echo bootstrapBasicTagsList($tags_list); ?>
							</span>
							<?php } // End if $tags_list ?>
						</div><!--.entry-meta-category-tag-->
						<?php } // End if 'post' == get_post_type() ?>

						<div class="entry-meta-comment-tools">
							<?php if (! post_password_required() && (comments_open() || '0' != get_comments_number())) { ?>
							<span class="comments-link"><?php bootstrapBasicCommentsPopupLink(); ?></span>
							<?php } //endif; ?>

							<?php bootstrapBasicEditPostLink(); ?>
						</div><!--.entry-meta-comment-tools-->
						<?php
					} else {
						bootstrapBasicPostOn();
					} // is_single()
					?>
				</footer><!-- .entry-meta -->
			</article><!-- #post -->

		</div>

	</div>

</div>
<div class="content-aside-style"></div>