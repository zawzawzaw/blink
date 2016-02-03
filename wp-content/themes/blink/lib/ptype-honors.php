<?php
// ptype_honors Custom Post Type
add_action( 'init', 'ptype_honors_post_type' );
function ptype_honors_post_type() {
	register_post_type( 'ptype_honors',
		array(
			'labels' => array(
				'name' => __( 'Honors', 'theme' ),
				'singular_name' => __( 'Honors', 'theme' ),
				'add_new' =>  __( 'Add New Honors', 'theme' ),
				'add_new_item' =>  __( 'Add New Honors', 'theme' ),
				'edit_item' =>  __( 'Edit Honors', 'theme' ),
				'new_item' =>  __( 'New Honors', 'theme' ),
				'all_items' =>  __( 'All Honors', 'theme' ),
				'view_item' =>  __( 'View Honors', 'theme' ),
				'search_items' =>  __( 'Search Honors', 'theme' ),
				'not_found' =>   __( 'No Honors found', 'theme' ),
				'not_found_in_trash' =>  __( 'No Honors found in Trash', 'theme' ), 
				'parent_item_colon' => '',
				'menu_name' =>  __( 'Profile Honors', 'theme' )
			),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,	
		'menu_position' => 20,
		'supports' => array( 'title', 'page-attributes', 'thumbnail' ), 
		'rewrite'  => array( 'slug' => 'honors', 'with_front' => true )
		)
	);
}

// MetaBox
add_action( 'admin_init', 'ptype_honors_register_meta_box' );
function ptype_honors_register_meta_box()
{
    // Check if plugin is activated or included in theme
    if ( !class_exists( 'RW_Meta_Box' ) )
    return;
    $prefix = 'ptype_honors_';
    $meta_box = array(
		'id' => 'honor',
		'title' => 'Honors',
		'pages' => array( 'ptype_honors' ),
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
				'name' => 'Link',
				'desc' => '',
				'id' => $prefix . 'link',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Sub Title',
				'desc' => '',
				'id' => $prefix . 'sub_title',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Description',
				'desc' => '',
				'id' => $prefix . 'description',
				'type' => 'wysiwyg',
				'std' => ''
			)

		)
	);
    new RW_Meta_Box( $meta_box );
}

// Add a new column for the order
function add_new_ptype_honors_column($ptype_honors_columns) {
  $ptype_honors_columns['menu_order'] = "Order";
  return $ptype_honors_columns;
}
add_action('manage_edit-ptype_honors_columns', 'add_new_ptype_honors_column');

// Render the column values
function show_order_column_honor($name){
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
add_action('manage_ptype_honors_posts_custom_column','show_order_column_honor');

// Set the column to be sortable
function order_column_register_sortable_honor($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}
add_filter('manage_edit-ptype_honors_sortable_columns','order_column_register_sortable_honor');
?>