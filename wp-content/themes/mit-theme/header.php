<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mit-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="mfp-hide white-popup mfp-with-anim popup" id="popup-success">
        <div class="form form-notyfi">
            <p class="modal-title">Спасибо, заявка отправлена</p>
            <p class="modal-text__success"> Мы оповестим вас, о будущем начале курса</p>
            <button class="form__othercourse button__type_3"><a href="http://managers-it.com/masterklasspm/index.html">Вернуться на главную</a></button>
            <span class="close"></span>
        </div>
    </div>
	<div class="globalwrap" id="top-section">
		<div class="l-header">
			<header class="header" id="my-header">
				<div class="mainwrap-wide">
					<div class="header__wrap">
					  <div class="header__main">
						<div class="header__logo"><a class="logo pageload-link" href="index.html" title="MIT">MIT</a></div>
						<nav class="header__nav show-for-large" id="navbar">
						  <ul class="nav" id="navigation" role="tablist">
							<?php get_custom_menu('Main Menu'); ?>
						  </ul>
						</nav><!-- #site-navigation -->
					  </div>
					  <div class="hamburger-btn hide-for-large" data-innermenu="button"><?xml version="1.0" encoding="utf-8"?>
							<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
								<g class="hamburger">
									<rect class="hamburger-top" width="24" height="2"/>
									<rect class="hamburger-center" y="11" width="24" height="2"/>
									<rect class="hamburger-bottom" y="22" width="24" height="2"/>
								</g>
							</svg>
						</div>
					</div>
				</div>
				<div class="header__mob-menu">
					<ul role="tablist">
					  <?php get_custom_menu('Main Menu'); ?>
					</ul>
				</div>
			</header>
		</div>
	

	<div id="content" class="site-content">
