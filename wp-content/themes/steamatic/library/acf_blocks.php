<?php
	
	
	
	
/**************** Preview CSS ****************/
	



function primer_setup() {
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
  
	// Enqueue editor styles.
	add_editor_style( 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
	add_editor_style( 'library/css/style.css' );
	
}

add_action( 'after_setup_theme', 'primer_setup' );




/**************** Preview JS ****************/


// Still working out the kinks on this one.

/*
function primer_enqueue() {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/library/js/libs/slick.min.js' );
    wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/library/js/scripts.js' );
}

add_action( 'enqueue_block_editor_assets', 'primer_enqueue' );
*/




/**************** Gutenberg Block Custom Category ****************/




function custom_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'custom',
				'title' => __( 'Custom', 'custom' ),
			),
		)
	);
}

add_filter( 'block_categories', 'custom_category', 10, 2);




/**************** Loading ACF into Gutenberg ****************/




// Render Callback

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/{$slug}.php") );
	}
}


// Registering ACF Blocks

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
  	
		acf_register_block(array(
			'name'				=> 'hero-header',
			'title'				=> __('Hero Header'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'hero', 'header' )
		));
		
		acf_register_block(array(
			'name'				=> 'join',
			'title'				=> __('Join'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'join' )
		));
		
		acf_register_block(array(
			'name'				=> 'about-excerpt',
			'title'				=> __('About Excerpt'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'about', 'excerpt' )
		));
		
		acf_register_block(array(
			'name'				=> 'video-testimonial',
			'title'				=> __('Video Testimonial'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'video', 'testimonial' )
		));
		
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('CTA'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'cta' )
		));
		
		acf_register_block(array(
			'name'				=> 'page-header',
			'title'				=> __('Page Header'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'page', 'header' )
		));
		
		acf_register_block(array(
			'name'				=> 'quote',
			'title'				=> __('Quote'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'quote' )
		));
		
		acf_register_block(array(
			'name'				=> 'story',
			'title'				=> __('Story'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'story' )
		));
		
		acf_register_block(array(
			'name'				=> 'image',
			'title'				=> __('Image'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'image' )
		));
		
		acf_register_block(array(
			'name'				=> 'services',
			'title'				=> __('Services'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'services' )
		));
		
		acf_register_block(array(
			'name'				=> 'team',
			'title'				=> __('Team'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'team' )
		));
		
		acf_register_block(array(
			'name'				=> 'join_header',
			'title'				=> __('Join Header'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'join', 'header' )
		));
		
		acf_register_block(array(
			'name'				=> 'join_info',
			'title'				=> __('Join Info'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'join', 'info' )
		));
		
		acf_register_block(array(
			'name'				=> 'faq-header',
			'title'				=> __('FAQ Header'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'faq', 'header' )
		));
		
		acf_register_block(array(
			'name'				=> 'faq',
			'title'				=> __('FAQ'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'faq' )
		));
		
		acf_register_block(array(
			'name'				=> 'contact',
			'title'				=> __('Contact'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'contact' )
		));
		
	}
}
  
?>