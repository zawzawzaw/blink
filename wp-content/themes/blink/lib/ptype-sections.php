<?php
// ptype_sections Custom Post Type
add_action( 'init', 'ptype_sections_post_type' );
function ptype_sections_post_type() {
	register_post_type( 'ptype_sections',
		array(
			'labels' => array(
				'name' => __( 'Sections', 'theme' ),
				'singular_name' => __( 'Section', 'theme' ),
				'add_new' =>  __( 'Add New Section', 'theme' ),
				'add_new_item' =>  __( 'Add New Section', 'theme' ),
				'edit_item' =>  __( 'Edit Section', 'theme' ),
				'new_item' =>  __( 'New Section', 'theme' ),
				'all_items' =>  __( 'All Sections', 'theme' ),
				'view_item' =>  __( 'View Section', 'theme' ),
				'search_items' =>  __( 'Search Section', 'theme' ),
				'not_found' =>   __( 'No Section found', 'theme' ),
				'not_found_in_trash' =>  __( 'No Section found in Trash', 'theme' ), 
				'parent_item_colon' => '',
				'menu_name' =>  __( 'Home Sections', 'theme' )
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => false,	
			'menu_position' => 5,
			'supports' => array( 'title', 'page-attributes', 'thumbnail' ), 
			'rewrite'  => array( 'slug' => 'ptype_sections', 'with_front' => true ),
			'menu_icon' => 'dashicons-format-aside',  // Icon Path
		)
	);
}

// MetaBox
add_action( 'admin_init', 'ptype_sections_register_meta_box' );
function ptype_sections_register_meta_box()
{
    // Check if plugin is activated or included in theme
    if ( !class_exists( 'RW_Meta_Box' ) )
    return;
    $prefix = 	'ptype_sections_';
    $meta_box = array(
		'id' => 'sections-settings',
		'title' => 'Heading',
		'pages' => array( 'ptype_sections' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(									
			
			array(
				'name' => 'Heading Text 1',
				'desc' => '',
				'id' => $prefix . 'heading_text_1',
				'type' => 'textarea'
			),
			array(
				'name' => 'Heading Text 2',
				'desc' => '',
				'id' => $prefix . 'heading_text_2',
				'type' => 'textarea'
			),
			array(
				'name' => 'Heading Text 3',
				'desc' => '',
				'id' => $prefix . 'heading_text_3',
				'type' => 'textarea'
			)
			
	 	)
	);
    new RW_Meta_Box( $meta_box ); 

    $meta_box_2 = array(
    	'id' => 'sections-settings-2',
		'title' => 'Content 1',
		'pages' => array( 'ptype_sections' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(					

			array(
				'name' => 'Heading H6',
				'desc' => '',
				'id' => $prefix . 'content_1_heading_h6',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Heading H2',
				'desc' => '',
				'id' => $prefix . 'content_1_heading_h2',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Paragraph',
				'desc' => '',
				'id' => $prefix . 'content_1_paragraph',
				'type' => 'textarea',
				'std' => ''
			),

			array(
				'name' => 'Link Text',
				'desc' => '',
				'id' => $prefix . 'content_1_link_text',
				'type' => 'text',
				'std' => ''
			),
			
			array(
				'name' => 'Link',
				'desc' => '',
				'id' => $prefix . 'content_1_link',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Image',
				'desc' => '',
				'id' => $prefix . 'content_1_img',
				'type' => 'image_advanced'
			),
			
		)
    );
    new RW_Meta_Box( $meta_box_2 );   

    $meta_box_3 = array(
    	'id' => 'sections-settings-3',
		'title' => 'Content 2',
		'pages' => array( 'ptype_sections' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(					

			array(
				'name' => 'Heading H6',
				'desc' => '',
				'id' => $prefix . 'content_2_heading_h6',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Heading H2',
				'desc' => '',
				'id' => $prefix . 'content_2_heading_h2',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Paragraph',
				'desc' => '',
				'id' => $prefix . 'content_2_paragraph',
				'type' => 'textarea',
				'std' => ''
			),

			array(
				'name' => 'Link Text',
				'desc' => '',
				'id' => $prefix . 'content_2_link_text',
				'type' => 'text',
				'std' => ''
			),
			
			array(
				'name' => 'Link',
				'desc' => '',
				'id' => $prefix . 'content_2_link',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Image',
				'desc' => '',
				'id' => $prefix . 'content_2_img',
				'type' => 'image_advanced'
			),
			
		)
    );
    new RW_Meta_Box( $meta_box_3 );

    $meta_box_4 = array(
    	'id' => 'sections-settings-4',
		'title' => 'Content 3',
		'pages' => array( 'ptype_sections' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(					

			array(
				'name' => 'Heading H6',
				'desc' => '',
				'id' => $prefix . 'content_3_heading_h6',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Heading H2',
				'desc' => '',
				'id' => $prefix . 'content_3_heading_h2',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Paragraph',
				'desc' => '',
				'id' => $prefix . 'content_3_paragraph',
				'type' => 'textarea',
				'std' => ''
			),

			array(
				'name' => 'Link Text',
				'desc' => '',
				'id' => $prefix . 'content_3_link_text',
				'type' => 'text',
				'std' => ''
			),
			
			array(
				'name' => 'Link',
				'desc' => '',
				'id' => $prefix . 'content_3_link',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Image',
				'desc' => '',
				'id' => $prefix . 'content_3_img',
				'type' => 'image_advanced'
			),
			
		)
    );
    new RW_Meta_Box( $meta_box_4 );  

    $meta_box_5 = array(
    	'id' => 'sections-settings-5',
		'title' => 'Content 4',
		'pages' => array( 'ptype_sections' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(					

			array(
				'name' => 'Heading H6',
				'desc' => '',
				'id' => $prefix . 'content_4_heading_h6',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Heading H2',
				'desc' => '',
				'id' => $prefix . 'content_4_heading_h2',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Paragraph',
				'desc' => '',
				'id' => $prefix . 'content_4_paragraph',
				'type' => 'textarea',
				'std' => ''
			),

			array(
				'name' => 'Link Text',
				'desc' => '',
				'id' => $prefix . 'content_4_link_text',
				'type' => 'text',
				'std' => ''
			),
			
			array(
				'name' => 'Link',
				'desc' => '',
				'id' => $prefix . 'content_4_link',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Image',
				'desc' => '',
				'id' => $prefix . 'content_4_img',
				'type' => 'image_advanced'
			),
			
		)
    );
    new RW_Meta_Box( $meta_box_5 );

    $meta_box_6 = array(
    	'id' => 'sections-settings-6',
		'title' => 'Content 5',
		'pages' => array( 'ptype_sections' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(					

			array(
				'name' => 'Heading H6',
				'desc' => '',
				'id' => $prefix . 'content_5_heading_h6',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Heading H2',
				'desc' => '',
				'id' => $prefix . 'content_5_heading_h2',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'News Date',
				'desc' => '',
				'id' => $prefix . 'content_5_news_date',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'News Title',
				'desc' => '',
				'id' => $prefix . 'content_5_news_title',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Paragraph',
				'desc' => '',
				'id' => $prefix . 'content_5_paragraph',
				'type' => 'textarea',
				'std' => ''
			),

			array(
				'name' => 'Link Text',
				'desc' => '',
				'id' => $prefix . 'content_5_link_text',
				'type' => 'text',
				'std' => ''
			),
			
			array(
				'name' => 'Link',
				'desc' => '',
				'id' => $prefix . 'content_5_link',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Image',
				'desc' => '',
				'id' => $prefix . 'content_5_img',
				'type' => 'image_advanced'
			),
			
		)
    );
    new RW_Meta_Box( $meta_box_6 );

    $meta_box_7 = array(
    	'id' => 'sections-settings-7',
		'title' => 'Content 6',
		'pages' => array( 'ptype_sections' ),
		'context' => 'normal',
		'priority' => 'core',
		'fields' => array(					

			array(
				'name' => 'Heading H6',
				'desc' => '',
				'id' => $prefix . 'content_6_heading_h6',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Heading H2',
				'desc' => '',
				'id' => $prefix . 'content_6_heading_h2',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Paragraph',
				'desc' => '',
				'id' => $prefix . 'content_6_paragraph',
				'type' => 'textarea',
				'std' => ''
			),

			array(
				'name' => 'Link Text',
				'desc' => '',
				'id' => $prefix . 'content_6_link_text',
				'type' => 'text',
				'std' => ''
			),
			
			array(
				'name' => 'Link',
				'desc' => '',
				'id' => $prefix . 'content_6_link',
				'type' => 'text',
				'std' => ''
			),

			array(
				'name' => 'Image',
				'desc' => '',
				'id' => $prefix . 'content_6_img',
				'type' => 'image_advanced'
			),
			
		)
    );
    new RW_Meta_Box( $meta_box_7 );
}

// Add a new column for the order
function add_new_ptype_sections_column($ptype_sections_columns) {
  $ptype_sections_columns['menu_order'] = "Order";
  return $ptype_sections_columns;
}
add_action('manage_edit-ptype_sections_columns', 'add_new_ptype_sections_column');

// Render the column values
function show_order_column_sections($name){
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
add_action('manage_ptype_sections_posts_custom_column','show_order_column_sections');

// Set the column to be sortable
function order_column_register_sortable_sections($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}
add_filter('manage_edit-ptype_sections_sortable_columns','order_column_register_sortable_sections');

function disable_new_posts() {
// Hide sidebar link
global $submenu;
unset($submenu['edit.php?post_type=ptype_sections'][10]);

// Hide link on listing page
if (isset($_GET['post_type']) && $_GET['post_type'] == 'ptype_sections') {
    echo '<style type="text/css">
    #favorite-actions, .add-new-h2, .tablenav { display:none; }
    </style>';
}
}
add_action('admin_menu', 'disable_new_posts');
?>