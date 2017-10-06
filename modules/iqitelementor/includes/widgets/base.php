<?php
namespace Elementor;

if ( ! defined( 'ELEMENTOR_ABSPATH' ) ) exit; // Exit if accessed directly

abstract class Widget_Base extends Element_Base {

    public function get_type() {
        return 'widget';
    }

    public function get_icon() {
        return 'font';
    }

    public function get_short_title() {
        return $this->get_title();
    }

    public function parse_text_editor( $content, $instance = [] ) {
         return $content;
    }

    protected function _after_register_controls() {
        parent::_after_register_controls();

        $this->add_control(
            '_section_style',
            [
                'label' => \IqitElementorWpHelper::__( 'Element Style', 'elementor' ),
                'type' => Controls_Manager::SECTION,
                'tab' => self::TAB_ADVANCED,
            ]
        );

        $this->add_responsive_control(
            '_margin',
            [
                'label' => \IqitElementorWpHelper::__( 'Margin', 'elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_style',
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            '_padding',
            [
                'label' => \IqitElementorWpHelper::__( 'Padding', 'elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_style',
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            '_animation',
            [
                'label' => \IqitElementorWpHelper::__( 'Entrance Animation', 'elementor' ),
                'type' => Controls_Manager::ANIMATION,
                'default' => '',
                'prefix_class' => 'animated ',
                'tab' => self::TAB_ADVANCED,
                'label_block' => true,
                'section' => '_section_style',
            ]
        );

        $this->add_control(
            'animation_duration',
            [
                'label' => \IqitElementorWpHelper::__( 'Animation Duration', 'elementor' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    'slow' => \IqitElementorWpHelper::__( 'Slow', 'elementor' ),
                    '' => \IqitElementorWpHelper::__( 'Normal', 'elementor' ),
                    'fast' => \IqitElementorWpHelper::__( 'Fast', 'elementor' ),
                ],
                'prefix_class' => 'animated-',
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_style',
                'condition' => [
                    '_animation!' => '',
                ],
            ]
        );

        $this->add_control(
            '_css_classes',
            [
                'label' => \IqitElementorWpHelper::__( 'CSS Classes', 'elementor' ),
                'type' => Controls_Manager::TEXT,
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_style',
                'default' => '',
                'prefix_class' => '',
                'label_block' => true,
                'title' => \IqitElementorWpHelper::__( 'Add your custom class WITHOUT the dot. e.g: my-class', 'elementor' ),
            ]
        );

        $this->add_control(
            '_section_background',
            [
                'label' => \IqitElementorWpHelper::__( 'Background & Border', 'elementor' ),
                'type' => Controls_Manager::SECTION,
                'tab' => self::TAB_ADVANCED,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => '_background',
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_background',
                'selector' => '{{WRAPPER}} .elementor-widget-container',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => '_border',
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_background',
                'selector' => '{{WRAPPER}} .elementor-widget-container',
            ]
        );

        $this->add_control(
            '_border_radius',
            [
                'label' => \IqitElementorWpHelper::__( 'Border Radius', 'elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_background',
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => '_box_shadow',
                'section' => '_section_background',
                'tab' => self::TAB_ADVANCED,
                'selector' => '{{WRAPPER}} .elementor-widget-container',
            ]
        );

        $this->add_control(
            '_section_responsive',
            [
                'label' => \IqitElementorWpHelper::__( 'Responsive', 'elementor' ),
                'type' => Controls_Manager::SECTION,
                'tab' => self::TAB_ADVANCED,
            ]
        );

        $this->add_control(
            'responsive_description',
            [
                'raw' => \IqitElementorWpHelper::__( 'Attention: The display settings (show/hide for mobile, tablet or desktop) will only take effect once you are on the preview or live page, and not while you\'re in editing mode in Elementor.', 'elementor' ),
                'type' => Controls_Manager::RAW_HTML,
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_responsive',
                'classes' => 'elementor-control-descriptor',
            ]
        );

        $this->add_control(
            'hide_desktop',
            [
                'label' => \IqitElementorWpHelper::__( 'Hide On Desktop', 'elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_responsive',
                'default' => '',
                'prefix_class' => 'elementor-',
                'label_on' => 'Hide',
                'label_off' => 'Show',
                'return_value' => 'hidden-desktop',
            ]
        );

        $this->add_control(
            'hide_tablet',
            [
                'label' => \IqitElementorWpHelper::__( 'Hide On Tablet', 'elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_responsive',
                'default' => '',
                'prefix_class' => 'elementor-',
                'label_on' => 'Hide',
                'label_off' => 'Show',
                'return_value' => 'hidden-tablet',
            ]
        );

        $this->add_control(
            'hide_mobile',
            [
                'label' => \IqitElementorWpHelper::__( 'Hide On Mobile', 'elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'tab' => self::TAB_ADVANCED,
                'section' => '_section_responsive',
                'default' => '',
                'prefix_class' => 'elementor-',
                'label_on' => 'Hide',
                'label_off' => 'Show',
                'return_value' => 'hidden-phone',
            ]
        );
    }

    final public function print_template() {
        ob_start();
        $this->content_template();
        $content_template = ob_get_clean();

        if ( empty( $content_template ) ) {
            return;
        }
        ?>
        <script type="text/html" id="tmpl-elementor-<?php echo $this->get_type(); ?>-<?php echo \IqitElementorWpHelper::esc_attr( $this->get_id() ); ?>-content">
            <?php $this->render_settings(); ?>
            <div class="elementor-widget-container">
                <?php echo $content_template; ?>
            </div>
        </script>
        <?php
    }

    public function render_content( $instance ) {
        if ( PluginElementor::instance()->editor->is_edit_mode() ) {
            $this->render_settings();
        }
        ?>
        <div class="elementor-widget-container">
            <?php
            ob_start();
            $this->render( $instance );
            $content = ob_get_clean();

            echo $content;
            ?>
        </div>
        <?php
    }

    public function render_plain_content( $instance = [] ) {
        $this->render_content( $instance );
    }

    protected function render_settings() {
        ?>
        <div class="elementor-editor-element-settings elementor-editor-<?php echo \IqitElementorWpHelper::esc_attr( $this->get_type() ); ?>-settings elementor-editor-<?php echo \IqitElementorWpHelper::esc_attr( $this->get_id() ); ?>-settings">
            <ul class="elementor-editor-element-settings-list">
                <li class="elementor-editor-element-setting elementor-editor-element-edit">
                    <a href="#" title="<?php \IqitElementorWpHelper::_e( 'Edit', 'elementor' ); ?>">
                        <span class="elementor-screen-only"><?php \IqitElementorWpHelper::_e( 'Edit', 'elementor' ); ?></span>
                        <i class="fa fa-pencil"></i>
                    </a>
                </li>
                <li class="elementor-editor-element-setting elementor-editor-element-duplicate">
                    <a href="#" title="<?php \IqitElementorWpHelper::_e( 'Duplicate', 'elementor' ); ?>">
                        <span class="elementor-screen-only"><?php \IqitElementorWpHelper::_e( 'Duplicate', 'elementor' ); ?></span>
                        <i class="fa fa-files-o"></i>
                    </a>
                </li>
                <li class="elementor-editor-element-setting elementor-editor-element-remove">
                    <a href="#" title="<?php \IqitElementorWpHelper::_e( 'Remove', 'elementor' ); ?>">
                        <span class="elementor-screen-only"><?php \IqitElementorWpHelper::_e( 'Remove', 'elementor' ); ?></span>
                        <i class="fa fa-times"></i>
                    </a>
                </li>
            </ul>
        </div>
        <?php
    }

    public function before_render( $instance, $element_id, $element_data = [] ) {
        $this->add_render_attribute( 'wrapper', 'class', [
            'elementor-widget',
            'elementor-element',
            'elementor-element-' . $element_id,
            'elementor-widget-' . $this->get_id(),
        ] );

        foreach ( $this->get_class_controls() as $control ) {
            if ( empty( $instance[ $control['name'] ] ) )
                continue;

            if ( ! $this->is_control_visible( $instance, $control ) )
                continue;

            $this->add_render_attribute( 'wrapper', 'class', $control['prefix_class'] . $instance[ $control['name'] ] );
        }

        if ( ! empty( $instance['_animation'] ) ) {
            $this->add_render_attribute( 'wrapper', 'data-animation', $instance['_animation'] );
        }

        $this->add_render_attribute( 'wrapper', 'data-element_type', $this->get_id() );
        ?>
        <div <?php echo $this->get_render_attribute_string( 'wrapper' ); ?>>
        <?php
    }

    public function after_render( $instance, $element_id, $element_data = [] ) {
        ?>
        </div>
        <?php
    }
}
