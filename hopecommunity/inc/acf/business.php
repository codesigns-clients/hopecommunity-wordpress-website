<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d6c25adcafb5',
	'title' => 'Business Information',
	'fields' => array(
		array(
			'key' => 'field_5d6c25b830b02',
			'label' => 'Company Name',
			'name' => 'company_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => 'Company Name',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d6c25c330b03',
			'label' => 'Company Address',
			'name' => 'company_address',
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
		array(
			'key' => 'field_5d6c25d630b04',
			'label' => 'VAT Number',
			'name' => 'vat_number',
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
			'default_value' => 'GB123456789',
			'placeholder' => 'Enter VAT Number Here',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d6c25f030b05',
			'label' => 'Company Registration Number',
			'name' => 'company_registration_number',
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
			'default_value' => '01234567',
			'placeholder' => 'Registered in England XXXX',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
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
	'menu_order' => 30,
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