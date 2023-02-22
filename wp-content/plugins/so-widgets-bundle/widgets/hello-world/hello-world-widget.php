<?php

/*
Widget Name: Hello world widget
Description: An example widget which displays 'Hello world!'.
Author: Me
Author URI: http://example.com
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/class Hello_World_Widget extends SiteOrigin_Widget {

    function __construct() {
        // Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        // Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'sow-hello-world',

            // The name of the widget for display purposes.
            __( 'Hello-World', 'so-widgets-bundle' ),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __( 'A hello world widget.', 'hello-world-widget-text-domain' ),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            // The $control_options array, which is passed through to WP_Widget
            array(
            ),

            // The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'text' => array(
                    'type' => 'text',
                    'label' => __( 'Hello world! goes here.', 'hello-world-widget-text-domain' ),
                    'default' => 'Hello world!',
                ),
            ),

            // The $base_folder path string.
            plugin_dir_path( __FILE__ )
        );
        add_filter( 'siteorigin_widgets_sanitize_instance_sow-hello-world', array( $this, 'add_noreferrer_to_link_targets' ) );

    }
   
    function get_style_name( $instance ) {
        // We're not using a style.
        return false;
    }
}
siteorigin_widget_register( 'sow-hello-world', __FILE__, 'SiteOrigin_Widget_Editor_Widget' );
