<?php
/**
 * JB Housekeeping Theme Customizer
 *
 * @package JB_Housekeeping
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jb_housekeeping_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';
	$wp_customize->get_setting('background_color')->transport = 'refresh';

	//defaults mostly set in the custom-header.php
	$wp_customize->get_setting('background_color')->default = '#f7f7f7';
	

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'jb_housekeeping_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'jb_housekeeping_customize_partial_blogdescription',
		) );
	}

	/****/

	$wp_customize->add_section(
		'housekeeping_display_options',
		array(
			'title'		=> __('JB Housekeeping Display Options', 'jb-housekeeping'),
			'priority'	=> 1
		)
	);

	//main heading
	$wp_customize->add_setting(
		'main_heading',
		array(
			'default'	=> __('Alyssa\'s Housekeeping', 'jb-housekeeping'),
			'transport'	=> 'postMessage'
		)
	);

	$wp_customize->add_control(
		'main_heading',
		array(
			'section'	=> 'housekeeping_display_options',
			'type'		=> 'text',
			'label'		=> __('Main Heading', 'jb-housekeeping')
		)
	);

	//main subheading
	$wp_customize->add_setting(
		'main_subheading',
		array(
			'default'	=> __('Subheading Goes Here', 'jb-housekeeping'),
			'transport'	=> 'postMessage'
		)
	);

	$wp_customize->add_control(
		'main_subheading',
		array(
			'section'	=> 'housekeeping_display_options',
			'type'		=> 'text',
			'label'		=> __('Main Subheading', 'jb-housekeeping')
		)
	);

	/** COLORS **/
	$wp_customize->add_setting( 
		'primary_color', 
		array(
			'default'	=> '#13314D',
			'transport'	=> 'refresh'
		) 
	);

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 
		'primary_color', 
		array(
			'label'		=> __('Primary Color', 'jb-housekeeping'),
			'section'	=> 'colors'
		)
	));

	$wp_customize->add_setting( 
		'secondary_color', 
		array(
			'default'	=> '#2D587B',
			'transport'	=> 'refresh'
		) 
	);

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 
		'secondary_color', 
		array(
			'label'		=> __('Secondary Color', 'jb-housekeeping'),
			'section'	=> 'colors'
		)
	));



}
add_action( 'customize_register', 'jb_housekeeping_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function jb_housekeeping_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function jb_housekeeping_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jb_housekeeping_customize_preview_js() {
	wp_enqueue_script( 'jb-housekeeping-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'jb_housekeeping_customize_preview_js' );



if(!function_exists('jb_housekeeping_customizer_styles')){
	function jb_housekeeping_customizer_styles(){
		$primary_color = get_theme_mod('primary_color');
		$secondary_color = get_theme_mod('secondary_color');
		$header_textcolor = get_theme_mod('header_textcolor');
		$background_color = get_theme_mod('background_color');

		$header_image = get_header_image();

		echo "<style>
				body {
					background: $background_color;
				}

				.button {
				    background: $primary_color;
				}

				.nav.scrolled {
				    background: $primary_color;
				}

				@media (max-width: 640px) {
				    .nav,
				    .nav.scrolled {
				        background: $primary_color;
				    }
				    .nav .nav-items,
				    .nav.scrolled .nav-items {
				        background: $primary_color;
				    }
				}

				.testimonials .testimonial-slider .testimonial-slide h3 {
				    color: $primary_color;
				}

				.sidebar-contact header {
				    background: $primary_color;
				}

				.team-member .team-bio {
				    background: $primary_color;
				}

				a {
				    color: $secondary_color;
				}
				a:visited {
				    color: $secondary_color;
				}

				form p::before {
				    background: $secondary_color;
				}

				.input-container::before {
				    background: $secondary_color;
				}

				.button:hover {
				    background: $secondary_color;
				}

				h1,
				h2,
				h3,
				h4,
				h5,
				h6 {
					color: #$header_textcolor;
				}

				.masthead,
				.masthead-short {
					background-image: url($header_image);
				}

			</style>";
	}

	add_action('wp_head', 'jb_housekeeping_customizer_styles');
}

if(!function_exists('jb_housekeeping_customizer_scripts')){
	function jb_housekeeping_customizer_scripts(){
		$header_image = get_header_image();
		?>
			<script>
				console.log("<?php echo $header_image; ?>");
			</script>
		<?php
	}

	add_action('wp_footer', 'jb_housekeeping_customizer_scripts');
}
