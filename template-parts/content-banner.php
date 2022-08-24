<?php
/**
 * Banner section
 */


?>
<!-- Banner Starts Here -->
<div class="header-text">
    <section class="page-heading" <?php if( function_exists( 'carbon_get_theme_option' ) ){ ?>
    style="background-image: url('<?php echo esc_url( carbon_get_theme_option('standpress_default_banner') );?>');"<?php } ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content text-center">
                        <?php if( is_404() ): ?>
                            <h1 class=""><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'standpress' ); ?></h1>
                        <?php else: ?>
                            <h1><?php the_title(); ?></h1>
                            <span class="text-white"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?> </a> <?php _e( ' / ', 'standpress' ); esc_html( the_title() ); ?> </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Banner Ends Here -->