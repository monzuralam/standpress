<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package StandPress
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php get_template_part( 'template-parts/content', 'banner' ); ?>
		
			<section class="page-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="entry-content text-center">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'standpress' ); ?></p>
								<?php 
									get_search_form();
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</article><!-- #post-<?php the_ID(); ?> -->

	</main><!-- #main -->

<?php
get_footer();
