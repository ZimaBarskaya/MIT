<?php

$options = array(
    'custom_sub_paragraph' => array(
		'type'  => 'text',
		'value' => 'default value',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Label', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),
	'customclass' => array(
		'label' => __('Custom Sub-Paragraph Class', 'fw'),
		'desc'  => __('Insert Custom Sub-Paragraph Class', 'fw'),
		'type'  => 'text',
	)
);