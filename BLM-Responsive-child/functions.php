<?php
	add_action( 'init', 'create_post_type' );
		function create_post_type() {
		 	register_post_type( 'portfolio',
		 		array(
		 			'labels' => array(
		 				'name' => __( 'Portfolios' ), 
		 				'singular_name' => __( 'Portfolio' )
		 			),
		 		'public' => true,
		 		'capability_type' => 'post',
		 		'supports' =>  array(
		 			'thumbnail',
		 			'title',
		 			'editor',
		 			'revisions'
		 		),
		 		'taxonomies' => array( 'medias'),
		 		'has_archive' => true
		 		)
		 );


		}

		add_action( 'init', 'register_taxonomy_medias' );

function register_taxonomy_medias() {

    $labels = array( 
        'name' => _x( 'Medias', 'medias' ),
        'singular_name' => _x( 'Media', 'medias' ),
        'search_items' => _x( 'Search Medias', 'medias' ),
        'popular_items' => _x( 'Popular Medias', 'medias' ),
        'all_items' => _x( 'All Medias', 'medias' ),
        'parent_item' => _x( 'Parent Media', 'medias' ),
        'parent_item_colon' => _x( 'Parent Media:', 'medias' ),
        'edit_item' => _x( 'Edit Media', 'medias' ),
        'update_item' => _x( 'Update Media', 'medias' ),
        'add_new_item' => _x( 'Add New Media', 'medias' ),
        'new_item_name' => _x( 'New Media', 'medias' ),
        'separate_items_with_commas' => _x( 'Separate medias with commas', 'medias' ),
        'add_or_remove_items' => _x( 'Add or remove Medias', 'medias' ),
        'choose_from_most_used' => _x( 'Choose from most used Medias', 'medias' ),
        'menu_name' => _x( 'Medias', 'medias' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => false,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'medias', array('portfolio'), $args );
}


?>