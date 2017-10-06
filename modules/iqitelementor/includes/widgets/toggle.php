<?php
namespace Elementor;

if ( ! defined( 'ELEMENTOR_ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Toggle extends Widget_Base {

	public function get_id() {
		return 'toggle';
	}

	public function get_title() {
		return \IqitElementorWpHelper::__( 'Toggle', 'elementor' );
	}

	public function get_icon() {
		return 'toggle';
	}

	protected function _register_controls() {
		$this->add_control(
			'section_title',
			[
				'label' => \IqitElementorWpHelper::__( 'Toggle', 'elementor' ),
				'type' => Controls_Manager::SECTION,
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => \IqitElementorWpHelper::__( 'Toggle Items', 'elementor' ),
				'type' => Controls_Manager::REPEATER,
				'section' => 'section_title',
				'default' => [
					[
						'tab_title' => \IqitElementorWpHelper::__( 'Toggle #1', 'elementor' ),
						'tab_content' => \IqitElementorWpHelper::__( 'I am item content. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'elementor' ),
					],
					[
						'tab_title' => \IqitElementorWpHelper::__( 'Toggle #2', 'elementor' ),
						'tab_content' => \IqitElementorWpHelper::__( 'I am item content. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'elementor' ),
					],
				],
				'fields' => [
					[
						'name' => 'tab_title',
						'label' => \IqitElementorWpHelper::__( 'Title & Content', 'elementor' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => \IqitElementorWpHelper::__( 'Toggle Title' , 'elementor' ),
					],
					[
						'name' => 'tab_content',
						'label' => \IqitElementorWpHelper::__( 'Content', 'elementor' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => \IqitElementorWpHelper::__( 'Toggle Content', 'elementor' ),
						'show_label' => false,
					],
				],
				'title_field' => 'tab_title',
			]
		);

		$this->add_control(
			'view',
			[
				'label' => \IqitElementorWpHelper::__( 'View', 'elementor' ),
				'type' => Controls_Manager::HIDDEN,
				'default' => 'traditional',
				'section' => 'section_title',
			]
		);

		$this->add_control(
			'section_title_style',
			[
				'label' => \IqitElementorWpHelper::__( 'Toggle', 'elementor' ),
				'type' => Controls_Manager::SECTION,
				'tab' => self::TAB_STYLE,
			]
		);

		$this->add_control(
			'border_width',
			[
				'label' => \IqitElementorWpHelper::__( 'Border Width', 'elementor' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 1,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10,
					],
				],
				'tab' => self::TAB_STYLE,
				'section' => 'section_title_style',
				'selectors' => [
					'{{WRAPPER}} .elementor-toggle .elementor-toggle-title' => 'border-width: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .elementor-toggle .elementor-toggle-content' => 'border-width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'border_color',
			[
				'label' => \IqitElementorWpHelper::__( 'Border Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'tab' => self::TAB_STYLE,
				'section' => 'section_title_style',
				'selectors' => [
					'{{WRAPPER}} .elementor-toggle .elementor-toggle-content' => 'border-bottom-color: {{VALUE}};',
					'{{WRAPPER}} .elementor-toggle .elementor-toggle-title' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'title_background',
			[
				'label' => \IqitElementorWpHelper::__( 'Title Background', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'tab' => self::TAB_STYLE,
				'section' => 'section_title_style',
				'selectors' => [
					'{{WRAPPER}} .elementor-toggle .elementor-toggle-title' => 'background-color: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => \IqitElementorWpHelper::__( 'Title Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'tab' => self::TAB_STYLE,
				'section' => 'section_title_style',
				'selectors' => [
					'{{WRAPPER}} .elementor-toggle .elementor-toggle-title' => 'color: {{VALUE}};',
				],
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_1,
				],
			]
		);

		$this->add_control(
			'tab_active_color',
			[
				'label' => \IqitElementorWpHelper::__( 'Active Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'tab' => self::TAB_STYLE,
				'section' => 'section_title_style',
				'selectors' => [
					'{{WRAPPER}} .elementor-toggle .elementor-toggle-title.active' => 'color: {{VALUE}};',
				],
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_4,
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => \IqitElementorWpHelper::__( 'Title Typography', 'elementor' ),
				'name' => 'title_typography',
				'tab' => self::TAB_STYLE,
				'section' => 'section_title_style',
				'selector' => '{{WRAPPER}} .elementor-toggle .elementor-toggle-title',
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
			]
		);

		$this->add_control(
			'content_background_color',
			[
				'label' => \IqitElementorWpHelper::__( 'Content Background', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'tab' => self::TAB_STYLE,
				'section' => 'section_title_style',
				'selectors' => [
					'{{WRAPPER}} .elementor-toggle .elementor-toggle-content' => 'background-color: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'content_color',
			[
				'label' => \IqitElementorWpHelper::__( 'Content Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'tab' => self::TAB_STYLE,
				'section' => 'section_title_style',
				'selectors' => [
					'{{WRAPPER}} .elementor-toggle .elementor-toggle-content' => 'color: {{VALUE}};',
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
				'name' => 'content_typography',
				'label' => 'Content Typography',
				'tab' => self::TAB_STYLE,
				'section' => 'section_title_style',
				'selector' => '{{WRAPPER}} .elementor-toggle .elementor-toggle-content',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
			]
		);
	}

	protected function render( $instance = [] ) {
		?>
		<div class="elementor-toggle">
			<?php $counter = 1; ?>
			<?php foreach ( $instance['tabs'] as $item ) : ?>
				<div class="elementor-toggle-title" data-tab="<?php echo $counter; ?>">
					<span class="elementor-toggle-icon">
						<i class="fa"></i>
					</span>
					<?php echo $item['tab_title']; ?>
				</div>
				<div class="elementor-toggle-content" data-tab="<?php echo $counter; ?>"><?php echo $this->parse_text_editor( $item['tab_content'], $item ); ?></div>
			<?php
				$counter++;
			endforeach; ?>
		</div>
		<?php
	}

	protected function content_template() {
		?>
		<div class="elementor-toggle">
			<#
			if ( settings.tabs ) {
				var counter = 1;
				_.each(settings.tabs, function( item ) { #>
					<div class="elementor-toggle-title" data-tab="{{ counter }}">
						<span class="elementor-toggle-icon">
						<i class="fa"></i>
					</span>
						{{{ item.tab_title }}}
					</div>
					<div class="elementor-toggle-content" data-tab="{{ counter }}">{{{ item.tab_content }}}</div>
				<#
					counter++;
				} );
			} #>
		</div>
		<?php
	}
}
