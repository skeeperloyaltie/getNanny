<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_designer_mart_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'fashion-designer-mart' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'fashion-designer-mart' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'fashion-designer-mart' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'fashion_designer_mart_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'fashion-designer-mart' ),
	) );

	Kirki::add_section( 'fashion_designer_mart_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'fashion-designer-mart' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_all_headings_typography',
		'section'     => 'fashion_designer_mart_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'fashion_designer_mart_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'fashion-designer-mart' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_body_content_typography',
		'section'     => 'fashion_designer_mart_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'fashion_designer_mart_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'fashion-designer-mart' ),
		'description' => esc_attr__( 'Select the typography options for your content.',  'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'fashion_designer_mart_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'fashion-designer-mart' ),
	) );

	// Additional Settings

	Kirki::add_section( 'fashion_designer_mart_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'fashion-designer-mart' ),
	    'description'    => esc_html__( 'Scroll To Top', 'fashion-designer-mart' ),
	    'panel'          => 'fashion_designer_mart_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'fashion_designer_mart_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'fashion-designer-mart' ),
			'Center' => esc_html__( 'Center', 'fashion-designer-mart' ),
			'Right'  => esc_html__( 'Right', 'fashion-designer-mart' ),
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_fashion_designer_mart',
		'label'       => esc_html__( 'Menus Text Transform', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'fashion-designer-mart' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'fashion-designer-mart' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'fashion-designer-mart' ),

		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_designer_mart_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'fashion_designer_mart_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'fashion-designer-mart' ),
			'description'    => esc_html__( 'Shop Page', 'fashion-designer-mart' ),
			'panel'          => 'fashion_designer_mart_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'fashion_designer_mart_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'fashion_designer_mart_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

}

	// POST SECTION

	Kirki::add_section( 'fashion_designer_mart_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'fashion-designer-mart' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'fashion-designer-mart' ),
	    'panel'          => 'fashion_designer_mart_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_enable_post_heading',
		'section'     => 'fashion_designer_mart_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_designer_mart_post_excerpt_number_1',
		'label'       => esc_html__( 'Post Content Range', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 10,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_designer_mart_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	// HEADER SECTION

	Kirki::add_section( 'fashion_designer_mart_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'fashion-designer-mart' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'fashion-designer-mart' ),
	    'panel'          => 'fashion_designer_mart_panel_id',
	    'priority'       => 160,
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_enable_search',
		'section'     => 'fashion_designer_mart_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_search_box_enable',
		'section'     => 'fashion_designer_mart_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );	

	// SLIDER SECTION

	Kirki::add_section( 'fashion_designer_mart_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'fashion-designer-mart' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'fashion-designer-mart' ),
        'panel'          => 'fashion_designer_mart_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_enable_heading',
		'section'     => 'fashion_designer_mart_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_text_unable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_slider_heading',
		'section'     => 'fashion_designer_mart_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fashion_designer_mart_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fashion_designer_mart_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'fashion-designer-mart' ),
		'priority'    => 10,
		'choices'     => fashion_designer_mart_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_slider_short_heading_12',
		'section'     => 'fashion_designer_mart_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number of Text', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_designer_mart_post_excerpt_number',
		'label'       => esc_html__( 'Number of Slide Text To Show ', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => 22,
		'choices'     => [
			'min'  => 10,
			'max'  => 50,
			'step' => 1,
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'fashion_designer_mart_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-designer-mart' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'fashion-designer-mart' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'fashion-designer-mart' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'fashion-designer-mart' ),

		],
	] );

	// OUR PRODUCTS SECTION

	Kirki::add_section( 'fashion_designer_mart_products_section', array(
        'title'          => esc_html__( 'Our Products Settings', 'fashion-designer-mart' ),
        'description'    => esc_html__( 'You have to select product category to show cosmetic section.', 'fashion-designer-mart' ),
        'panel'          => 'fashion_designer_mart_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_products_section_enable_heading',
		'section'     => 'fashion_designer_mart_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Products Section', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_designer_mart_products_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_products_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-designer-mart' ),
			'off' => esc_html__( 'Disable', 'fashion-designer-mart' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_products_heading',
		'section'     => 'fashion_designer_mart_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Our Products Headings',  'fashion-designer-mart' ) . '</h3>',
		'priority'    => 3,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_designer_mart_products_main_heading',
		'label'    => esc_html__( 'Main Heading', 'fashion-designer-mart' ),
		'section'  => 'fashion_designer_mart_products_section',
		'priority' => 5,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_our_product_heading',
		'section'     => 'fashion_designer_mart_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hot Products', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 7,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fashion_designer_mart_products_per_page',
		'label'       => esc_html__( 'Number of products to show', 'fashion-designer-mart' ),
		'section'     => 'fashion_designer_mart_products_section',
		'default'     => 8,
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'fashion_designer_mart_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'fashion-designer-mart' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'fashion-designer-mart' ),
        'panel'          => 'fashion_designer_mart_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_designer_mart_footer_text_heading',
		'section'     => 'fashion_designer_mart_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'fashion-designer-mart' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_designer_mart_footer_text',
		'section'  => 'fashion_designer_mart_footer_section',
		'default'  => '',
		'priority' => 10,
	] );
}

add_action( 'customize_register', 'fashion_designer_mart_customizer_settings' );
function fashion_designer_mart_customizer_settings( $wp_customize ) {
	$wp_customize->add_setting('fashion_designer_mart_products_tab_number',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('fashion_designer_mart_products_tab_number',array(
		'type' => 'number',
		'label' => __('Show number of product tab','fashion-designer-mart'),
		'section' => 'fashion_designer_mart_products_section',
	));

	$fashion_designer_mart_meal_post = get_theme_mod('fashion_designer_mart_products_tab_number','');
    for ( $fashion_designer_mart_j = 1; $fashion_designer_mart_j <= $fashion_designer_mart_meal_post; $fashion_designer_mart_j++ ) {

		$wp_customize->add_setting('fashion_designer_mart_products_tabs_text'.$fashion_designer_mart_j,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('fashion_designer_mart_products_tabs_text'.$fashion_designer_mart_j,array(
			'type' => 'text',
			'label' => __('Tab Text ','fashion-designer-mart').$fashion_designer_mart_j,
			'section' => 'fashion_designer_mart_products_section',
		));

		$fashion_designer_mart_args = array(
	       'type'                     => 'product',
	        'child_of'                 => 0,
	        'parent'                   => '',
	        'orderby'                  => 'term_group',
	        'order'                    => 'ASC',
	        'hide_empty'               => false,
	        'hierarchical'             => 1,
	        'number'                   => '',
	        'taxonomy'                 => 'product_cat',
	        'pad_counts'               => false
	    );
		$categories = get_categories($fashion_designer_mart_args);
		$fashion_designer_mart_cat_posts = array();
		$fashion_designer_mart_m = 0;
		$fashion_designer_mart_cat_posts[]='Select';
		foreach($categories as $category){
			if($fashion_designer_mart_m==0){
				$default = $category->slug;
				$fashion_designer_mart_m++;
			}
			$fashion_designer_mart_cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('fashion_designer_mart_products_category'.$fashion_designer_mart_j,array(
			'default'	=> 'select',
			'sanitize_callback' => 'fashion_designer_mart_sanitize_select',
		));

		$wp_customize->add_control('fashion_designer_mart_products_category'.$fashion_designer_mart_j,array(
			'type'    => 'select',
			'choices' => $fashion_designer_mart_cat_posts,
			'label' => __('Select category to display products ','fashion-designer-mart').$fashion_designer_mart_j,
			'section' => 'fashion_designer_mart_products_section',
		));
	}
}