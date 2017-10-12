<?php
/**
 * Theme shortcodes
 *
 * @package JB_Housekeeping
 */

/** 
*  [bartag foo="foo-value"]
* function bartag_func( $atts ) {
*     $a = shortcode_atts( array(
*         'foo' => 'something',
*         'bar' => 'something else',
*     ), $atts );
* 
*     return "foo = {$a['foo']}";
* }
* add_shortcode( 'bartag', 'bartag_func' );
**/

//shortcodes

function button_function($atts){
	return '<a href="#" class="button large-button">Click Here</a>';
}

add_shortcode('jb_button', 'button_function');