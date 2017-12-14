<?php
if(!empty($atts)) { ?>
		<div class="contacts-container">
				<div class="contacts-content">
				  <div class="contacts-content-column-1">
					<h2 class="title-section"><?php echo $atts['form_title']; ?></h2>
					<form class="contacts-form" id="form-2" method="post" action="sendemail.php">
						<?php if($atts['name']){ ?>
						  <div class="input_wrap">
							<input name="name" type="text" placeholder="<?php echo $atts['name']; ?>">
						  </div>
						<?php } ?>
						<?php if($atts['email']){ ?>
						  <div class="input_wrap">
							<input required="" name="email" type="text" placeholder="<?php echo $atts['email']; ?>">
						  </div>
						  <input name="required-field" type="hidden" value="email">
						<?php } ?>
						<?php if($atts['phone']){ ?>
						  <div class="input_wrap">
							<input required="" name="phone" type="text" placeholder="<?php echo $atts['phone']; ?>">
						  </div>
						  <input name="required-field" type="hidden" value="phone">
						<?php } ?>
					  <button id="submit-form-2" class="button__type_2" type="submit"><?php echo $atts['button']; ?></button>
					</form>
				  </div>
				  <div class="contacts-content-column-2">
					<div class="contacts-item">
					  <h3 class="contacts-item-title">Телефон:</h3>
					  <p class="contacts-item-text"><?php echo $atts['data_phone']; ?></p>
					</div>
					<div class="contacts-item">
					  <h3 class="contacts-item-title">Адрес</h3>
					  <p class="contacts-item-text"><?php echo $atts['data_adress']; ?></p>
					</div>
					<div class="contacts-item">
					  <h3 class="contacts-item-title">E-mail:</h3>
					  <p class="contacts-item-text"><?php echo $atts['data_mail']; ?></p>
					</div>
				  </div>
				</div>
		</div>
<?php } ?>