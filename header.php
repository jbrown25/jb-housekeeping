<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JB_Housekeeping
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body">
<div id="page" class="site">
	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jb-housekeeping' ); ?></a>-->

	<header id="masthead" class="site-header">
		<!--<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>--><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation nav">
			<?php
				if(has_nav_menu('main-meu')){
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'container_class' => 'flex-center',
							'menu_class' => 'nav-items'
						)
					);
				}else{
					wp_nav_menu(
						array(
							'container_class' => 'flex-center',
							'menu_class' => 'nav-items'
						)
					);
				}
			?>
			<button class="nav-toggle pull-right">
			<div class="nav-burger">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>
		</button>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
