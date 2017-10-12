<?php
/**
 * responsive-image.php
 * 
 * Plugin Name: JB Responsive Image
 * Plugin URI: http://www.justinbrowndev.com
 * Description: A widget that displays a responsive image
 * Version: 1.0
 * Author: Justin Brown
 * Author URI: http://www.justinbrowndev.com
*/
class Responsive_Image extends SiteOrigin_Widget {
    function get_template_name($instance) {
        return 'responsive-image-template';
    }

    function get_template_dir($instance) {
        return 'widget-templates';
    }

    function get_style_name($instance) {
        return '';
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'responsive-image-widget',

            // The name of the widget for display purposes.
            __('Responsive Image Widget', 'jb-housekeeping'),

            // $widget_options
            array(
                'description' => __('A responsive, full width image.', 'jb-housekeeping'),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            //$control_options
            array(
            ),

            //$form_options
            array(
                'responsive_image' => array(
                    'type' => 'media',
                    'label' => __( 'Choose an image', 'jb-housekeeping' ),
                    'choose' => __( 'Choose image', 'jb-housekeeping' ),
                    'update' => __( 'Set image', 'jb-housekeeping' ),
                    'library' => 'image',
                    'fallback' => true
                )
            ),



            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('responsive-image-widget', __FILE__, 'Responsive_Image');