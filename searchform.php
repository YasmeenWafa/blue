<?php
/**
 * The template for displaying search form
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" aria-label="Search" placeholder="<?php
		esc_attr_e( 'Search', 'foundationpress' ); ?>">
		<div class="input-group-button">
			
			<button type="submit" id="searchsubmit" class="button">
				<i class="icon-search"></i>
			</button>
		</div>
	</div>
</form>
