<?php

function my_gutenberg_block() {
	// Define the block's attributes
	wp_register_script(
		'myplugin-block',
		get_template_directory_uri() . '/block.js',
		array( 'wp-blocks', 'wp-element' ),
		filemtime( get_template_directory() . '/block.js' )
	);
 
	register_block_type( 'myplugin/my-block', array(
		'editor_script' => 'myplugin-block',
		'attributes' => array(
			'text' => array(
				'type' => 'string',
				'default' => 'Hello World'
			)
		)
	) );
}
add_action( 'init', 'my_gutenberg_block' );

?>