<?php
/**
 * Functions to be invoked directly in page files
 *
 * @package JB_Housekeeping
 */

if(!function_exists('get_masthead')){
	function get_masthead(){
		//Large masthead on front page, short elsewhere
		$masthead_class = is_front_page() ? "masthead" : "masthead-short";
		$header_image = get_header_image();

		?>
			<header class="<?php echo $masthead_class; ?> flex-center parallax-container">
				<div class="main-heading-container text-center">
					<h1 id="masthead-heading"><?php echo get_theme_mod('main_heading'); ?></h1>
					<h2 id="masthead-subheading"><?php echo get_theme_mod('main_subheading'); ?></h2>
				</div>
				<img src="<?php echo $header_image; ?>" class="parallax-bg" data-speed=".25" data-offset="75" />
			</header>
		<?php
	}
}
