<?php
if(!empty($atts)) { ?>
		<ul class="footer__social">
			<?php if($atts['vk']) { ?>
				<li><a href="<?php echo $atts['vk']; ?>" target="_blank"><i class="fa fa-vk"></i></a></li>
			<?php } ?>
			<?php if($atts['facebook']) { ?>
				<li><a href="<?php echo $atts['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php } ?>
			<?php if($atts['instagram']) { ?>
				<li><a href="<?php echo $atts['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
			<?php } ?>
			<?php if($atts['linkedin']) { ?>
				<li><a href="<?php echo $atts['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<?php } ?>
			<?php if($atts['youtube']) { ?>
				<li><a href="<?php echo $atts['youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
			<?php } ?>
		</ul>
<?php } ?>