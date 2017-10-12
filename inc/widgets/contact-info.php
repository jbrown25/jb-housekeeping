<?php
/**
 * contact-info.php
 * 
 * Plugin Name: JB Contact Info
 * Plugin URI: http://www.justinbrowndev.com
 * Description: A widget that displays contact info
 * Version: 1.0
 * Author: Justin Brown
 * Author URI: http://www.justinbrowndev.com
*/
class Contact_Info extends SiteOrigin_Widget {
    function get_template_name($instance) {
        return 'contact-info-template';
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
            'contact-info-widget',

            // The name of the widget for display purposes.
            __('Contact Info Widget', 'jb-housekeeping'),

            // $widget_options
            array(
                'description' => __('Displays some contact info', 'jb-housekeeping'),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            //$control_options
            array(
            ),

            //$form_options
            array(
                'contact_heading' => array(
                    'type' => 'text',
                    'label' => __('Heading over the contact section', 'jb-housekeeping'),
                    'default' => __('Contact Info', 'jb-housekeeping')
                ),
                'address_line_one' => array(
                    'type' => 'text',
                    'label' => __('Address', 'jb-housekeeping'),
                    'default' => __('Your address', 'jb-housekeeping')
                ),
                'address_line_two' => array(
                    'type' => 'text',
                    'label' => __('Address second line', 'jb-housekeeping'),
                    'default' => __('Second line', 'jb-housekeeping')
                ),
                'phone_number' => array(
                    'type' => 'text', //gonna have to change this to tel. eventually.
                    'label' => __('Phone number', 'jb-housekeeping'),
                    'default' => __('555-555-5555', 'jb-housekeeping')
                ),
                'email' => array(
                    'type' => 'text',
                    'label' => __('Email', 'jb-housekeeping'),
                    'default' => __('name@email.com', 'jb-housekeeping'),
                    'sanitize' => 'email'
                )
            ),

            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('contact-info-widget', __FILE__, 'Contact_Info');