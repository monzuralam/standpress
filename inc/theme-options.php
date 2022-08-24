<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function standpress_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'standpress' ) )
    ->add_fields( array(
        Field::make( 'color', 'standpress_primary_color', __( 'Theme Primary Color: ' ) ),
        Field::make( 'image', 'standpress_default_banner', __( 'Header default banner' ) )
            ->set_value_type( 'url' ),
        Field::make( 'checkbox', 'standpress_footer_social_enable', __( 'Footer Social section enable ?', 'standpress') ),
        Field::make( 'complex', 'standpress_social_icons', __( 'Social links', 'standpress') )
            ->add_fields( array(
                Field::make( 'text', 'title', __( 'Title', 'standpress' ) )
                    ->set_attribute( 'placeholder', 'Facebook' ),
                Field::make( 'text', 'url', __( 'URL', 'standpress' ) )
                    ->set_attribute( 'placeholder', 'https://facebook.com/standpress' ),
            ) )
            ->set_conditional_logic(
                array(
                    array(
                        'field' =>  'standpress_footer_social_enable',
                        'value' =>  true
                    )
                )
            ),
    ) );
}
add_action( 'carbon_fields_register_fields', 'standpress_theme_options' );