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
			<!-- Banner Starts Here -->
			<div class="header-text">
				<section class="page-heading">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-content text-center">
									<h1 class=""><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'standpress' ); ?></h1>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- Banner Ends Here -->

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
