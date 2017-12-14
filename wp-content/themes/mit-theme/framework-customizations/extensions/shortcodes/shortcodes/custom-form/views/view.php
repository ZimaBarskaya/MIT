<?php

if(!empty($atts)) { ?>
	<div class="registration-form">
                <div>
                  <h3 class="title-block"><?php echo $atts['form_title']; ?></h3>
                  <form id="form" method="post" action="sendemail.php">
					<?php if(!empty($atts['name'])) { ?>
						<div class="input_wrap">
						  <input name="name" type="text" placeholder="<?php echo $atts['name']; ?>">
						</div>
					<?php }?>
					<?php if(!empty($atts['phone'])) { ?>
						<div class="input_wrap">
						  <input required="" name="phone" type="text" placeholder="<?php echo $atts['phone']; ?>">
						</div>
						<input name="required-field" type="hidden" value="phone">
					<?php }?>
					<?php if(!empty($atts['email'])) { ?>
						<div class="input_wrap">
						  <input name="email" type="text" placeholder="<?php echo $atts['email']; ?>">
						</div>
					<?php }?>
                    <button id="submit-form" class="button__type_2" type="submit"><?php echo $atts['button']; ?></button>
                  </form>
                </div>
              </div>
<?php } ?>