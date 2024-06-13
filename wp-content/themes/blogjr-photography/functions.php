<?php
/**
 * Theme functions and definitions
 *
 * @package blogjr_photography
 */ 


if ( ! function_exists( 'blogjr_photography_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function blogjr_photography_enqueue_styles() {
		wp_enqueue_style( 'blogjr-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'blogjr-photography-style', get_stylesheet_directory_uri() . '/style.css', array( 'blogjr-style-parent' ), '1.0.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'blogjr_photography_enqueue_styles', 99 );

function blogjr_photography_remove_action() {
	remove_action( 'blogjr_header_start_action', 'blogjr_header_start', 10 );
	add_action( 'customize_register', 'blogjr_photography_remove_control' );
	add_action( 'customize_register', 'blogjr_photography_add_control' );
}
add_action( 'init', 'blogjr_photography_remove_action');

function blogjr_photography_remove_control( $wp_customize ) {
    $wp_customize->remove_control('blogjr_theme_options[blog_layout]');
    $wp_customize->remove_control('blogjr_theme_options[blog_column_type]');
}

function blogjr_photography_add_control( $wp_customize ) {

	$wp_customize->add_control( 'blogjr_theme_options[blog_layout]', array(
		'label'             => esc_html__( 'Layout', 'blogjr-photography' ),
		'section'           => 'blogjr_latest_blog_section',
		'type'				=> 'radio',
		'choices'			=> array( 
			'left-align' 		=> esc_html__( 'Left Align', 'blogjr-photography' ),
			'center-align' 		=> esc_html__( 'Center Align', 'blogjr-photography' ),
			'image-focus-dark' 		=> esc_html__( 'Image Focus Dark', 'blogjr-photography' ),
		),
	) );

	$wp_customize->add_control( 'blogjr_theme_options[blog_column_type]', array(
		'label'             => esc_html__( 'Column', 'blogjr-photography' ),
		'section'           => 'blogjr_latest_blog_section',
		'type'				=> 'radio',
		'choices'			=> array( 
			'column-1' 		=> esc_html__( 'One Column', 'blogjr-photography' ),
			'column-2' 		=> esc_html__( 'Two Column', 'blogjr-photography' ),
			'column-4' 		=> esc_html__( 'Four Column', 'blogjr-photography' ),
			'column-zigzag' => esc_html__( 'One Column ZigZag', 'blogjr-photography' ),
			'column-horizontal' => esc_html__( 'One Column Horizontal', 'blogjr-photography' ),
		),
	) );

}

if ( ! function_exists( 'blogjr_photography_theme_defaults' ) ) :
    /**
     * Customize theme defaults.
     *
     * @since 1.0.0
     *
     * @param array $defaults Theme defaults.
     * @param array Custom theme defaults.
     */
    function blogjr_photography_theme_defaults( $defaults ) {
        $defaults['enable_slider'] = false;
        $defaults['blog_column_type'] = 'column-4';
        $defaults['blog_layout'] = 'image-focus-dark';
        $defaults['show_date'] = false;
        $defaults['show_author'] = false;
        $defaults['show_read_time'] = false;

        return $defaults;
    }
endif;
add_filter( 'blogjr_default_theme_options', 'blogjr_photography_theme_defaults', 99 );

if ( ! function_exists( 'blogjr_photography_header_start' ) ) :
	/**
	 * Header starts html codes
	 *
	 * @since Mik 1.0.0
	 */
	function blogjr_photography_header_start() { 
		$header_position = 'left-absolute';
		if ( is_home() && is_front_page() ) :
			$paged = get_query_var( 'paged' );
			$header_position = ! blogjr_theme_option('enable_slider') ? 'left-align' : $header_position;
			$header_position = ( 0 < $paged ) ? 'left-align' : $header_position;
		elseif ( is_singular() ) :
			$header_position = ! has_header_image() && ! has_post_thumbnail() ? 'left-align' : $header_position;
		endif;
		?>
		<header id="masthead" class="site-header <?php echo esc_attr( $header_position ); ?>">
		<div class="wrapper">
	<?php }
endif;
add_action( 'blogjr_header_start_action', 'blogjr_photography_header_start', 10 );
