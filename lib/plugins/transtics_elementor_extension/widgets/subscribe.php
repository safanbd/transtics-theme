<?php


class Transtics_Subscribe_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'subscribe';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Subscribe', 'transtics_elementor_extension' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-envelope-o';
	}

	//	Widget Categories

	public function get_categories() {
		return [ 'transticscategory' ];
	}

	// Register Widget Control

	protected function _register_controls() {

		$this->register_controls();

	}

	// Widget Controls 

	function register_controls() {

		// Controls

		$this->start_controls_section(
			'backgrount_section',
			[
				'label' => __( 'Subscribe Controls', 'transtics_elementor_extension' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Background

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transtics_elementor_extension' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .subscribe',
			]
		);

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'transtics_elementor_extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .subscribe' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Image

		$this->add_control(
			'image',
			[
				'label' => __( 'Subcribe Image', 'transtics_elementor_extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		// Title

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transtics_elementor_extension' ),
				'default'     => __( 'Subscribe for Offers and News', 'transtics_elementor_extension' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transtics_elementor_extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Title Typography', 'transtics_elementor_extension' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .title',
			]
		);

		// Form

		$this->add_control(
			'subscribe_form',
			[
				'label'     => __( 'Subscribe Form Shortcode', 'transtics_elementor_extension' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Subscribe Form Shortcode', 'transtics_elementor_extension' ),
				'default'     => __( '[mc4wp_form id="130"]', 'transtics_elementor_extension' ),
			]
		);

		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();
		?>
		<!-- Subscribe -->
		<section class="subscribe">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-4">
		                <img src="<?php echo $settings['image']['url'] ?>" alt="Image">
		            </div>
		            <div class="col-md-8">
		                <div class="subscribe-here">
		                    <h1 class="title"><?php echo $settings['title'] ?></h1>
		                    <?php echo $settings['subscribe_form'] ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- Subscribe /-->
		<?php

	}
}