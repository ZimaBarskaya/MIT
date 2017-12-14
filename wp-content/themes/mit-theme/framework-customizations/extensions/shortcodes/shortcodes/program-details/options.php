<?php

$options = array(
    'detail_text_1' => array(
		'type'  => 'text',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Dates', '{domain}'),
	),
	'img_1' => array(
		'type'  => 'upload',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Dates img', '{domain}'),
		'images_only' => false,
		'files_ext' => array( 'png', 'jpg', 'svg' ),
	),
	'detail_text_2' => array(
		'label' => __('Time', 'fw'),
		'type'  => 'text',
	),
	'img_2' => array(
		'type'  => 'upload',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Time img', '{domain}'),
		'images_only' => false,
		'files_ext' => array( 'png', 'jpg', 'svg' ),
	),
	'detail_text_3' => array(
		'label' => __('Location', 'fw'),
		'type'  => 'text',
	),
	'img_3' => array(
		'type'  => 'upload',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Location img', '{domain}'),
		'images_only' => false,
		'files_ext' => array( 'png', 'jpg', 'svg' ),
	),
);