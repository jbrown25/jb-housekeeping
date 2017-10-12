<?php
/**
 * cta-button.php
 * 
 * Plugin Name: JB CTA Button
 * Plugin URI: http://www.justinbrowndev.com
 * Description: A widget that displays a cta button
 * Version: 1.0
 * Author: Justin Brown
 * Author URI: http://www.justinbrowndev.com
*/
class CTA_Button extends SiteOrigin_Widget {
    function get_template_name($instance) {
        return 'cta-button-template';
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
            'cta-button-widget',

            // The name of the widget for display purposes.
            __('CTA Button Widget', 'jb-housekeeping'),

            // $widget_options
            array(
                'description' => __('A call-to-action button.', 'jb-housekeeping'),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            //$control_options
            array(
            ),

            //$form_options
            array(
                'button_text' => array(
                    'type' => 'text',
                    'label' => __('Button text', 'jb-housekeeping'),
                    'description' => __('This is the text that goes in the button', 'jb-housekeeping'),
                    'default' => 'Click Here'
                ),
                
                'button_link' => array(
                    'type' => 'text',
                    'label' => __('Button URL', 'jb-housekeeping'),
                    'description' => __('Link where the button goes to'),
                    'default' => 'http://'
                ),

                'button_align' => array(
                    'type' => 'radio',
                    'label' => __('The button alignment', 'jb-housekeeping'),
                    'default' => 'align-center',
                    'options' => array(
                        'align-center' => __('Align center', 'jb-housekeeping'),
                        'align-right' => __('Align right', 'jb-housekeeping'),
                        'align-left' => __('Align left', 'jb-housekeeping')
                    )
                )
            ),

            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('cta-button-widget', __FILE__, 'CTA_Button');