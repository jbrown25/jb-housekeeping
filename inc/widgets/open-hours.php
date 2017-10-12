<?php
/**
 * open-hours.php
 * 
 * Plugin Name: JB Open Hours widget
 * Plugin URI: http://www.justinbrowndev.com
 * Description: A widget that shows hours
 * Version: 1.0
 * Author: Justin Brown
 * Author URI: http://www.justinbrowndev.com
*/
class Open_Hours extends SiteOrigin_Widget {
    function get_template_name($instance) {
        return 'open-hours-template';
    }

    function get_template_dir($instance) {
        return 'widget-templates';
    }

    function get_style_name($instance) {
        return '';
    }

    function jb_get_hours(){
        return array(
            'closed' => __('CLOSED', 'jb-housekeeping'),
            'twelve_am' => __('12:00AM', 'jb-housekeeping'),
            'twelve_thirty_am' => __('12:30AM', 'jb-housekeeping'),
            'one_am' => __('1:00AM', 'jb-housekeeping'),
            'one_thirty_am' => __('1:30AM', 'jb-housekeeping'),
            'two_am' => __('2:00AM', 'jb-housekeeping'),
            'two_thirty_am' => __('2:30AM', 'jb-housekeeping'),
            'three_am' => __('3:00AM', 'jb-housekeeping'),
            'three_thirty_am' => __('3:30AM', 'jb-housekeeping'),
            'four_am' => __('4:00AM', 'jb-housekeeping'),
            'four_thirty_am' => __('4:30AM', 'jb-housekeeping'),
            'five_am' => __('5:00AM', 'jb-housekeeping'),
            'five_thirty_am' => __('5:30AM', 'jb-housekeeping'),
            'six_am' => __('6:00AM', 'jb-housekeeping'),
            'six_thirty_am' => __('6:30AM', 'jb-housekeeping'),
            'seven_am' => __('7:00AM', 'jb-housekeeping'),
            'seven_thirty_am' => __('7:30AM', 'jb-housekeeping'),
            'eight_am' => __('8:00AM', 'jb-housekeeping'),
            'eight_thirty_am' => __('8:30AM', 'jb-housekeeping'),
            'nine_am' => __('9:00AM', 'jb-housekeeping'),
            'nine_thirty_am' => __('9:30AM', 'jb-housekeeping'),
            'ten_am' => __('10:00AM', 'jb-housekeeping'),
            'ten_thirty_am' => __('10:30AM', 'jb-housekeeping'),
            'eleven_am' => __('11:00AM', 'jb-housekeeping'),
            'eleven_thirty_am' => __('11:30AM', 'jb-housekeeping'),
            'twelve_pm' => __('12:00PM', 'jb-housekeeping'),
            'twelve_thirty_pm' => __('12:30PM', 'jb-housekeeping'),
            'one_pm' => __('1:00PM', 'jb-housekeeping'),
            'one_thirty_pm' => __('1:30PM', 'jb-housekeeping'),
            'two_pm' => __('2:00PM', 'jb-housekeeping'),
            'two_thirty_pm' => __('2:30PM', 'jb-housekeeping'),
            'three_pm' => __('3:00PM', 'jb-housekeeping'),
            'three_thirty_pm' => __('3:30PM', 'jb-housekeeping'),
            'four_pm' => __('4:00PM', 'jb-housekeeping'),
            'four_thirty_pm' => __('4:30PM', 'jb-housekeeping'),
            'five_pm' => __('5:00PM', 'jb-housekeeping'),
            'five_thirty_pm' => __('5:30PM', 'jb-housekeeping'),
            'six_pm' => __('6:00PM', 'jb-housekeeping'),
            'six_thirty_pm' => __('6:30PM', 'jb-housekeeping'),
            'seven_pm' => __('7:00PM', 'jb-housekeeping'),
            'seven_thirty_pm' => __('7:30PM', 'jb-housekeeping'),
            'eight_pm' => __('8:00PM', 'jb-housekeeping'),
            'eight_thirty_pm' => __('8:30PM', 'jb-housekeeping'),
            'nine_pm' => __('9:00PM', 'jb-housekeeping'),
            'nine_thirty_pm' => __('9:30PM', 'jb-housekeeping'),
            'ten_pm' => __('10:00PM', 'jb-housekeeping'),
            'ten_thirty_pm' => __('10:30PM', 'jb-housekeeping'),
            'eleven_pm' => __('11:00PM', 'jb-housekeeping'),
            'eleven_thirty_pm' => __('11:30PM', 'jb-housekeeping')
        );
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'open-hours-widget',

            // The name of the widget for display purposes.
            __('Open Hours', 'jb-housekeeping'),

            // $widget_options
            array(
                'description' => __('Shows what hours you are open', 'jb-housekeeping'),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            //$control_options
            array(
            ),

            //$form_options
            array(
                'hours_heading' => array(
                    'type' => 'text',
                    'label' => __('Heading that goes over hours', 'jb-housekeeping'),
                    'default' => 'Hours',
                ),
                'monday_open' => array(
                    'type' => 'select',
                    'label' => __( 'Monday opening', 'jb-housekeeping' ),
                    'default' => 'eight_am',
                    'options' => $this->jb_get_hours(),
                ),
                'monday_close' => array(
                    'type' => 'select',
                    'label' => __('Monday closing', 'jb-housekeeping'),
                    'default' => 'five_pm',
                    'options' => $this->jb_get_hours(),
                ),
                'tuesday_open' => array(
                    'type' => 'select',
                    'label' => __( 'Tuesday opening', 'jb-housekeeping' ),
                    'default' => 'eight_am',
                    'options' => $this->jb_get_hours(),
                ),
                'tuesday_close' => array(
                    'type' => 'select',
                    'label' => __('Tuesday closing', 'jb-housekeeping'),
                    'default' => 'five_pm',
                    'options' => $this->jb_get_hours(),
                ),
                'wednesday_open' => array(
                    'type' => 'select',
                    'label' => __( 'Wednesday opening', 'jb-housekeeping' ),
                    'default' => 'eight_am',
                    'options' => $this->jb_get_hours(),
                ),
                'wednesday_close' => array(
                    'type' => 'select',
                    'label' => __('Wednesday closing', 'jb-housekeeping'),
                    'default' => 'five_pm',
                    'options' => $this->jb_get_hours(),
                ),
                'thursday_open' => array(
                    'type' => 'select',
                    'label' => __( 'Thursday opening', 'jb-housekeeping' ),
                    'default' => 'eight_am',
                    'options' => $this->jb_get_hours(),
                ),
                'thursday_close' => array(
                    'type' => 'select',
                    'label' => __('Thursday closing', 'jb-housekeeping'),
                    'default' => 'five_pm',
                    'options' => $this->jb_get_hours(),
                ),
                'friday_open' => array(
                    'type' => 'select',
                    'label' => __( 'Friday opening', 'jb-housekeeping' ),
                    'default' => 'eight_am',
                    'options' => $this->jb_get_hours(),
                ),
                'friday_close' => array(
                    'type' => 'select',
                    'label' => __('Friday closing', 'jb-housekeeping'),
                    'default' => 'five_pm',
                    'options' => $this->jb_get_hours(),
                ),
                'saturday_open' => array(
                    'type' => 'select',
                    'label' => __( 'Saturday opening', 'jb-housekeeping' ),
                    'default' => 'closed',
                    'options' => $this->jb_get_hours(),
                ),
                'saturday_close' => array(
                    'type' => 'select',
                    'label' => __('Saturday closing', 'jb-housekeeping'),
                    'default' => 'closed',
                    'options' => $this->jb_get_hours(),
                ),
                'sunday_open' => array(
                    'type' => 'select',
                    'label' => __( 'Sunday opening', 'jb-housekeeping' ),
                    'default' => 'closed',
                    'options' => $this->jb_get_hours(),
                ),
                'Sunday_close' => array(
                    'type' => 'select',
                    'label' => __('Sunday closing', 'jb-housekeeping'),
                    'default' => 'closed',
                    'options' => $this->jb_get_hours(),
                ),
            ),

            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('open-hours-widget', __FILE__, 'Open_Hours');