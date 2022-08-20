<?php
/**
 * Theme Color
 *
 * @return string
 */
function standpress_dynamic_theme_color(){
    if( function_exists('carbon_get_theme_option') ){
        $primary_color = carbon_get_theme_option( 'standpress_primary_color' );
        ?>
        <style>
            :root {
                --primary : <?php if( ! empty( $primary_color ) ){ echo esc_attr( $primary_color ); } else{ echo esc_attr( '#f48840' ); }; ?>;
            }
        </style>
        <?php
    }
}
add_action( 'wp_head', 'standpress_dynamic_theme_color', 90 );