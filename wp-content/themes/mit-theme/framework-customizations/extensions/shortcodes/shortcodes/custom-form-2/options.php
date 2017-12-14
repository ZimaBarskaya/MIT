<?php

$options = array(
	'main' => array(
		'type'    => 'box',
		'title'   => '',
		'options' => array(
			'id'       => array(
				'type'  => 'unique',
			),
			'tab_1' => array(
				'type'    => 'tab',
				'title'   => __( 'Settings', 'fw' ),
				'options' => array(
					'settings-options' => array(
						'title'   => __( 'Options', 'fw' ),
						'type'    => 'tab',
						'options' => array(
							'form_text_settings'  => array(
								'type'    => 'group',
								'options' => array(
									'form_title' => array(
										'label' => __('Form Title', 'fw'),
										'desc'  => __('Insert Custom Sub-Paragraph Class', 'fw'),
										'type'  => 'text',
									),
									'name' => array(
										'label' => __('Placeholder of field name', 'fw'),
										'desc'  => __('If you don\'t want to see this field, just leave placeholder empty', 'fw'),
										'type'  => 'text',
									),
									'email' => array(
										'label' => __('Placeholder of field email', 'fw'),
										'desc'  => __('If you don\'t want to see this field, just leave placeholder empty', 'fw'),
										'type'  => 'text',
									),
									'phone' => array(
										'label' => __('Placeholder of field phone', 'fw'),
										'desc'  => __('If you don\'t want to see this field, just leave placeholder empty', 'fw'),
										'type'  => 'text',
									),
									'button' => array(
										'label' => __('Form button text', 'fw'),
										'desc'  => __('Insert Custom Sub-Paragraph Class', 'fw'),
										'type'  => 'text',
									)
								),
							),
						)
					)
				),
			),
			'tab_2' => array(
				'type'    => 'tab',
				'title'   => __( 'Settings', 'fw' ),
				'options' => array(
					'settings-options' => array(
						'title'   => __( 'Options', 'fw' ),
						'type'    => 'tab',
						'options' => array(
							'form_text_settings'  => array(
								'type'    => 'group',
								'options' => array(
									'data_phone' => array(
										'type'  => 'wp-editor',
										'value' => 'default value',
										'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
										'label' => __('Name of organization phone', '{domain}'),
										'desc'  => __('If you don\'t want to see this field, just leave it empty', 'fw'),
										'size' => 'small', 
										'editor_height' => 100,
										'wpautop' => true,
										'editor_type' => false, 
									),
									'data_adress' => array(
										'type'  => 'wp-editor',
										'value' => 'default value',
										'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
										'label' => __('Name of organization adress', 'fw'),
										'desc'  => __('If you don\'t want to see this field, just leave it empty', 'fw'),
										'size' => 'small', 
										'editor_height' => 100,
										'wpautop' => true,
										'editor_type' => false,
									),
									'data_mail' => array(
										'label' => __('Name of organization e-mail', 'fw'),
										'desc'  => __('If you don\'t want to see this field, just leave it empty', 'fw'),
										'type'  => 'text',
									),
								),
							),
						)
					)
				),
			),
		),
	)
);