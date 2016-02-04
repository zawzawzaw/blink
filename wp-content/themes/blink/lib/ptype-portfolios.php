<?php
// ptype_portfolios Custom Post Type
add_action( 'init', 'ptype_portfolios_post_type' );
function ptype_portfolios_post_type() {
	register_post_type( 'ptype_portfolios',
		array(
			'labels' => array(
				'name' => __( 'Portfolios', 'theme' ),
				'singular_name' => __( 'Portfolios', 'theme' ),
				'add_new' =>  __( 'Add New Portfolios', 'theme' ),
				'add_new_item' =>  __( 'Add New Portfolios', 'theme' ),
				'edit_item' =>  __( 'Edit Portfolios', 'theme' ),
				'new_item' =>  __( 'New Portfolios', 'theme' ),
				'all_items' =>  __( 'All Portfolios', 'theme' ),
				'view_item' =>  __( 'View Portfolios', 'theme' ),
				'search_items' =>  __( 'Search Portfolios', 'theme' ),
				'not_found' =>   __( 'No Portfolios found', 'theme' ),
				'not_found_in_trash' =>  __( 'No Portfolios found in Trash', 'theme' ), 
				'parent_item_colon' => '',
				'menu_name' =>  __( 'Portfolios / Projects', 'theme' )
			),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,	
		'menu_position' => 20,
		'supports' => array( 'title', 'page-attributes', 'thumbnail' ), 
		'rewrite'  => array( 'slug' => 'project', 'with_front' => true )
		)
	);
}

add_action( 'init', 'ptype_portfolios_taxonomy' );

function ptype_portfolios_taxonomy() {
	register_taxonomy('portfolio_type', 'ptype_portfolios', array(
	    'labels' => array('add_new_item' => 'Add New Page','name'=>'Type')
	));	
}

// MetaBox
add_action( 'admin_init', 'ptype_portfolios_register_meta_box' );
function ptype_portfolios_register_meta_box()
{
    // Check if plugin is activated or included in theme
    if ( !class_exists( 'RW_Meta_Box' ) )
    return;
    $prefix = 'ptype_portfolios_';
    $meta_box = array(
		'id' => 'portfolio',
		'title' => 'Portfolios',
		'pages' => array( 'ptype_portfolios' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(

			array(
				'name' => 'Slider Image',
				'desc' => '',
				'id' => $prefix . 'slider_image',
				'type' => 'image_advanced'
			),

			array(
				'name' => 'Photo',
				'desc' => '',
				'id' => $prefix . 'photo',
				'type' => 'image_advanced'
			),

			array(
				'name' => 'Title',
				'desc' => '',
				'id' => $prefix . 'title',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Location',
				'desc' => '',
				'id' => $prefix . 'location',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Scope',
				'desc' => '',
				'id' => $prefix . 'scope',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'No. of Keys',
				'desc' => '',
				'id' => $prefix . 'no_of_keys',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Awards',
				'desc' => '',
				'id' => $prefix . 'awards',
				'type' => 'textarea',
				'std' => ''
			),

			array(
				'name' => 'Project Description',
				'desc' => '',
				'id' => $prefix . 'project_description',
				'type' => 'wysiwyg',
				'std' => ''
			)

		)
	);
    new RW_Meta_Box( $meta_box );
}

// Add a new column for the order
function add_new_ptype_portfolios_column($ptype_portfolios_columns) {
  $ptype_portfolios_columns['menu_order'] = "Order";
  return $ptype_portfolios_columns;
}
add_action('manage_edit-ptype_portfolios_columns', 'add_new_ptype_portfolios_column');

// Render the column values
function show_order_column_portfolio($name){
  global $post;

  switch ($name) {
    case 'menu_order':
      $order = $post->menu_order;
      echo $order;
      break;
   default:
      break;
   }
}
add_action('manage_ptype_portfolios_posts_custom_column','show_order_column_portfolio');

// Set the column to be sortable
function order_column_register_sortable_portfolio($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}
add_filter('manage_edit-ptype_portfolios_sortable_columns','order_column_register_sortable_portfolio');
?>