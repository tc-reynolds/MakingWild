function wild_post_types(){
	register_post_type('event', array(
		'public' => true,
		'labels' => array(
			'name' => 'Events'
		),
		'menu_icon' => 'dashicons-calendar-alt'
	));
}

add_action('init', 'wild_post_types');
