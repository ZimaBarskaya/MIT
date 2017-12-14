<?php
if(!empty($atts)) { ?>
	<div class="titlemain-details">
		<?php for($i = 1; $i < 4; $i++) {?>
			<div class="titlemain-details-item"><img src="<?php echo $atts['img_'.$i]['url']?>"><span><?php echo $atts['detail_text_'.$i]?></span></div>
		<?php }?> 
	</div>	
<?php } ?>
