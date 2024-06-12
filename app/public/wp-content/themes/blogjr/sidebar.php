<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogjr
 */
$sidebar_layout = blogjr_sidebar_layout();
if ( in_array( $sidebar_layout, array( 'no-sidebar', 'no-sidebar-content' )) ) {
	return;
}

$sidebar = 'sidebar-1';
if ( is_singular() ) {
	$sidebar = get_post_meta( get_the_ID(), 'blogjr-selected-sidebar', true );
	$sidebar = ! empty( $sidebar ) ? $sidebar : 'sidebar-1';
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( $sidebar ); ?>
</aside><!-- #secondary -->
