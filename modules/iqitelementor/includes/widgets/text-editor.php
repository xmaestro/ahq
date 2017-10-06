<?php
namespace Elementor;

if ( ! defined( 'ELEMENTOR_ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Text_editor extends Widget_Base {

	public function get_id() {
		return 'text-editor';
	}

	public function get_title() {
		return \IqitElementorWpHelper::__( 'Text Editor', 'elementor' );
	}

	public function get_icon() {
		return 'align-left';
	}

	protected function _register_controls() {
		$this->add_control(
			'section_editor',
			[
				'label' => \IqitElementorWpHelper::__( 'Text Editor', 'elementor' ),
				'type' => Controls_Manager::SECTION,
			]
		);

		$this->add_control(
			'editor',
			[
				'label' => '',
				'type' => Controls_Manager::WYSIWYG,
				'default' => '<p>' . \IqitElementorWpHelper::__( 'I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'elementor' ) . '</p>',
				'section' => 'section_editor',
			]
		);

		$this->add_control(
			'section_style',
			[
				'label' => \IqitElementorWpHelper::__( 'Text Editor', 'elementor' ),
				'type' => Controls_Manager::SECTION,
				'tab' => self::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label' => \IqitElementorWpHelper::__( 'Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'tab' => self::TAB_STYLE,
				'section' => 'section_style',
				'options' => [
					'left' => [
						'title' => \IqitElementorWpHelper::__( 'Left', 'elementor' ),
						'icon' => 'align-left',
					],
					'center' => [
						'title' => \IqitElementorWpHelper::__( 'Center', 'elementor' ),
						'icon' => 'align-center',
					],
					'right' => [
						'title' => \IqitElementorWpHelper::__( 'Right', 'elementor' ),
						'icon' => 'align-right',
					],
					'justify' => [
						'title' => \IqitElementorWpHelper::__( 'Justified', 'elementor' ),
						'icon' => 'align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-text-editor' => 'text-align: {{VALUE}};',
				],
			]
		);

	    $this->add_control(
	        'text_color',
	        [
	            'label' => \IqitElementorWpHelper::__( 'Text Color', 'elementor' ),
	            'type' => Controls_Manager::COLOR,
	            'tab' => self::TAB_STYLE,
	            'section' => 'section_style',
	            'default' => '',
	            'selectors' => [
	                '{{WRAPPER}}' => 'color: {{VALUE}};',
	            ],
	            'scheme' => [
		            'type' => Scheme_Color::get_type(),
		            'value' => Scheme_Color::COLOR_3,
	            ],
	        ]
	    );

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography',
				'section' => 'section_style',
				'tab' => self::TAB_STYLE,
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
			]
		);
	}

	protected function render( $instance = [] ) {
		$instance['editor'] = $this->parse_text_editor( $instance['editor'], $instance );
		?>
		<div class="elementor-text-editor"><?php echo $instance['editor']; ?></div>
		<?php
	}

	public function render_plain_content( $instance = [] ) {
		// In plain mode, render without shortcode
		echo $instance['editor'];
	}

	protected function content_template() {
		?>
		<div class="elementor-text-editor">{{{ settings.editor }}}</div>
		<?php
	}
}
