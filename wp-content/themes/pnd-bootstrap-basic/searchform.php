<?php
/**
 * Template for displaying search form in pnd-bootstrap-basic theme
 * 
 * @package pnd-bootstrap-basic
 */
?>
<form role="search" method="get" class="search-form form" action="<?php echo esc_url( bloginfo( 'url' ) ); ?>">
	<label for="form-search-input" class="sr-only"><?php _ex('Search for', 'label', 'pnd-bootstrap-basic'); ?></label>
	<div class="input-group">
		<input type="text" name="s" id="form-search-input" class="form-control" placeholder="<?php pll_e('Suchformular'); ?>" value="<?php echo esc_attr(get_search_query()); ?>">
		
		<div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button> 
		</div> 
	
	</div>
</form>