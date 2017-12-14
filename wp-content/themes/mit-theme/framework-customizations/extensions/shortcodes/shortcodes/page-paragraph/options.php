<?php

$options = array(
    'custom_paragraph' => array(
		'type'  => 'text',
		'value' => 'default value',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Label', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'customclass' => array(
		'label' => __('Custom Paragraph Class', 'fw'),
		'desc'  => __('Insert Custom H1 Class', 'fw'),
		'type'  => 'text',
	)
);