<?php
/**
 * @package Custom-Post-Month-Dropdown
 * @version 0.1
 */

/*
Plugin Name: Custom Post Month Dropdown
Plugin URI: https://github.com/franscaharris/custom-post-month-dropdown
Description: Change Select Month Dropdown in Page Post List to input calendar
Author: Harris Fransca
Version: 0.1
Author URI: https://github.com/franscaharris/
*/

function filter_disable_months_dropdown( $false, $post_type ) { ?>

    <label for="filter-by-date" class="screen-reader-text"> <?php _e( 'Filter by date' ); ?> </label>
	<input name="m" id="filter-by-date" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		$( function() {
			$( "#filter-by-date" ).datepicker( {
				changeMonth: true,
				changeYear: true,
				dateFormat: "yymmdd"
			});
		});
	</script>

    <?php
    return !$false; 
}; 
add_filter( 'disable_months_dropdown', 'filter_disable_months_dropdown', 10, 2 ); 