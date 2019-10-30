<?php


class Transtics_About_widget extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'about';
	}

	// Widget Titke

	public function get_title() {
		return __( 'About', 'transticsee' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-address-book-o';
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
			'intro_section',
			[
				'label' => __( 'Inro Controls', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Background

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => __( 'Background', 'transticsee' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .about',
			]
		);

		// Padding

		$this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .about' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// Intro Image

		$this->add_control(
			'image',
			[
				'label' => __( 'Image', 'transticsee' ),
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
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title', 'transticsee' ),
				'default'     => __( 'Clients Review', 'transticsee' ),
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .title',
			]
		);

		// Content

		$this->add_control(
			'content',
			[
				'label'     => __( 'Description', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '6',
				'placeholder' => __( 'Enter Section Description', 'transticsee' ),
				'default'     => __( 'All our efforts and investments are geared towards offering better solutions. Solving your supply chain needs from end to end, taking the complexity out of container shipping. We are at the forefront of developing innovation.', 'transticsee' ),
			]
		);

		$this->add_control(
			'content_color',
			[
				'label'     => __( 'Description Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#9fadbb',
				'selectors' => [
					'{{WRAPPER}} .description' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Description Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .description',
			]
		);

		// Name

		$this->add_control(
			'name',
			[
				'label'     => __( 'Name', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Name', 'transticsee' ),
				'default'     => __( 'Jonathon Doelan', 'transticsee' ),
			]
		);

		$this->add_control(
			'name_color',
			[
				'label'     => __( 'Name Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .name' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'name_typography',
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .name',
			]
		);

		// Designation

		$this->add_control(
			'designation',
			[
				'label'     => __( 'Designation', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::TEXTAREA,
				'rows'		=> '6',
				'placeholder' => __( 'Enter Designation', 'transticsee' ),
				'default'     => __( 'Chairman, Transtics', 'transticsee' ),
			]
		);

		$this->add_control(
			'designation_color',
			[
				'label'     => __( 'Designation Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#9fadbb',
				'selectors' => [
					'{{WRAPPER}} .designation' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'designation_typography',
				'label'    => __( 'Designation Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .designation',
			]
		);

		// Signature

		$this->add_control(
			'signature',
			[
				'label' => __( 'Signature', 'transticsee' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

		// Counter One

		$this->start_controls_section(
			'counter_section_one',
			[
				'label' => __( 'Counter One', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Counter Number

		$this->add_control(
			'c_number_one',
			[
				'label'     => __( 'Number', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Counter Number', 'transticsee' ),
				'default'     => __( '1920', 'transticsee' ),
			]
		);

		$this->add_control(
			'c_number_one_color',
			[
				'label'     => __( 'Number Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .count_one' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'c_number_one_typography',
				'label'    => __( 'Number Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .count_one',
			]
		);

		// Counter Title

		$this->add_control(
			'c_title_one',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Counter Title', 'transticsee' ),
				'default'     => __( 'COMPANY ESTABLISHED', 'transticsee' ),
			]
		);

		$this->add_control(
			'c_title_one_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .ctitle_one' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'c_title_one_typography',
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ctitle_one',
			]
		);

		// Counter Icon

		$this->add_control(
			'c_icon_one',
			[
				'label' => __( 'Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-building-o',
			]
		);

		$this->add_control(
			'c_icon_one_color',
			[
				'label'     => __( 'Icon Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0543',
				'selectors' => [
					'{{WRAPPER}} .icon_one' => 'color: {{VALUE}}'
				]
			]
		);
		

		$this->end_controls_section();

		// Counter Two

		$this->start_controls_section(
			'counter_section_two',
			[
				'label' => __( 'Counter Two', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Counter Number

		$this->add_control(
			'c_number_two',
			[
				'label'     => __( 'Number', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Counter Number', 'transticsee' ),
				'default'     => __( '1920', 'transticsee' ),
			]
		);

		$this->add_control(
			'c_number_two_color',
			[
				'label'     => __( 'Number Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .count_two' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'c_number_one_typography',
				'label'    => __( 'Number Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .count_two',
			]
		);

		// Counter Title

		$this->add_control(
			'c_title_two',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Counter Title', 'transticsee' ),
				'default'     => __( 'COMPANY ESTABLISHED', 'transticsee' ),
			]
		);

		$this->add_control(
			'c_title_two_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .ctitle_two' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'c_title_two_typography',
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ctitle_two',
			]
		);

		// Counter Icon

		$this->add_control(
			'c_icon_two',
			[
				'label' => __( 'Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-globe',
			]
		);

		$this->add_control(
			'c_icon_two_color',
			[
				'label'     => __( 'Icon Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0543',
				'selectors' => [
					'{{WRAPPER}} .icon_two' => 'color: {{VALUE}}'
				]
			]
		);
		

		$this->end_controls_section();

		// Counter Three

		$this->start_controls_section(
			'counter_section_three',
			[
				'label' => __( 'Counter Three', 'transticsee' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Counter Number

		$this->add_control(
			'c_number_three',
			[
				'label'     => __( 'Number', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Counter Number', 'transticsee' ),
				'default'     => __( '1920', 'transticsee' ),
			]
		);

		$this->add_control(
			'c_number_three_color',
			[
				'label'     => __( 'Number Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .count_three' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'c_number_three_typography',
				'label'    => __( 'Number Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .count_three',
			]
		);

		// Counter Title

		$this->add_control(
			'c_title_three',
			[
				'label'     => __( 'Title', 'transticsee' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Counter Title', 'transticsee' ),
				'default'     => __( 'COMPANY ESTABLISHED', 'transticsee' ),
			]
		);

		$this->add_control(
			'c_title_three_color',
			[
				'label'     => __( 'Title Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#032c56',
				'selectors' => [
					'{{WRAPPER}} .ctitle_three' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'c_title_three_typography',
				'label'    => __( 'Title Typography', 'transticsee' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ctitle_three',
			]
		);

		// Counter Icon

		$this->add_control(
			'c_icon_three',
			[
				'label' => __( 'Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-building-o',
			]
		);

		$this->add_control(
			'c_icon_three_color',
			[
				'label'     => __( 'Icon Color', 'transticsee' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0543',
				'selectors' => [
					'{{WRAPPER}} .icon_three' => 'color: {{VALUE}}'
				]
			]
		);
		

		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {
		$settings   = $this->get_settings_for_display();
		?>
		<!-- About -->
		<section class="about">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
		                <div class="about-img">
		                    <img src="<?php echo $settings['image']['url'] ?>" class="img-fluid" alt="Image">
		                </div>
		            </div>
		            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
		                <div class="about-content">
		                    <h1><?php echo $settings['title'] ?></h1>
		                    <p><?php echo $settings['content'] ?></p>
		                    <div class="d-flex justify-content-between">
		                        <div class="name">
		                            <h5><?php echo $settings['name'] ?></h5>
		                            <h6><?php echo $settings['designation'] ?></h6>
		                        </div>
		                        <div class="signature">
		                            <img src="<?php echo $settings['signature']['url'] ?>" class="float-right" alt="Image">
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="row counters">
		            <div class="col-md-4 signle-counter">
		                <div class="d-flex justify-content-between">
		                    <div class="counter-image">
		                        <p class="icon_one"><i class="<?php echo $settings['c_icon_one'] ?> fa-4x"></i></p>
		                    </div>
		                    <div class="text-box">
		                        <h2 class="count"><?php echo $settings['c_number_one'] ?></h2>
		                        <h5><?php echo $settings['c_title_one'] ?></h5>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-4 signle-counter">
		                <div class="d-flex justify-content-between">
		                    <div class="counter-image">
		                        <p class="icon_two"><i class="<?php echo $settings['c_icon_two'] ?> fa-4x"></i></p>
		                    </div>
		                    <div class="text-box">
		                        <h2 class="count"><?php echo $settings['c_number_two'] ?></h2>
		                        <h5><?php echo $settings['c_title_two'] ?></h5>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-4 signle-counter">
		                <div class="d-flex justify-content-between">
		                    <div class="counter-image">
		                        <p class="icon_three"><i class="<?php echo $settings['c_icon_three'] ?> fa-4x"></i></p>
		                    </div>
		                    <div class="text-box">
		                        <h2 class="count"><?php echo $settings['c_number_three'] ?></h2>
		                        <h5><?php echo $settings['c_title_three'] ?></h5>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- About /-->
		<?php
	}

}