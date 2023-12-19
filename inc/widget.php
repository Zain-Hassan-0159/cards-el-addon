
<?php

if(!defined('ABSPATH')){
    exit;
}

/**
 *  Cards Carousel
 *
 * @Carousal            Cards Carousel
 * @author            Zain Hassan
 *
 */
   


/**
 * Elementor List Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */

class Cards_El_Carousel extends \Elementor\Widget_Base {

	public function get_script_depends() {
		return [ 'slick-js-min' ];
	}

	

	public function get_style_depends() {

		return [
			'slick-css',
		];

	}
	

	/**
	 * Get widget name.
	 *
	 * Retrieve company widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'cards-carousel';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve company widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Cards Carousel', 'hz-addons' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve company widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-slides';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the company of categories the company widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return ['hz-el-widgets'];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the company of keywords the company widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'Carousal', 'Cards carousel', 'custom', 'aerox' ];
	}


	/**
	 * Register company widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_image_carousel',
			[
				'label' => esc_html__( 'Cards Carousel', 'hz-addons' ),
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);

		$repeater->add_control(
			'list_title',
			[
				'label' => esc_html__( 'Title', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'hz-addons' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'list_content',
			[
				'label' => esc_html__( 'Content', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'hz-addons' ),
				'show_label' => false,
			]
		);

		$repeater->add_control(
			'button_title',
			[
				'label' => esc_html__( 'Button Title', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'click here' , 'hz-addons' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'website_link',
			[
				'label' => esc_html__( 'Link', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Steps List', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Starter', 'hz-addons' ),
						'list_content' => esc_html__( 'Filet Mignon sandwich with fries', 'hz-addons' ),
						'image' => [
							'url' => esc_url(plugins_url('assets/images/one.jpg', __FILE__)),
						],
					],
					[
						'list_title' => esc_html__( 'Starter', 'hz-addons' ),
						'list_content' => esc_html__( 'Filet Mignon sandwich with fries', 'hz-addons' ),
						'image' => [
							'url' => esc_url(plugins_url('assets/images/two.jpg', __FILE__)),
						],
					],
					[
						'list_title' => esc_html__( 'Starter', 'hz-addons' ),
						'list_content' => esc_html__( 'Filet Mignon sandwich with fries', 'hz-addons' ),
						'image' => [
							'url' => esc_url(plugins_url('assets/images/three.jpg', __FILE__)),
						],
					],
					[
						'list_title' => esc_html__( 'Starter', 'hz-addons' ),
						'list_content' => esc_html__( 'Filet Mignon sandwich with fries', 'hz-addons' ),
						'image' => [
							'url' => esc_url(plugins_url('assets/images/four.jpg', __FILE__)),
						],
					],
					[
						'list_title' => esc_html__( 'Starter', 'hz-addons' ),
						'list_content' => esc_html__( 'Filet Mignon sandwich with fries', 'hz-addons' ),
						'image' => [
							'url' => esc_url(plugins_url('assets/images/five.jpg', __FILE__)),
						],
					],
					[
						'list_title' => esc_html__( 'Starter', 'hz-addons' ),
						'list_content' => esc_html__( 'Filet Mignon sandwich with fries', 'hz-addons' ),
						'image' => [
							'url' => esc_url(plugins_url('assets/images/six.jpg', __FILE__)),
						],
					]
				],
				'title_field' => '{{{ list_title }}}',
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_additional_options',
			[
				'label' => esc_html__( 'Slider Options', 'hz-addons' ),
			]
		);

		$this->add_control(
			'slides_to_show',
			[
				'label' => esc_html__( 'Laptop Slides', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'step' => 1,
				'default' => 4,
			]
		);

		$this->add_control(
			'slides_to_show_tab',
			[
				'label' => esc_html__( 'Tab Slides', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'step' => 1,
				'default' => 2,
			]
		);

		$this->add_control(
			'slides_to_show_mobile',
			[
				'label' => esc_html__( 'Mobile Slides', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'step' => 1,
				'default' => 1,
			]
		);

		$this->add_responsive_control(
			'slidespadding',
			[
				'label' => esc_html__( 'Slides Padding', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-slide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		$this->add_control(
			'speed',
			[
				'label' => esc_html__( 'Speed', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 800,
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'autoplay',
			[
				'label' => esc_html__( 'Autoplay', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'true',
				'options' => [
					'true' => esc_html__( 'Yes', 'hz-addons' ),
					'false' => esc_html__( 'No', 'hz-addons' ),
				],
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'pause_on_hover',
			[
				'label' => esc_html__( 'Pause on Hover', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'true',
				'options' => [
					'true' => esc_html__( 'Yes', 'hz-addons' ),
					'false' => esc_html__( 'No', 'hz-addons' ),
				],
				'condition' => [
					'autoplay' => 'true',
				],
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'pause_on_interaction',
			[
				'label' => esc_html__( 'Pause on Interaction', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'true',
				'options' => [
					'true' => esc_html__( 'Yes', 'hz-addons' ),
					'false' => esc_html__( 'No', 'hz-addons' ),
				],
				'condition' => [
					'autoplay' => 'true',
				],
				'frontend_available' => true,
			]
		);


		$this->add_control(
			'autoplay_speed',
			[
				'label' => esc_html__( 'Autoplay Speed', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 3000,
				'condition' => [
					'autoplay' => 'true',
				],
				'frontend_available' => true,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'general_style_navigation',
			[
				'label' => esc_html__( 'General Style', 'hz-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'show_arrows',
			[
				'label' => esc_html__( 'Show Arrows', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'hz-addons' ),
				'label_off' => esc_html__( 'Hide', 'hz-addons' ),
				'return_value' => 'yes',
			]
		);

		$this->add_control(
			'background_hovercolor_card',
			[
				'label' => esc_html__( 'Card Background Hover Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#041b26',
				'selectors' => [
					'{{WRAPPER}} .hz-addons .single_featured_project:hover .featured_project_content' => 'background-color: {{VALUE}};'
				]
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'section_style_navigation',
			[
				'label' => esc_html__( 'Navigation Next', 'hz-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'show_arrows' => 'yes',
				],
			]
		);

		$this->add_control(
			'heading_style_arrows',
			[
				'label' => esc_html__( 'Arrows', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'show_arrows' => 'yes',
				],
			]
		);

		$this->add_responsive_control(
			'arrow_positions',
			[
				'label' => esc_html__( 'Arrow Position From Top to Bottom', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-next' => 'top: {{SIZE}}%;',
				]
			]
		);

		$this->add_responsive_control(
			'arrow_positions_right',
			[
				'label' => esc_html__( 'Arrow Position From Right', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-next' => 'right: {{SIZE}}%;',
				]
			]
		);

		$this->add_responsive_control(
			'arrows_size',
			[
				'label' => esc_html__( 'Arrow Size', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 40,
					],
				],
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-next svg' => 'width: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_responsive_control(
			'arrowsbg_size',
			[
				'label' => esc_html__( 'Arrow Background Size', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-next' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'arrows_color',
			[
				'label' => esc_html__( 'Arrow Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'blue',
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-next svg path' => 'fill: {{VALUE}}; stroke: {{VALUE}};'
				]
			]
		);

		$this->add_control(
			'arrows_hovercolor',
			[
				'label' => esc_html__( 'Arrow Hover Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'black',
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-next:hover svg path' => 'fill: {{VALUE}}; stroke: {{VALUE}};'
				]
			]
		);

		$this->add_control(
			'background_color',
			[
				'label' => esc_html__( 'Arrow Background Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'white',
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-next' => 'background-color: {{VALUE}};'
				]
			]
		);

		$this->add_control(
			'background_hovercolor',
			[
				'label' => esc_html__( 'Background Hover Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'white',
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-next:hover' => 'background-color: {{VALUE}};'
				]
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_navigation_prev',
			[
				'label' => esc_html__( 'Navigation Previous', 'hz-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'show_arrows' => 'yes',
				],
			]
		);

		$this->add_control(
			'heading_style_arrows_prev',
			[
				'label' => esc_html__( 'Arrows', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'show_arrows' => 'yes',
				],
			]
		);

		$this->add_responsive_control(
			'arrow_positions_prev',
			[
				'label' => esc_html__( 'Arrow Position From Top to Bottom', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-prev' => 'top: {{SIZE}}%;',
				]
			]
		);

		$this->add_responsive_control(
			'arrow_positions_right_prev',
			[
				'label' => esc_html__( 'Arrow Position From Right', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-prev' => 'left: {{SIZE}}%;',
				]
			]
		);

		$this->add_responsive_control(
			'arrows_size_prev',
			[
				'label' => esc_html__( 'Arrow Size', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 40,
					],
				],
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-prev svg' => 'width: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_responsive_control(
			'arrowsbg_size_prev',
			[
				'label' => esc_html__( 'Arrow Background Size', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-prev' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'arrows_color_prev',
			[
				'label' => esc_html__( 'Arrow Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'blue',
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-prev svg path' => 'fill: {{VALUE}}; stroke: {{VALUE}};'
				]
			]
		);

		$this->add_control(
			'arrows_hovercolor_prev',
			[
				'label' => esc_html__( 'Arrow Hover Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'black',
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-prev:hover svg path' => 'fill: {{VALUE}}; stroke: {{VALUE}};'
				]
			]
		);

		$this->add_control(
			'background_color_prev',
			[
				'label' => esc_html__( 'Arrow Background Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'white',
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-prev' => 'background-color: {{VALUE}};'
				]
			]
		);

		$this->add_control(
			'background_hovercolor_prev',
			[
				'label' => esc_html__( 'Background Hover Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'white',
				'condition' => [
					'show_arrows' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .slick-arrow.slick-prev:hover' => 'background-color: {{VALUE}};'
				]
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'hz-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'text_align',
			[
				'label' => esc_html__( 'Alignment', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'hz-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'hz-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'hz-addons' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'hz-addons' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .hz-addons .featured_project_text p' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#cfa86e',
				'selectors' => [
					'{{WRAPPER}} .hz-addons .featured_project_text p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'text_typography',
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_ACCENT,
				],
				'selector' => '{{WRAPPER}} .hz-addons .featured_project_text p',
			]
		);


		$this->add_responsive_control(
			'margin',
			[
				'label' => esc_html__( 'Margin', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .featured_project_text p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_carousel',
			[
				'label' => esc_html__( 'Content', 'hz-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'text_align_content_carousel',
			[
				'label' => esc_html__( 'Alignment', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'hz-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'hz-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'hz-addons' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'hz-addons' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .hz-addons .featured_project_text h5' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'text_color_content_carousel',
			[
				'label' => esc_html__( 'Text Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .hz-addons .featured_project_text h5' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'text_typography_content_carousel',
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_ACCENT,
				],
				'selector' => '{{WRAPPER}} .hz-addons .featured_project_text h5',
			]
		);

		$this->add_responsive_control(
			'margin_content_carousel',
			[
				'label' => esc_html__( 'Margin', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .featured_project_text h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_navigation_btn',
			[
				'label' => esc_html__( 'Button', 'hz-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'color_btn',
			[
				'label' => esc_html__( 'Button Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'white',
				'selectors' => [
					'{{WRAPPER}} .hz-addons .featured_project_text a' => 'color: {{VALUE}};'
				]
			]
		);

		$this->add_control(
			'background_color_btn',
			[
				'label' => esc_html__( 'Arrow Background Color', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#cfa86e',
				'selectors' => [
					'{{WRAPPER}} .hz-addons .featured_project_text a' => 'background-color: {{VALUE}};'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'btn_typography_content_carousel',
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_ACCENT,
				],
				'selector' => '{{WRAPPER}} .hz-addons .featured_project_text a',
			]
		);

		$this->add_responsive_control(
			'btn_content_carousel',
			[
				'label' => esc_html__( 'Padding', 'hz-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .hz-addons .featured_project_text a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}


	/**
	 * Re24nder company widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$random = substr(str_shuffle($str_result), 0, 4);
		$slick_id = 'slick-' . $random;

        ?>
		<style>
			.hz-addons{
				margin: auto;
				overflow: hidden;
				position: relative;
			}

			.hz-addons .slick-slide{
				padding: 0 10px;
				overflow: hidden;
			}

			.hz-addons .top img{
				object-fit: cover;
				width: 100%;
			}

			.hz-addons.slick-slider .slick-track, .hz-addons.slick-slider .slick-list{
				-webkit-transform: translate3d(0, 0, 0);
				24	-moz-transform: translate3d(0, 0, 0);
				-ms-transform: translate3d(0, 0, 0);
				-o-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}

			.hz-addons .slick-next{
				position: absolute;
				top: 35%;
				right: 185px;
			}

			.hz-addons .slick-prev{
				position: absolute;
				top: 35%;
				left: 185px;
				z-index: 999;
			}

			.hz-addons .slick-arrow{
				background: white;
				border: none;
				outline: none;
				border-radius: 50%;
				width: 50px;
				height: 50px;
				padding: 0;
				display: flex;
				justify-content: center;
				align-items: center;
			}

			.hz-addons .slick-arrow svg{
				width: 15px;
    			height: 15px;

			}

			.hz-addons .slick-prev,
			.hz-addons .slick-next {
				transition: opacity 0.1s linear;
			}

			.hz-addons .slick-disabled {
			display: none !important;
			}

			.hz-addons .slick-slide.slick-active.first-item{
				margin-left: 0 !important;
			}

			.hz-addons .slick-slide.slick-active.last-item{
				margin-right: 0 !important;
			}

			.hz-addons .single_featured_project {
				display: block;
				position: relative;
			}
			.hz-addons .featured_img_box{
				position: relative;
			}
			.hz-addons .featured_project_content {
				width: 92%;
				position: absolute;
				display: flex;
				align-items: center;
				justify-content: center;
				height: 0;
				transition: 0.5s;
				background: transparent;
				padding: 0 20px 0;
				bottom: 3%;
				left: 4%;
			}
			.hz-addons .single_featured_project .featured_project_text {
				visibility: hidden;
				opacity: 0;
				transition: 0.5s;
				text-align: center;
			}
			.hz-addons .featured_project_text h5, .hz-addons .featured_project_text h5 a {
				font-size: 24px;
				font-weight: 500;
				color: #f3f3f3;
				font-family: 'FunctionTwoLight';
				letter-spacing: 1px;
			}
			.hz-addons .featured_project_text p {
				color: #cfa86e;
				font-family: 'Gabriola';
				font-size: 26px;
				font-weight: 500;
				letter-spacing: 0.5px;
				margin-bottom: 5px;
			}
			.hz-addons .single_featured_project:hover .featured_project_content {
				transition: 0.5s;
				background: #041b26;
				opacity: 0.8;
				height: 94%;
				max-width: 404px;
			}
			.hz-addons .single_featured_project:hover .featured_project_text {
				visibility: visible;
				opacity: 1;
				transition: 0.5s;
				margin-bottom: 0;
				padding: 20px 10px;
			}
			.hz-addons .single_featured_project.grid_project {
				margin-top: 30px;
			}

			.hz-addons .slick-slide img{
				margin: 0 auto;
			}
			.hz-addons .featured_project{
				overflow: hidden;
			}

			.hz-addons .featured_project_text a{
				padding: 5px 20px;
				cursor: pointer;
			}
		</style>
		<div style="position: relative;">
			<div id="<?php echo $slick_id; ?>" class="hz-addons hz-addons-before">
				<?php
					if( $settings['list'] ) :
						foreach (  $settings['list'] as $key => $item ) :
							if ( ! empty( $item['website_link']['url'] ) ) {
								$this->add_link_attributes( 'website_link_'. $key , $item['website_link'] );
							}
							?>
						<?php $image = $item['image']['url']; ?>
						<div class="single_featured_project ">
							<div class="featured_img_box"> 
								<img decoding="async" loading="lazy" src="<?php echo $image; ?>" alt="<?php echo $item['list_title'];  ?>" class="featured_img" >
								<div class="featured_project_content">
								<div class="featured_project_text">
									<p><?php echo $item['list_title']; ?></p>
									<h5><?php echo $item['list_content']; ?></h5>
									<a <?php echo $this->get_render_attribute_string( 'website_link_'. $key); ?>><?php echo $item['button_title']; ?></a>
								</div>
							</div>
							</div>

						</div>
						<?php
						
						endforeach;
					endif;
				?>
			</div>
		</div>
		<script>
			jQuery(document).ready(function() {
				var carousel = jQuery('#<?php echo $slick_id; ?>');
				<?php 
					$pauseOnFocus =  $settings['autoplay'] === 'true' ?  $settings['pause_on_interaction'] : true;
					$pauseOnHover =  $settings['autoplay'] === 'true' ?  $settings['pause_on_hover'] : true;
					$autoplaySpeed =  $settings['autoplay'] === 'true' ?  $settings['autoplay_speed'] : 3000;
					$showArrows =  $settings['show_arrows'] === 'yes' ?  'true' : 'false';
				?> 
				
				carousel.slick({
					slidesToShow: <?php echo $settings['slides_to_show']; ?>,
					centerMode: false,
					autoplay: <?php echo $settings['autoplay']; ?>,
					pauseOnFocus: <?php echo $pauseOnFocus; ?>,
					pauseOnHover: <?php echo $pauseOnHover; ?>,
					autoplaySpeed: <?php echo $autoplaySpeed; ?>,
					arrows: <?php echo $showArrows; ?>,
					nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></button>',
					prevArrow: '<button type="button" class="slick-prev d-none"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></button>',
					speed: <?php echo $settings['speed']; ?>,
					responsive: [
						{
						breakpoint: 770,
						settings: {
							slidesToShow: <?php echo $settings['slides_to_show_tab']; ?>
						}
						},
						{
						breakpoint: 480,
						settings: {
							slidesToShow: <?php echo $settings['slides_to_show_mobile']; ?>
						}
						}
					]
				});

			});

		</script>
		<?php

	}


}