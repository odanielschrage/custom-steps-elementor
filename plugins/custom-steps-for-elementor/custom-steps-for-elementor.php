<?php
/**
 * Plugin Name: Custom Steps for Elementor
 * Plugin URI:  https://github.com/odanielschrage/custom-steps-elementor
 * Description: Um widget personalizado para Elementor que cria blocos de etapas conectadas com opções avançadas de personalização.
 * Version: 1.0.0
 * Author: Daniel Schrage - @odanielschrage
 * Author URI: https://github.com/odanielschrage
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: custom-steps-for-elementor
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 * WordPress tested up to: 5.9
 */

add_action('elementor/widgets/widgets_registered', function($widgets_manager) {
    include_once(__DIR__ . '/widgets/class-custom-steps-widget.php');

    $widgets_manager->register(new \Custom_Steps_Widget());
});
