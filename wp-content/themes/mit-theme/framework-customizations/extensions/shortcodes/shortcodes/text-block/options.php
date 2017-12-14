<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' )
	),
	'customclass' => array(
		'label' => __('Custom Text Class', 'fw'),
		'desc'  => __('Insert Custom Test Class', 'fw'),
		'type'  => 'text',
	)
);
