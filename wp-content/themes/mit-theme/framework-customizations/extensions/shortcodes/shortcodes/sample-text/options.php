<?php

$options = array(
    'sample_text' => array(
		'type'  => 'text',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Label', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'customclass' => array(
		'label' => __('Sample-Text Class', 'fw'),
		'desc'  => __('Insert Custom Sample-Text Class', 'fw'),
		'type'  => 'text',
	),
	'href' => array(
		'label' => __('Sample-Text Href', 'fw'),
		'desc'  => __('If you don\'t want to make href, just leave this field empty', 'fw'),
		'type'  => 'text',
	)
);