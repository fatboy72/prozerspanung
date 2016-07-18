<?php
/**
 * The theme footer
 * 
 * @package pnd-bootstrap-basic
 */
?>

	</div><!--.site-content-->
			
			
        <footer id="site-footer" role="contentinfo" >
            <div class="container">
                <div id="footer-row" class="row site-footer">
                    <div class="footer-left col-xs-12 col-md-10">
                            <?php 
                            if (!dynamic_sidebar('footer-left')) {
                                    printf(__('Powered by %s', 'pnd-bootstrap-basic'), 'WordPress');
                                    echo ' | ';
                                    printf(__('Theme: %s', 'pnd-bootstrap-basic'), '<a href="http://rundiz.com">Bootstrap Basic</a>');
                            } 
                            ?> 
                    </div>
                    <div class="footer-right text-md-right col-xs-12  col-md-2">
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