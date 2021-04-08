<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d6c22590a455',
	'title' => 'Contact Information',
	'fields' => array(
		array(
			'key' => 'field_5d6c227ec1a59',
			'label' => 'Phone Number',
			'name' => 'phone_number',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => '02476 000000',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d6c22aac1a5a',
			'label' => 'Mobile Number',
			'name' => 'mobile_number',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d6c22bac1a5b',
			'label' => 'Email Address',
			'name' => 'email_address',
			'type' => 'email',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => 'contact@domain.co.uk',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5d6c22d8c1a5c',
			'label' => 'Contact Address',
			'name' => 'contact_address',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => '123 Some Road
			Some Place
			Coventry
			CV1 1AA',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 6,
			'new_lines' => 'br',
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
	'menu_order' => 20,
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