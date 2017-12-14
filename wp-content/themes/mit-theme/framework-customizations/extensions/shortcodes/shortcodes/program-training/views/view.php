<?php
if(!empty($atts['id'])) {?>
	<div class="programm-content">
		<?php for($i = 1; $i < 4; $i++) { ?>
            <div class="programm-content-row">
              <div class="programm-content-column first">
                <div class="programm-content-number"><span class="number"><?php echo $i; ?></span><span class="day">День</span></div>
                <h3 class="title-block"><?php echo $atts['tab_title_'.$i]; ?></h3>
              </div>
              <div class="programm-content-column">
                <ol class="programm-content-list ol-decorated">
					<?php for($a = 1; $a < 7; $a++) {?>
						<li><?php echo $atts['item_'.$i.'_'.$a]; ?></li>
					<?php } ?>
                </ol>
              </div>
            </div>
		<?php } ?>
    </div>
<?php } ?>