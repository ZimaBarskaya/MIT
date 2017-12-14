<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : '';
 ?>
 <?php if($atts['checkbox']){ ?>
	 <div class="center-inner-block">
		<a class="<?php echo esc_attr($atts['customclass']) ?>" href="<?php echo esc_attr($atts['link']) ?>" data-link="<?php echo esc_attr($atts['data-link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="fw-btn fw-btn-1 <?php echo esc_attr($color_class); ?>">
			<?php echo $atts['label']; ?>
		</a>
	</div>
 <?php } else {?>
	<a class="<?php echo esc_attr($atts['customclass']) ?>" href="<?php echo esc_attr($atts['link']) ?>" data-link="<?php echo esc_attr($atts['data-link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="fw-btn fw-btn-1 <?php echo esc_attr($color_class); ?>">
		<?php echo $atts['label']; ?>
	</a>
 <?php } ?>