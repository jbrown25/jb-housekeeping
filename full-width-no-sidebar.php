<?php
/**
 * Template Name: Full Width No Sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JB_Housekeeping
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php get_masthead(); ?>
			<div class="container">
				<div class="row">
					<div class="col-one">
						<div class="page-content-full-width">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
