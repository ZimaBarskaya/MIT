<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

wp_enqueue_style( 'fw-ext-builder-frontend-grid' );

$shortcodes_extension = fw_ext( 'shortcodes' );

if ( version_compare( $shortcodes_extension->manifest->get_version(), '1.3.9', '>=' ) ) {
	/**
	 * Updated to new version of formstone.js background
	 * which have new structure and new dependencies
	 * such as core.js , transition.js and background.js
	 * since v1.3.9
	 * jquery.fs.wallpaper.js, jquery.fs.wallpaper.min.js and scripts.js are @deprecated
	 * they remains for backward compatibility.
	 */

	// fixes https://github.com/ThemeFuse/Unyson/issues/1552
	{
		global $is_safari;

		if ($is_safari) {
			wp_enqueue_script('youtube-iframe-api', 'https://www.youtube.com/iframe_api');
		}
	}

	wp_enqueue_style(
		'fw-shortcode-custom-background-video',
		$shortcodes_extension->get_uri( '/shortcodes/custom/static/css/background.css' )
	);

	wp_enqueue_script(
		'fw-shortcode-custom-formstone-core',
		$shortcodes_extension->get_uri( '/shortcodes/custom/static/js/core.js' ),
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script(
		'fw-shortcode-custom-formstone-transition',
		$shortcodes_extension->get_uri( '/shortcodes/custom/static/js/transition.js' ),
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script(
		'fw-shortcode-custom-formstone-background',
		$shortcodes_extension->get_uri( '/shortcodes/custom/static/js/background.js' ),
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script(
		'fw-shortcode-custom',
		$shortcodes_extension->get_uri( '/shortcodes/custom/static/js/background.init.js' ),
		array(
			'fw-shortcode-custom-formstone-core',
			'fw-shortcode-custom-formstone-transition',
			'fw-shortcode-custom-formstone-background'
		),
		false,
		true
	);
} else {
	wp_enqueue_style(
		'fw-shortcode-custom-background-video',
		$shortcodes_extension->get_uri( '/shortcodes/custom/static/css/jquery.fs.wallpaper.css' )
	);

	wp_enqueue_script(
		'fw-shortcode-custom-background-video',
		$shortcodes_extension->get_uri( '/shortcodes/custom/static/js/jquery.fs.wallpaper.min.js' ),
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script(
		'fw-shortcode-custom',
		$shortcodes_extension->get_uri( '/shortcodes/custom/static/js/scripts.js' ),
		array( 'fw-shortcode-custom-background-video' ),
		false,
		true
	);
}

wp_enqueue_style(
	'fw-shortcode-custom',
	$shortcodes_extension->get_uri( '/shortcodes/custom/static/css/styles.css' )
);

