<?php
/**
 * Callbacks functions
 *
 * @package blogjr
 */

if ( ! function_exists( 'blogjr_slider_section_enable' ) ) :
	/**
	 * Check if slider_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function blogjr_slider_section_enable( $control ) {
		return $control->manager->get_setting( 'blogjr_theme_options[enable_slider]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'blogjr_hero_content_section_enable' ) ) :
	/**
	 * Check if hero_content_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function blogjr_hero_content_section_enable( $control ) {
		return $control->manager->get_setting( 'blogjr_theme_options[enable_hero_content]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'blogjr_popular_section_enable' ) ) :
	/**
	 * Check if popular_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function blogjr_popular_section_enable( $control ) {
		return $control->manager->get_setting( 'blogjr_theme_options[enable_popular]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'blogjr_cta_section_enable' ) ) :
	/**
	 * Check if cta_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function blogjr_cta_section_enable( $control ) {
		return $control->manager->get_setting( 'blogjr_theme_options[enable_cta]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'blogjr_latest_blog_section_enable' ) ) :
	/**
	 * Check if latest_blog_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function blogjr_latest_blog_section_enable( $control ) {
		return $control->manager->get_setting( 'blogjr_theme_options[enable_latest_blog]' )->value() ? true : false;
	}
endif;
