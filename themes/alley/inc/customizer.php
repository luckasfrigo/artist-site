<?php
/**
 * Alley Theme Customizer
 *
 * @package alley
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function alley_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'alley_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'alley_customize_partial_blogdescription',
			)
		);
	}

	// Social Media Settings
    $wp_customize->add_section( 'alley_social' ,
        array(
            'title'      => esc_html__('Social Media Settings', 'alley'),
            'description'=> esc_html__('Enter your social media(URL). Icons will not show if left blank.', 'alley'),
            'priority'   => 1,
        ) 
    );

        $wp_customize->add_setting(
            'alley_facebook',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_twitter',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_instagram',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_pinterest',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_tumblr',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_bloglovin',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_youtube',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_soundcloud',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_vimeo',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_linkedin',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_setting(
            'alley_rss',
            array(
                'default'     => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'alley_facebook',
            array(
                'label'      => esc_html__('Facebook', 'alley'),
                'section'    => 'alley_social',
                'settings'   => 'alley_facebook',
                'type'       => 'text',
                'priority'   => 1
            )
        )
    );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_twitter',
                array(
                    'label'      => esc_html__('Twitter', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_twitter',
                    'type'       => 'text',
                    'priority'   => 2
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_instagram',
                array(
                    'label'      => esc_html__('Instagram', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_instagram',
                    'type'       => 'text',
                    'priority'   => 3
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_pinterest',
                array(
                    'label'      => esc_html__('Pinterest', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_pinterest',
                    'type'       => 'text',
                    'priority'   => 4
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_bloglovin',
                array(
                    'label'      => esc_html__('Bloglovin', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_bloglovin',
                    'type'       => 'text',
                    'priority'   => 5
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_tumblr',
                array(
                    'label'      => esc_html__('Tumblr', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_tumblr',
                    'type'       => 'text',
                    'priority'   => 6
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_youtube',
                array(
                    'label'      => esc_html__('Youtube', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_youtube',
                    'type'       => 'text',
                    'priority'   => 7
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_soundcloud',
                array(
                    'label'      => esc_html__('Soundcloud', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_soundcloud',
                    'type'       => 'text',
                    'priority'   => 8
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_vimeo',
                array(
                    'label'      => esc_html__('Vimeo', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_vimeo',
                    'type'       => 'text',
                    'priority'   => 9
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_linkedin',
                array(
                    'label'      => esc_html__('Linkedin', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_linkedin',
                    'type'       => 'text',
                    'priority'   => 10
                )
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'alley_rss',
                array(
                    'label'      => esc_html__('Rss', 'alley'),
                    'section'    => 'alley_social',
                    'settings'   => 'alley_rss',
                    'type'       => 'text',
                    'priority'   => 11
                )
            )
        );
}
add_action( 'customize_register', 'alley_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function alley_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function alley_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function alley_customize_preview_js() {
	wp_enqueue_script( 'alley-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), ALLEY_S_VERSION, true );
}
add_action( 'customize_preview_init', 'alley_customize_preview_js' );
