<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
			
			<footer id="site-footer" role="contentinfo" >
			<div class="container">
				<div id="footer-row" class=" site-footer">
					<div class="footer-left">
						<?php 
						if (!dynamic_sidebar('footer-left')) {
							printf(__('Powered by %s', 'bootstrap-basic'), 'WordPress');
							echo ' | ';
							printf(__('Theme: %s', 'bootstrap-basic'), '<a href="http://rundiz.com">Bootstrap Basic</a>');
						} 
						?> 
					</div>
					<div class="footer-right text-right">
						<?php dynamic_sidebar('footer-right'); ?> 
					</div>
				</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>