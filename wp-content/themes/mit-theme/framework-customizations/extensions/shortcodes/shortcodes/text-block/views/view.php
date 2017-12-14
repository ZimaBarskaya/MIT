<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
 $custom_class = ( isset( $atts['customclass'] ) && $atts['customclass'] ) ? ' ' . $atts['customclass'] . ' ' : '';
?>
<p class="<?php echo $custom_class; ?>"><?php echo do_shortcode( $atts['text'] ); ?></p>