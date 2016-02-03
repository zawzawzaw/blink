<?php
// ptype_pressreleases Custom Post Type
add_action( 'init', 'ptype_pressreleases_post_type' );
function ptype_pressreleases_post_type() {
	register_post_type( 'ptype_pressreleases',
		array(
			'labels' => array(
				'name' => __( 'Press Release', 'theme' ),
				'singular_name' => __( 'Press Release', 'theme' ),
				'add_new' =>  __( 'Add New Press Release', 'theme' ),
				'add_new_item' =>  __( 'Add New Press Release', 'theme' ),
				'edit_item' =>  __( 'Edit Press Release', 'theme' ),
				'new_item' =>  __( 'New Press Release', 'theme' ),
				'all_items' =>  __( 'All Press Release', 'theme' ),
				'view_item' =>  __( 'View Press Release', 'theme' ),
				'search_items' =>  __( 'Search Press Release', 'theme' ),
				'not_found' =>   __( 'No Press Release found', 'theme' ),
				'not_found_in_trash' =>  __( 'No Press Release found in Trash', 'theme' ), 
				'parent_item_colon' => '',
				'menu_name' =>  __( 'Press Release', 'theme' )
			),
		'public' => true,
		'has_archive' => true,
		'hierarchical' => false,	
		'menu_position' => 20,
		'supports' => array( 'title', 'page-attributes', 'thumbnail' ), 
		'rewrite'  => array( 'slug' => 'Press Release', 'with_front' => true )
		)
	);
}

// MetaBox
add_action( 'admin_init', 'ptype_pressreleases_register_meta_box' );
function ptype_pressreleases_register_meta_box()
{
    // Check if plugin is activated or included in theme
    if ( !class_exists( 'RW_Meta_Box' ) )
    return;
    $prefix = 'ptype_pressreleases_';
    $meta_box = array(
		'id' => 'press_release',
		'title' => 'Press Release',
		'pages' => array( 'ptype_pressreleases' ),
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
function add_new_ptype_pressreleases_column($ptype_pressreleases_columns) {
  $ptype_pressreleases_columns['menu_order'] = "Order";
  return $ptype_pressreleases_columns;
}
add_action('manage_edit-ptype_pressreleases_columns', 'add_new_ptype_pressreleases_column');

// Render the column values
function show_order_column_press_release($name){
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
add_action('manage_ptype_pressreleases_posts_custom_column','show_order_column_press_release');

// Set the column to be sortable
function order_column_register_sortable_press_release($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}
add_filter('manage_edit-ptype_pressreleases_sortable_columns','order_column_register_sortable_press_release');
?>