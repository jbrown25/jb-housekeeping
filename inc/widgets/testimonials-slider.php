<?php
/**
 * testimonials-slider.php
 * 
 * Plugin Name: JB Testimonials Slider
 * Plugin URI: http://www.justinbrowndev.com
 * Description: A widget that shows a slider of testimonials
 * Version: 1.0
 * Author: Justin Brown
 * Author URI: http://www.justinbrowndev.com
*/
class Testimonials_Slider extends SiteOrigin_Widget {
    function get_template_name($instance) {
        return 'testimonials-slider-template';
    }

    function get_template_dir($instance) {
        return 'widget-templates';
    }

    function get_style_name($instance) {
        return '';
    }

    function initialize(){
        $this->register_frontend_scripts(
            array(
                array( 'flex-slider-script', get_template_directory_uri() . '/inc/widgets/js/jquery.flexslider-min.js', array('jquery'), false, true ),
                array( 'jb-init-slider', get_template_directory_uri() . '/inc/widgets/js/init-slider.js', array( 'jquery', 'flex-slider-script' ), false, true )
            )
        );

        $this->register_frontend_styles(
            array(
                array( 'flex-slider-style', get_template_directory_uri() . '/inc/widgets/css/flexslider.css' )
            )
        );
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'testimonials-slider-widget',

            // The name of the widget for display purposes.
            __('Testimonials Slider', 'jb-housekeeping'),

            // $widget_options
            array(
                'description' => __('A slider of testimonials.', 'jb-housekeeping'),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            //$control_options
            array(
            ),

            //$form_options
            array(
                'show_dots' => array(
                    'type' => 'checkbox',
                    'label' => __('Show navigation dots', 'jb-housekeeping'),
                    'default' => true,
                ),
                'autoplay' => array(
                    'type' => 'checkbox',
                    'label' => __('Autoplay', 'jb-housekeeping'),
                    'default' => true,
                ),
                'speed' => array(
                    'type' => 'slider',
                    'label' => __('Autoplay speed in seconds', 'jb-housekeeping'),
                    'default' => 10,
                    'min' => 1,
                    'max' => 300,
                    'integer' => true,
                ),

            ),



            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('testimonials-slider-widget', __FILE__, 'Testimonials_Slider');