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
				<div class="col-lg-12">
					<ul class="social-icons">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Behance</a></li>
						<li><a href="#">Linkedin</a></li>
						<li><a href="#">Dribbble</a></li>
					</ul>
				</div>
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
