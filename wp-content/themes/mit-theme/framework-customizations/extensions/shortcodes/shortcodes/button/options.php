<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'label'  => array(
		'label' => __( 'Button Label', 'fw' ),
		'desc'  => __( 'This is the text that appears on your button', 'fw' ),
		'type'  => 'text',
		'value' => 'Submit'
	),
	'link'   => array(
		'label' => __( 'Button Link', 'fw' ),
		'desc'  => __( 'Where should your button link to', 'fw' ),
		'type'  => 'text',
		'value' => '#'
	),
	'data-link'   => array(
		'label' => __( 'Button Data-Link', 'fw' ),
		'desc'  => __( 'What is button data-link', 'fw' ),
		'type'  => 'text',
		'value' => 'on-page'
	),
	'target' => array(
		'type'  => 'switch',
		'label'   => __( 'Open Link in New Window', 'fw' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'fw'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'fw'),
		),
	),
	'color'  => array(
		'label'   => __( 'Button Color', 'fw' ),
		'desc'    => __( 'Choose a color for your button', 'fw' ),
		'type'    => 'select',
		'choices' => array(
			''      => __('Default', 'fw'),
			'black' => __( 'Black', 'fw' ),
			'blue'  => __( 'Blue', 'fw' ),
			'green' => __( 'Green', 'fw' ),
			'red'   => __( 'Red', 'fw' ),
		)
	),
	'customclass' => array(
		'label' => __('Custom Button Class', 'fw'),
		'desc'  => __('Insert Custom Button Class', 'fw'),
		'type'  => 'text',
	),
	'checkbox' => array(
		'type'  => 'checkbox',
		'value' => false, 
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Center position', '{domain}'),
	)
);