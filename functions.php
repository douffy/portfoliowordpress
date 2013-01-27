<?php 

add_action ('widgets_init', 'douffy_sidebars');
add_action('after_setup_theme','douffy_setup');
add_action('init', 'create_post_type');
add_action( 'init', 'add_taxonomies' );



if (!function_exists('add_taxonomies')) {
	
	function add_taxonomies() {
		
		register_taxonomy('techniques',
			'works',
			array(
				'label' => __( 'Techniques utilisées' )	,
				'hierarchical' => true,
				'query_var'=>true,
				'rewrite'=>true
			)
		);
	}
}


if (!function_exists('create_post_type')) {
	
	function create_post_type(){
	
		register_post_type('works', 
			array(
				'labels'=> array(
					'name'=>__('Travaux'),
					'singular_name' => __('Travail')
					),
				'supports'=> array('title','editor','thumbnail', 'post-formats'),
				'public'=>true,
				'has_archive'=>true
			)
		);
		
		register_post_type('social', 
			array(
				'labels'=> array(
					'name'=>__('Reseaux Sociaux'),
					'singular_name' => __('Reseau Social')
					),
				'supports'=> array('title','editor','thumbnail', 'post-formats', 'custom-fields'),
				'public'=>true,
				'has_archive'=>true
			)
		);
	
	}
}





if (!function_exists('douffy_sidebars')) {

	function douffy_sidebars(){
	
		register_sidebar(
			array(
				'id'=>'primary',
				'name'=> __('Primary'),
				'description' => __('A short description of the sidebar'),
				'before_widget'=>'<div if="1$s" class="widget %2$s">',
				'after_widget'=>'</div>',
				'before_title'=>'<h3 class="widget-title">',
				'after_title'=>'</h3>'
				)
			);
	
		register_sidebar(
			array(
				'id'=>'secondary',
				'name'=> __('Secondary'),
				'description' => __('A short description of the sidebar'),
				'before_widget'=>'<div if="1$s" class="widget %2$s">',
				'after_widget'=>'</div>',
				'before_title'=>'<h3 class="widget-title">',
				'after_title'=>'</h3>'
				)
			);
			
	}
}



if (!function_exists('douffy_setup')){
	
	function douffy_setup(){
		add_theme_support('post-thumbnails');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-formats', array ('aside', 'link', 'gallery', 'status','quote', 'image' ));
		
		if (function_exists('add_image_size')){
			add_image_size('folio-work', 333,600, false);
			add_image_size('grande', 476,600, false);
			
		}
		
		register_nav_menu('header-menu', __('Header Menu', 'douffy'));
		
		
	}
}

