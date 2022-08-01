<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StandPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Banner Starts Here -->
	<div class="header-text">
		<section class="page-heading">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-content text-center">
							<h1><?php the_title(); ?></h1>
							<span class="text-white"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?> </a> <?php _e( ' / ', 'standpress' ); esc_html( the_title() ); ?> </span>
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
					<?php standpress_post_thumbnail(); ?>
				</div>
				<div class="col-lg-12">
					<div class="entry-content">
						<?php 
							the_content();

							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__('Pages:', 'standpress'),
									'after'  => '</div>',
								)
							);
						?>
					</div>
				</div>
				<div class="col-md-12">
					<?php 
						if (get_edit_post_link()) : 
							edit_post_link(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__('Edit <span class="screen-reader-text">%s</span>', 'standpress'),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post(get_the_title())
								),
								'<span class="edit-link">',
								'</span>'
							);
						endif; 
					?>
				</div>
			</div>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->