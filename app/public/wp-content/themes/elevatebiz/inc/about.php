<?php
/**
 * Theme About Page
 *
 * @package ElevateBiz
 * @since 1.0
 */

function elevatebiz_admin_plugin_notice() {
    
    $screen = get_current_screen();
    
    if ( ! empty( $screen->base ) && 'appearance_page_elevatebiz-theme' === $screen->base ) {
        return false;
    }
    ?>
    <div class="notice notice-info is-dismissible elevatebiz-admin-notice">
        <div class="elevatebiz-admin-notice-wrapper">
            <h2><?php esc_html_e( 'ElevateBiz Pro', 'elevatebiz' ); ?></h2>
            <p><?php esc_html_e( 'Get your hands on the WordPress Full Site Editing features. Start building your website with advanced block patterns and custom blocks! Get additional 55+ Pre-Designed Block Patterns, 28 FSE Templates, and 14 Template Parts  that are highly customizable and fully responsive.', 'elevatebiz' ); ?></p>
            
            <a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/elevatebiz-pro/'); ?>"><?php esc_html_e( 'Get ElevateBiz Pro', 'elevatebiz' ); ?></a>
            
            <a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=elevatebiz-theme' ) ); ?>" ><?php esc_html_e( 'Theme Info', 'elevatebiz' ); ?></a>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'elevatebiz_admin_plugin_notice' );

function elevatebiz_theme_page_admin_style( $hook ) {
	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

	$version_string = is_string( $theme_version ) ? $theme_version : false;
	wp_enqueue_style(
		'elevatebiz-theme-admin-style',
		get_theme_file_uri( 'assets/css/about-admin.css' ),
		array(),
		$version_string
	);
}
add_action( 'admin_enqueue_scripts', 'elevatebiz_theme_page_admin_style' );

/**
 * Add theme page
 */
function elevatebiz_menu() {
	add_theme_page( esc_html__( 'ElevateBiz', 'elevatebiz' ), esc_html__( 'ElevateBiz', 'elevatebiz' ), 'edit_theme_options', 'elevatebiz-theme', 'elevatebiz_theme_page_display' );
}
add_action( 'admin_menu', 'elevatebiz_menu' );

/**
 * Display About page
 */
function elevatebiz_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Full Site Editing WordPress Theme', 'elevatebiz' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with ElevateBiz!', 'elevatebiz' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! ElevateBiz has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'elevatebiz' ); ?></p>
							<a target="_blank" href="https://catchthemes.com/themes/elevatebiz/#theme-instructions"><?php esc_html_e( 'Theme documentation', 'elevatebiz' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with ElevateBiz Pro Theme', 'elevatebiz' ); ?></h3>
							<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you upgrade to ElevateBiz Pro. With the pro theme installed, get more options, blocks, block patterns, templates and template parts.', 'elevatebiz' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://catchthemes.com/themes/elevatebiz-pro/"><?php esc_html_e( 'Buy ElevateBiz Pro', 'elevatebiz' ); ?></a>
						</div>
					</div>

				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'elevatebiz' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'elevatebiz' ); ?></a>
						<a target="_blank" href="https://fse.catchthemes.com/elevatebiz"><?php esc_html_e( 'View Demo', 'elevatebiz' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#theme-instructions' ); ?>"><?php esc_html_e( 'Theme Instructions', 'elevatebiz' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'elevatebiz' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'elevatebiz' ); ?></a>
					</div>
				</div>

				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'elevatebiz' ); ?></h3>
						<p><?php esc_html_e( 'Loved ElevateBiz? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'elevatebiz' ); ?></p>
						<a href="https://wordpress.org/support/theme/elevatebiz/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'elevatebiz' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
