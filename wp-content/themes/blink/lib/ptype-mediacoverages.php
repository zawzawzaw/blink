<?php
// ptype_mediacoverages Custom Post Type
add_action( 'init', 'ptype_mediacoverages_post_type' );
function ptype_mediacoverages_post_type() {
	register_post_type( 'ptype_mediacoverages',
		array(
			'labels' => array(
				'name' => __( 'Media Coverage', 'theme' ),
				'singular_name' => __( 'Media Coverage', 'theme' ),
				'add_new' =>  __( 'Add New Media Coverage', 'theme' ),
				'add_new_item' =>  __( 'Add New Media Coverage', 'theme' ),
				'edit_item' =>  __( 'Edit Media Coverage', 'theme' ),
				'new_item' =>  __( 'New Media Coverage', 'theme' ),
				'all_items' =>  __( 'All Media Coverage', 'theme' ),
				'view_item' =>  __( 'View Media Coverage', 'theme' ),
				'search_items' =>  __( 'Search Media Coverage', 'theme' ),
				'not_found' =>   __( 'No Media Coverage found', 'theme' ),
				'not_found_in_trash' =>  __( 'No Media Coverage found in Trash', 'theme' ), 
				'parent_item_colon' => '',
				'menu_name' =>  __( 'Media Coverage', 'theme' )
			),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,	
		'menu_position' => 20,
		'supports' => array( 'title', 'page-attributes', 'thumbnail' ), 
		'rewrite'  => array( 'slug' => 'mediacoverage', 'with_front' => true )
		)
	);
}

// MetaBox
add_action( 'admin_init', 'ptype_mediacoverages_register_meta_box' );
function ptype_mediacoverages_register_meta_box()
{
    // Check if plugin is activated or included in theme
    if ( !class_exists( 'RW_Meta_Box' ) )
    return;
    $prefix = 'ptype_mediacoverages_';
    $meta_box = array(
		'id' => 'media_coverage',
		'title' => 'Media Coverage',
		'pages' => array( 'ptype_mediacoverages' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(

			array(
				'name' => 'Date',
				'desc' => '',
				'id' => $prefix . 'date',
				'type' => 'text',
				'std' => ''
			),		

			array(
				'name' => 'Summary',
				'desc' => '',
				'id' => $prefix . 'summary',
				'type' => 'textarea',
				'std' => ''
			),

			array(
				'name' => 'Link',
				'desc' => '',
				'id' => $prefix . 'link',
				'type' => 'text',
				'std' => ''
			)

		)
	);
    new RW_Meta_Box( $meta_box );
}

// Add a new column for the order
function add_new_ptype_mediacoverages_column($ptype_mediacoverages_columns) {
  $ptype_mediacoverages_columns['menu_order'] = "Order";
  return $ptype_mediacoverages_columns;
}
add_action('manage_edit-ptype_mediacoverages_columns', 'add_new_ptype_mediacoverages_column');

// Render the column values
function show_order_column_media_coverage($name){
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
add_action('manage_ptype_mediacoverages_posts_custom_column','show_order_column_media_coverage');

// Set the column to be sortable
function order_column_register_sortable_media_coverage($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}
add_filter('manage_edit-ptype_mediacoverages_sortable_columns','order_column_register_sortable_media_coverage');
?>