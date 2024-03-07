<?php
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Custom_Steps_Widget extends Widget_Base {

    public function get_name() {
        return 'custom_steps_widget';
    }

    public function get_title() {
        return 'Custom Steps';
    }

    public function get_icon() {
        return 'eicon-flow';
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Conteúdo', 'custom-steps-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Título', 'custom-steps-for-elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Título Padrão', 'custom-steps-for-elementor'),
            ]
        );

        $this->add_control(
            'text',
            [
                'label' => __('Texto', 'custom-steps-for-elementor'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Texto Padrão', 'custom-steps-for-elementor'),
            ]
        );

        // Adicione mais controles conforme necessário

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="custom-steps">';
        echo '<h2>' . esc_html($settings['title']) . '</h2>';
        echo '<p>' . esc_html($settings['text']) . '</p>';
        echo '</div>';
    }
}
