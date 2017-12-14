<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( empty( $atts['image'] ) ) {
	return;
}

$width  = ( is_numeric( $atts['width'] ) && ( $atts['width'] > 0 ) ) ? $atts['width'] : '';
$height = ( is_numeric( $atts['height'] ) && ( $atts['height'] > 0 ) ) ? $atts['height'] : '';

if ( ! empty( $width ) && ! empty( $height ) ) {
	$image = fw_resize( $atts['image']['attachment_id'], $width, $height, true );
} else {
	$image = $atts['image']['url'];
}

$alt = get_post_meta($atts['image']['attachment_id'], '_wp_attachment_image_alt', true);

$img_attributes = array(
	'src' => $image,
	'alt' => $alt ? $alt : $image
);

if(!empty($width)){
	$img_attributes['width'] = $width;
}

if(!empty($height)){
	$img_attributes['height'] = $height;
}

if ( empty( $atts['link'] ) ) {
	echo fw_html_tag('img', $img_attributes);
} else {
	echo fw_html_tag('a', array(
		'href' => $atts['link'],
		'target' => $atts['target'],
	), fw_html_tag('img',$img_attributes));
}
?>
<figcaption class="teachers-photo-social">
	<?php if($atts['facebook']){?>
		<a href="<?php echo $atts['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
	<?php } ?>
	<?php if($atts['vk']){?>
		<a href="<?php echo $atts['vk']; ?>" target="_blank"><i class="fa fa-vk"></i></a>
	<?php } ?>
	<?php if($atts['linkedin']){?>
		<a href="<?php echo $atts['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
	<?php } ?>
</figcaption>