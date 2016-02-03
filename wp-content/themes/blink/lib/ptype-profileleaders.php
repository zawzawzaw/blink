<?php
// ptype_profileleaders Custom Post Type
add_action( 'init', 'ptype_profileleaders_post_type' );
function ptype_profileleaders_post_type() {
	register_post_type( 'ptype_profileleaders',
		array(
			'labels' => array(
				'name' => __( 'Profile Leaders', 'theme' ),
				'singular_name' => __( 'Profile Leaders', 'theme' ),
				'add_new' =>  __( 'Add New Profile Leaders', 'theme' ),
				'add_new_item' =>  __( 'Add New Profile Leaders', 'theme' ),
				'edit_item' =>  __( 'Edit Profile Leaders', 'theme' ),
				'new_item' =>  __( 'New Profile Leaders', 'theme' ),
				'all_items' =>  __( 'All Profile Leaders', 'theme' ),
				'view_item' =>  __( 'View Profile Leaders', 'theme' ),
				'search_items' =>  __( 'Search Profile Leaders', 'theme' ),
				'not_found' =>   __( 'No Profile Leaders found', 'theme' ),
				'not_found_in_trash' =>  __( 'No Profile Leaders found in Trash', 'theme' ), 
				'parent_item_colon' => '',
				'menu_name' =>  __( 'Profile Leaders', 'theme' )
			),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,	
		'menu_position' => 20,
		'supports' => array( 'title', 'page-attributes', 'thumbnail' ), 
		'rewrite'  => array( 'slug' => 'profile_leaders', 'with_front' => true )
		)
	);
}

// MetaBox
add_action( 'admin_init', 'ptype_profileleaders_register_meta_box' );
function ptype_profileleaders_register_meta_box()
{
    // Check if plugin is activated or included in theme
    if ( !class_exists( 'RW_Meta_Box' ) )
    return;
    $prefix = 'ptype_profileleaders_';
    $meta_box = array(
		'id' => 'profile-leaders',
		'title' => 'Profile Leaders',
		'pages' => array( 'ptype_profileleaders' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(

			array(
				'name' => 'Photo',
				'desc' => '',
				'id' => $prefix . 'photo',
				'type' => 'image_advanced'
			),

			array(
				'name' => 'Position and Place',
				'desc' => '',
				'id' => $prefix . 'position_and_place',
				'type' => 'text',
				'std' => ''
			),


		)
	);
    new RW_Meta_Box( $meta_box );
}

// Add a new column for the order
function add_new_ptype_profileleaders_column($ptype_profileleaders_columns) {
  $ptype_profileleaders_columns['menu_order'] = "Order";
  return $ptype_profileleaders_columns;
}
add_action('manage_edit-ptype_profileleaders_columns', 'add_new_ptype_profileleaders_column');

// Render the column values
function show_order_column_profileleaders($name){
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
add_action('manage_ptype_profileleaders_posts_custom_column','show_order_column_profileleaders');

// Set the column to be sortable
function order_column_register_sortable_profileleaders($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}
add_filter('manage_edit-ptype_profileleaders_sortable_columns','order_column_register_sortable_profileleaders');
?>