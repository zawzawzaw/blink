<?php
// ptype_offices Custom Post Type
add_action( 'init', 'ptype_offices_post_type' );
function ptype_offices_post_type() {
	register_post_type( 'ptype_offices',
		array(
			'labels' => array(
				'name' => __( 'Offices', 'theme' ),
				'singular_name' => __( 'Offices', 'theme' ),
				'add_new' =>  __( 'Add New Offices', 'theme' ),
				'add_new_item' =>  __( 'Add New Offices', 'theme' ),
				'edit_item' =>  __( 'Edit Offices', 'theme' ),
				'new_item' =>  __( 'New Offices', 'theme' ),
				'all_items' =>  __( 'All Offices', 'theme' ),
				'view_item' =>  __( 'View Offices', 'theme' ),
				'search_items' =>  __( 'Search Offices', 'theme' ),
				'not_found' =>   __( 'No Offices found', 'theme' ),
				'not_found_in_trash' =>  __( 'No Offices found in Trash', 'theme' ), 
				'parent_item_colon' => '',
				'menu_name' =>  __( 'Blink Offices', 'theme' )
			),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,	
		'menu_position' => 20,
		'supports' => array( 'title', 'page-attributes', 'thumbnail' ), 
		'rewrite'  => array( 'slug' => 'offices', 'with_front' => true )
		)
	);
}

// MetaBox
add_action( 'admin_init', 'ptype_offices_register_meta_box' );
function ptype_offices_register_meta_box()
{
    // Check if plugin is activated or included in theme
    if ( !class_exists( 'RW_Meta_Box' ) )
    return;
    $prefix = 'ptype_offices_';
    $meta_box = array(
		'id' => 'office',
		'title' => 'Offices',
		'pages' => array( 'ptype_offices' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(			

			array(
				'name' => 'Name & Address',
				'desc' => '',
				'id' => $prefix . 'name_and_address',
				'type' => 'wysiwyg',
				'std' => ''
			),

			array(
				'name' => 'Phone No.',
				'desc' => '',
				'id' => $prefix . 'phone_no',
				'type' => 'text',
				'std' => ''
			)

		)
	);
    new RW_Meta_Box( $meta_box );
}

// Add a new column for the order
function add_new_ptype_offices_column($ptype_offices_columns) {
  $ptype_offices_columns['menu_order'] = "Order";
  return $ptype_offices_columns;
}
add_action('manage_edit-ptype_offices_columns', 'add_new_ptype_offices_column');

// Render the column values
function show_order_column_office($name){
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
add_action('manage_ptype_offices_posts_custom_column','show_order_column_office');

// Set the column to be sortable
function order_column_register_sortable_office($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}
add_filter('manage_edit-ptype_offices_sortable_columns','order_column_register_sortable_office');
?>