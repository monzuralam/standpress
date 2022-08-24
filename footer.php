<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StandPress
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<?php
				if( function_exists( 'carbon_get_theme_option' ) ):
					$social_enable = carbon_get_theme_option( 'standpress_footer_social_enable' );
					$social_icons = carbon_get_theme_option( 'standpress_social_icons' );
					if( 1 == $social_enable ):
				?>
				<div class="col-lg-12">
					<ul class="social-icons">
						<?php
							foreach( $social_icons as $social_icon ){
								?>
								<li>
									<a href="<?php echo esc_url( $social_icon['url'] ); ?>"><?php echo esc_html( $social_icon['title'] ); ?></a>
								</li>
								<?php
							}
						?>
					</ul>
				</div>
				<?php 
					endif; 
				endif; 
				?>
				<div class="col-lg-12">
					<div class="copyright-text">
						<p>
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'standpress' ) ); ?>">
								<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( 'Proudly powered by %s', 'standpress' ), 'WordPress' );
								?>
							</a>
							<span class="sep"> | </span>
								<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'Theme: %1$s by %2$s.', 'standpress' ), 'standpress', '<a href="http://profile.wordpress.org/monzuralam">Monzur Alam</a>' );
								?>
						</p>
					</div>
				</div>
			</div><!-- .site-info -->
		</div> <!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
