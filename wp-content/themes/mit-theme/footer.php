<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mit-theme
 */

?>

<footer class="footer" id="my-footer"><a class="footer__scroll-top" href="#top-section" data-link="on-page">наверх<i class="fa fa-angle-up"></i></a>
        <div class="mainwrap">
          <div class="grid-row">
            <div class="column small-12 medium-4 large-3">
              <div class="footer__links">
                <ul>
                  <?php get_custom_menu('Main Menu'); ?>
                </ul>
              </div>
            </div>
            <div class="column small-12 medium-4 large-3">
              <div class="footer__social-container">
              </div>
            </div>
            <div class="column small-12 large-6">
              <div class="footer__subscribe-news"><span></span>
                <div class="footer__form-wrap">
                  <form id="form-3" method="post" action="sendemail.php">
                    <div class="intermediate_item">
                      <div class="input_wrap"><i class="fa fa-check"></i>
                        <input required="" name="email" type="text" placeholder="E-MAIL">
                      </div>
                      <input name="required-field" type="hidden" value="email">
                      <input type="hidden" name="form_name" value="baseForm">
                      <input type="hidden" name="form_type" value="normal">
                      <input id="submit-form-3" class="button" type="submit" value="подписаться">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-row">
            <div class="column small-12">
              <div class="footer__copyright"></div>
            </div>
          </div>
        </div>
      </footer>

</div>

<?php wp_footer(); ?>
 <style>
    	/*.white-popup.mfp-with-anim.popup {
		    text-align: center;
		    display: inline-block;
		    position: relative;
		}

		.mfp-close {
		    position: absolute;
		    right: 35px;
		    top: 35px;
		}

		.mfp-content {
		    text-align: center;
		}


		.form .modal-title {
		    font-family: "ProximaNova-Light", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
		    font-size: 32px;
		    font-weight: 300;
		    text-transform: uppercase;
		    letter-spacing: 7px;
		    position: relative;
		    margin-bottom: 85px;
		}

		.form .modal-title:before {
		    content: "";
		    position: absolute;
		    bottom: -15px;
		    left: 0;
		    width: 80px;
		    height: 3px;
		    background-color: #ffec00;
		}

		.form .modal-title:before {
		    right: 0;
		    display: block;
		    margin: 0 auto;
		}

		@media only screen and (max-width: 520px) {
		    .form .modal-title {
		        font-size: 20px;
		    }
		}

		.form .modal-text__success {
		    color: #bbbbbb;
		    font-size: 22px;
		    margin-bottom: 45px;
		    position: relative;
		    z-index: 99;
		    background-color: #fff;
		}

		.button__type_3 {
		    display: inline-block;
		    color: #000;
		    background-color: transparent;
		    border: 1px solid #d1d1d1;
		    text-decoration: none;
		    padding: 15px 45px;
		    font-size: 14px;
		    text-transform: uppercase;
		    font-weight: 700;
		    -webkit-border-radius: 30px;
		    border-radius: 30px;
		    text-align: center;
		    position: relative;
		    outline: none;
		    -webkit-transition: color, background-color .3s;
		    -o-transition: color, background-color .3s;
		    transition: color, background-color .3s;
		    font-family: "ProximaNova-Bold", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
		}

		.button__type_3:hover {
		    color: #fff;
		    background-color: #000;
		}*/

		.white-popup.mfp-with-anim.popup {
			text-align: center;
    		display: inline-block;
		}

		.form {
			padding: 150px 225px 150px 225px;
		    display: inline-block;
		    margin: 0 auto;
		    text-align: center;
		    background-color: #fff;
		    position: relative;
		    overflow: hidden;
		}

		.form .modal-title {
			font-family: "ProximaNova-Light", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
		    font-size: 32px;
		    font-weight: 300;
		    text-transform: uppercase;
		    letter-spacing: 7px;
		    position: relative;
		    margin-bottom: 85px;
		}

		.modal-title {
			margin: 0;
	    	line-height: 1.42857143;
		}

		.form .modal-text__success {
		    color: #bbbbbb;
		    font-size: 22px;
		    margin-bottom: 45px;
		    position: relative;
		    z-index: 99;
		    background-color: #fff;
		}

		.button__type_3 {
		    display: inline-block;
		    color: #000;
		    background-color: transparent;
		    border: 1px solid #d1d1d1;
		    text-decoration: none;
		    padding: 15px 45px;
		    font-size: 14px;
		    text-transform: uppercase;
		    font-weight: 700;
		    -webkit-border-radius: 30px;
		    border-radius: 30px;
		    text-align: center;
		    position: relative;
		    outline: none;
		    -webkit-transition: color, background-color .3s;
		    -o-transition: color, background-color .3s;
		    transition: color, background-color .3s;
		    font-family: "ProximaNova-Bold", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
		}

		.form:before {
			content: "";
		    position: absolute;
		    -webkit-transform: rotate(45deg);
		    -ms-transform: rotate(45deg);
		    transform: rotate(45deg);
		    width: 246px;
		    height: 246px;
		    background-image: -webkit-repeating-radial-gradient(center center, #7f7f7f, #7f7f7f 2px, transparent 2px, transparent 100%);
		    background-image: -o-repeating-radial-gradient(center center, #7f7f7f, #7f7f7f 2px, transparent 2px, transparent 100%);
		    background-image: repeating-radial-gradient(center center, #7f7f7f, #7f7f7f 2px, transparent 2px, transparent 100%);
		    -webkit-background-size: 18px 18px;
		    background-size: 18px 18px;
		    z-index: -1;
		    top: -webkit-calc(50% - 103px);
		    top: calc(50% - 103px);
		    left: -125px;
		    z-index: 0;
		}

		.form:after {
			content: "";
		    position: absolute;
		    -webkit-transform: rotate(45deg);
		    -ms-transform: rotate(45deg);
		    transform: rotate(45deg);
		    width: 246px;
		    height: 246px;
		    background-image: -webkit-repeating-radial-gradient(center center, #7f7f7f, #7f7f7f 2px, transparent 2px, transparent 100%);
		    background-image: -o-repeating-radial-gradient(center center, #7f7f7f, #7f7f7f 2px, transparent 2px, transparent 100%);
		    background-image: repeating-radial-gradient(center center, #7f7f7f, #7f7f7f 2px, transparent 2px, transparent 100%);
		    -webkit-background-size: 18px 18px;
		    background-size: 18px 18px;
		    z-index: -1;
		    top: -webkit-calc(50% - 103px);
		    top: calc(50% - 103px);
		    right: -125px;
		    z-index: 0;
		}

		.form .modal-title:before {
			right: 0;
		    display: block;
		    margin: 0 auto;
		}

		.form .modal-title:before {
			content: "";
		    position: absolute;
		    bottom: -15px;
		    left: 0;
		    width: 80px;
		    height: 3px;
		    background-color: #ffec00;
		}

		*, :after, :before {
			box-sizing: border-box;
		}

		#popup-success {
		    width: 100%;
		    background: rgba( 0, 0, 0, 0.75 );
		    position: fixed;
		    height: 100%;
		    z-index: 9999999;
	    }

	    #popup-success > .form.form-notyfi {
	    	top: 50px;
	    }

	    .close {
			position: absolute;
			right: 32px;
			top: 32px;
			width: 32px;
			height: 32px;
			opacity: 0.3;
		}
		.close:hover {
			opacity: 1;
		}

		.close:focus, .close:hover {
			color: #000;
		    text-decoration: none;
		    cursor: pointer;
		    filter: alpha(opacity=50);
		    opacity: .5;
		}

		.close:before, .close:after {
			position: absolute;
			left: 15px;
			content: ' ';
			height: 33px;
			width: 2px;
			background-color: #333;
		}
		.close:before {
			transform: rotate(45deg);
		}
		.close:after {
			transform: rotate(-45deg);
		}

		.mfp-hide {
			display: none!important;
		}
    </style>
    <script>
		$( ".close" ).click(function() {
		  $("#popup-success").addClass("mfp-hide");
		});
	</script>
</body>
</html>
