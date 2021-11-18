<?php

function wild_files(){
	wp_enqueue_script('main-wild-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
	wp_enqueue_style('font-awesome', get_theme_file_uri('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'));
	wp_enqueue_style('custom-google-fonts', get_theme_file_uri('//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'));
	wp_enqueue_style('wild_style', get_theme_file_uri('/build/style-index.css'));
	wp_enqueue_style('wild_extra_style', get_theme_file_uri('/build/index.css')); 
}

add_action('wp_enqueue_scripts', 'wild_files');

function wild_features(){
	register_nav_menu('headerMenuLocation', 'Header Menu Location');
	register_nav_menu('footerLocationOne', 'Footer Location One');
	register_nav_menu('footerLocationTwo', 'Footer Location Two');
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wild_features');

function wild_adjust_query($query){
	if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
		$today = date('Ymd');
		$query->set('meta_key','event_date');
		$query->set('orderby', 'meta_value_num');
		$query->set('order', 'ASC');
		$query->set('meta_query', array(
                array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric'
                )
              )
            );
	}
}

add_action('pre_get_posts', 'wild_adjust_query');

?>