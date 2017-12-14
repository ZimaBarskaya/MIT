<?php

if($atts['href']) { ?>
	<a href="<?php echo $atts['href']; ?>" class="<?php echo $atts['customclass']; ?>"><?php echo $atts['sample_text']; ?></a>
<?php } else { ?>
	<p class="<?php echo $atts['customclass']; ?>"><?php echo $atts['sample_text']; ?></p>
<?php } ?>