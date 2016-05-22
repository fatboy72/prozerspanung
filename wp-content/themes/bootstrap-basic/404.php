<?php get_header(); ?> 
<div class="container">
				<div class="col-md-12 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php _e('Uups! Wir haben die aufgerufene Seite nicht gefunden.', 'bootstrap-basic'); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php _e('Es sieht so aus, als wenn wir an dieser Stelle nichts gefunden haben. Vielleicht versuchen Sie einen der Links unterhalb oder beutzen die Suche?', 'bootstrap-basic'); ?></p>

								<!--search form-->
								<form class="form-horizontal" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="form">
									<div class="form-group">
										<div class="col-xs-10">
											<input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'bootstrap-basic'); ?>" title="<?php echo esc_attr_x('Search &hellip;', 'label', 'bootstrap-basic'); ?>" class="form-control" />
										</div>
										<div class="col-xs-2">
											<button type="submit" class="btn btn-default"><?php _e('Search', 'bootstrap-basic'); ?></button>
										</div>
									</div>
								</form><!-- ./search form-->

								<div class="row">
									
									<div class=" col-md-4">
										<?php the_widget('WP_Widget_Recent_Posts'); ?> 
									</div>
									
									<div class=" col-md-4">
										<div class="widget widget_categories">
											<h2 class="widgettitle"><?php _e('Interessante Kategorien', 'bootstrap-basic'); ?></h2>
											<ul>
												<?php
												wp_list_categories(array(
													'orderby' => 'count',
													'order' => 'DESC',
													'show_count' => 1,
													'title_li' => '',
													'number' => 5,
												));
												?> 
											</ul>
										</div><!-- .widget -->
									</div>
									
									<div class=" col-md-4">
										<?php
										/* translators: %1$s: smiley */
							
										the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>Monatlich sortiertes Archiv");
										?> 
									</div>
									
								</div>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->
					</main>
				</div>
</div>
<?php get_footer(); ?> 