<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JB_Housekeeping
 */

?>

	</div><!-- #content -->

	<!--<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jb-housekeeping' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jb-housekeeping' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jb-housekeeping' ), 'jb-housekeeping', '<a href="http://justinbrowndev.com">Justin A. Brown</a>' );
			?>
		</div>--><!-- .site-info -->
	<!-- </footer> --><!-- #colophon -->
<!-- </div> --> <!-- #page -->
		

		<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-one-third">
						<?php if(is_active_sidebar('footer-1')) dynamic_sidebar('footer-1'); ?>
					</div>
					<div class="col-md-one-third">
						<?php if(is_active_sidebar('footer-2')) dynamic_sidebar('footer-2'); ?>
					</div>
					<div class="col-md-one-third">
						<?php if(is_active_sidebar('footer-3')) dynamic_sidebar('footer-3'); ?>
					</div>
				</div>
			</div>
		</footer>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-one text-center">
						<span>Copyright &copy; Alyssa's Housekeeping | Site by <a href="http://justinbrowndev.com" target="_blank">Justin Brown</a></span>
					</div>
				</div>
			</div>
		</div>

	</div> <!-- end page -->


<?php wp_footer(); ?>

</body>
</html>
