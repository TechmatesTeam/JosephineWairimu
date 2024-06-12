<?php

/**
 * Title: Sidebar
 * Slug: elevatebiz/sidebar
 * Categories: elevatebiz, page
 */
?>

<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonUseIcon":true} /--></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-text-align-left has-medium-font-size" id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Latest post', 'elevatebiz'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","addLinkToFeaturedImage":true} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-text-align-left has-medium-font-size" id="follow-us" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Gallery', 'elevatebiz'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:gallery {"linkTarget":"_blank","linkTo":"media"} -->
		<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":21470,"sizeSlug":"large","linkDestination":"media"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-1.jpg')); ?>" target="_blank"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-1.jpg')); ?>" alt="" class="wp-image-21470" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":21469,"sizeSlug":"large","linkDestination":"media"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-2.jpg')); ?>" target="_blank"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-2.jpg')); ?>" alt="" class="wp-image-21469" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":21468,"sizeSlug":"large","linkDestination":"media"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-3.jpg')); ?>" target="_blank"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-3.jpg')); ?>" alt="" class="wp-image-21468" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":21429,"sizeSlug":"large","linkDestination":"media"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-4.jpg')); ?>" target="_blank"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-4.jpg')); ?>" alt="" class="wp-image-21429" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":21421,"sizeSlug":"large","linkDestination":"media"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-5.jpg')); ?>" target="_blank"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-5.jpg')); ?>" alt="" class="wp-image-21421" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":21113,"sizeSlug":"large","linkDestination":"media"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-6.jpg')); ?>" target="_blank"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-6.jpg')); ?>" alt="" class="wp-image-21113" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":21611,"sizeSlug":"large","linkDestination":"media"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-7.jpg')); ?>" target="_blank"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-7.jpg')); ?>" alt="" class="wp-image-21611" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":21610,"sizeSlug":"large","linkDestination":"media"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-8.jpg')); ?>" target="_blank"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-8.jpg')); ?>" alt="" class="wp-image-21610" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"id":21609,"sizeSlug":"large","linkDestination":"media"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-9.jpg')); ?>" target="_blank"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/gallery-sidebar-9.jpg')); ?>" alt="" class="wp-image-21609" /></a></figure>
			<!-- /wp:image -->
		</figure>
		<!-- /wp:gallery -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-text-align-left has-medium-font-size" id="archives" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Tag cloud', 'elevatebiz'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:tag-cloud /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-text-align-left has-medium-font-size" id="follow-us" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Social-Media', 'elevatebiz'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#ffffff","style":{"spacing":{"blockGap":{"top":"7px","left":"7px"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left"}} -->
		<ul class="wp-block-social-links has-icon-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

			<!-- wp:social-link {"url":"#","service":"WordPress"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"28px","left":"0px"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-text-align-left has-medium-font-size" id="category" style="margin-top:0px;margin-right:0px;margin-bottom:28px;margin-left:0px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Categories', 'elevatebiz'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:categories /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
