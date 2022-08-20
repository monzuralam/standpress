<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function standpress_theme_options() {
    $standpress_options = Container::make( 'theme_options', __( 'Theme Options', 'standpress' ) )
    ->add_fields( array(
        Field::make( 'color', 'standpress_primary_color', __( 'Theme Primary Color: ' ) )
    ) )
    
    ->add_fields( array(
        Field::make( 'image', 'standpress_default_banner', __( 'Header default banner' ) )
        ->set_value_type( 'url' )
    ) );
}
add_action( 'carbon_fields_register_fields', 'standpress_theme_options' );
