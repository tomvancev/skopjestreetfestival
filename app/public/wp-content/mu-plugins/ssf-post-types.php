<?php 

function ssf_post_types(){
// SlideShow Post Type
	register_post_type('slide',array(
		'supports' => array('title'),
		'public' => false,
		'show_ui' => true, 
		'labels' => array(
			'name'=> 'Front Page Slides',
			'add_new_item'=> 'Add New Slide',
			'edit_item' => 'Edit Slide',
			'all_items' => 'All Slides',
			'singular_name' => 'Slide'
		),
		'menu_icon'=> 'dashicons-editor-video'
	));		

}

add_action('init', 'ssf_post_types' );


