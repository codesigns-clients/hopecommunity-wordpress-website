<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d6c256c6bd23',
	'title' => 'Social Media Links',
	'fields' => array(
		array(
			'key' => 'field_5d6c27debdf77',
			'label' => 'Networks',
			'name' => 'networks',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Network',
			'sub_fields' => array(
				array(
					'key' => 'field_5d6c28b417fbe',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'font-awesome',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '40',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'icon_sets' => array(
						0 => 'fab',
					),
					'custom_icon_set' => '',
					'default_label' => '<i class="fab"></i> facebook-f',
					'default_value' => '',
					'save_format' => 'element',
					'allow_null' => 0,
					'show_preview' => 1,
					'enqueue_fa' => 0,
					'fa_live_preview' => '',
					'choices' => array(
					),
				),
				array(
					'key' => 'field_5d6c28d117fbf',
					'label' => 'URL',
					'name' => 'url',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '60',
						'class' => '',
						'id' => '',
					),
					'hide_admin' => 0,
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-theme-details',
			),
		),
	),
	'menu_order' => 100,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
?>