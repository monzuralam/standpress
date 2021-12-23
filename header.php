<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StandPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'standpress' ); ?></a>
	<!-- ***** Preloader Start ***** -->
	<div id="preloader">
		<div class="jumper">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->

  <!-- Header -->
	<header class="">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<?php 
					if( has_custom_logo() ):
						the_custom_logo();
					else:
					?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h2><?php bloginfo( 'name' ); ?><em>.</em></h2>
						</a>
					<?php 
					endif;
				?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				<?php
					wp_nav_menu(
						array(
							'menu'      		=>  '',
							'container' 		=>  '',
							'container_class'   =>  '',
							'container_id'      =>  '',
							'menu_class'        =>  'navbar-nav ml-auto',
							'menu_id'           =>  '',
							'fallback_cb'       =>  'WP_Bootstrap_Navwalker::fallback',
							'before'            =>  '',
							'after'            	=>  '',
							'depth'            	=>   2,
							'walker'           	=>   new WP_Bootstrap_Navwalker(),
							'theme_location' 	=> 'menu-1',
						)
					);
				?>
				</div>
			</div>
		</nav>
	</header>
