<?php
namespace Elementor;

if ( ! defined( 'ELEMENTOR_ABSPATH' ) ) exit; // Exit if accessed directly

class Elements_Manager {

    /**
     * @var Element_Base[]
     */
    protected $_registered_elements = null;

    private function _init_elements() {
        include_once( ELEMENTOR_PATH . 'includes/elements/base.php' );

        include( ELEMENTOR_PATH . 'includes/elements/column.php' );
        include( ELEMENTOR_PATH . 'includes/elements/section.php' );

        $this->_registered_elements = [];

        $this->register_element( __NAMESPACE__ . '\Element_Column' );
        $this->register_element( __NAMESPACE__ . '\Element_Section' );

    }

    public function get_categories() {
        return [
            'basic' => [
                'title' => \IqitElementorWpHelper::__( 'Elements', 'elementor' ),
                'icon' => 'font',
            ],
            'prestashop' => [
                'title' => \IqitElementorWpHelper::__( 'Prestashop', 'elementor' ),
                'icon' => 'wordpress',
            ],
        ];
    }

    public function register_element( $element_class ) {
        if ( ! class_exists( $element_class ) ) {
            return \IqitElementorWpHelper::triggerWpError('element_class_name_not_exists');
        }

        $element_instance = new $element_class();

        if ( ! $element_instance instanceof Element_Base ) {
            return \IqitElementorWpHelper::triggerWpError('wrong_instance_element');
        }

        $this->_registered_elements[ $element_instance->get_id() ] = $element_instance;

        return true;
    }

    public function unregister_element( $id ) {
        if ( ! isset( $this->_registered_elements[ $id ] ) ) {
            return false;
        }
        unset( $this->_registered_elements[ $id ] );
        return true;
    }

    public function get_registered_elements() {
        if ( is_null( $this->_registered_elements ) ) {
            $this->_init_elements();
        }
        return $this->_registered_elements;
    }

    public function get_element( $id ) {
        $elements = $this->get_registered_elements();

        if ( ! isset( $elements[ $id ] ) ) {
            return false;
        }

        return $elements[ $id ];
    }

    public function get_register_elements_data() {
        $data = [];
        foreach ( $this->get_registered_elements() as $element ) {
            $data[ $element->get_id() ] = $element->get_data();
        }

        return $data;
    }

    public function render_elements_content() {
        foreach ( $this->get_registered_elements() as $element ) {
            $element->print_template();
        }
    }

}
