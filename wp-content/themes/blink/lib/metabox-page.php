<?php
// MetaBox
add_action( 'admin_init', 'page_register_meta_box' );
function page_register_meta_box()
{

	// Catching post ID
	if (isset($_GET['post'])) { $post_function_id = $_GET['post']; }
	elseif (isset($_POST['post_ID'])) { $post_function_id = $_POST['post_ID']; }
	else { $post_function_id = false; }

	//Catching post type
	if (isset($_GET['post_type'])) { $post_function_type = $_GET['post_type']; }
	elseif (isset($_POST['post_type'])) { $post_function_type = $_POST['post_type']; }
	else { $post_function_type = false; }

	// Metaboxes
	$meta_box = array();

	// profile page specific custom fields
	if ($post_function_id == '7') {

		// Check if plugin is activated or included in theme
	    if ( !class_exists( 'RW_Meta_Box' ) )
	    return;
	    $prefix = 'page_profile_';
	    $meta_box = array(
				'id' => 'profile-section-settings',
				'title' => 'About Section',
				'pages' => array( 'page' ),
				'context' => 'normal',
				'priority' => 'high',
				'fields' => array(
						array(
							'name' => 'Heading H3',
							'desc' => '',
							'id' => $prefix . 'about_heading_H5',
							'type' => 'text'
						),
						array(
							'name' => 'Paragraph 1',
							'desc' => '',
							'id' => $prefix . 'about_paragraph_1',
							'type' => 'textarea'
						),
						array(
							'name' => 'Paragraph 2',
							'desc' => '',
							'id' => $prefix . 'about_paragraph_2',
							'type' => 'textarea'
						)																		
							
					 )
				);
	    new RW_Meta_Box( $meta_box );

		$meta_box_2 = array(
			'id' => 'profile-section-settings-2',
			'title' => "How We Work Section",
			'pages' => array( 'page' ),
			'context' => 'normal',
			'priority' => 'high',
			'fields' => array(
				array(
					'name' => 'Heading H3',
					'desc' => '',
					'id' => $prefix . 'how_we_work_heading_H5',
					'type' => 'text'
				),
				array(
					'name' => 'Paragraph 1',
					'desc' => '',
					'id' => $prefix . 'how_we_work_paragraph_1',
					'type' => 'textarea'
				),
				array(
					'name' => 'Paragraph 2',
					'desc' => '',
					'id' => $prefix . 'how_we_work_paragraph_2',
					'type' => 'textarea'
				)
		 	)
		);
		new RW_Meta_Box( $meta_box_2 ); 

	}

	// portfolio page specific custom fields
	if ($post_function_id == '9') {

		// Check if plugin is activated or included in theme
	    if ( !class_exists( 'RW_Meta_Box' ) )
	    return;
	    $prefix = 'page_portfolio_';
	    $meta_box = array(
				'id' => 'portfolio-section-settings',
				'title' => 'Our Portfolio Section',
				'pages' => array( 'page' ),
				'context' => 'normal',
				'priority' => 'high',
				'fields' => array(
						array(
							'name' => 'Heading H3',
							'desc' => '',
							'id' => $prefix . 'heading_H5',
							'type' => 'text'
						),
						array(
							'name' => 'Paragraph 1',
							'desc' => '',
							'id' => $prefix . 'paragraph_1',
							'type' => 'textarea'
						),
						array(
							'name' => 'Paragraph 2',
							'desc' => '',
							'id' => $prefix . 'paragraph_2',
							'type' => 'textarea'
						),
						array(
							'name' => 'Paragraph 3',
							'desc' => '',
							'id' => $prefix . 'paragraph_3',
							'type' => 'textarea'
						),
						array(
							'name' => 'Paragraph 4',
							'desc' => '',
							'id' => $prefix . 'paragraph_4',
							'type' => 'textarea'
						)																			
					)
				);
	    new RW_Meta_Box( $meta_box );

	}

	// insights page specific custom fields
	if ($post_function_id == '11') {

		// Check if plugin is activated or included in theme
	    if ( !class_exists( 'RW_Meta_Box' ) )
	    return;
	    $prefix = 'page_insights_';
	    $meta_box = array(
				'id' => 'insights-section-settings',
				'title' => 'Insights Page Section',
				'pages' => array( 'page' ),
				'context' => 'normal',
				'priority' => 'high',
				'fields' => array(
						array(
							'name' => 'Section 1 Heading H3',
							'desc' => '',
							'id' => $prefix . 'section_1_heading_h3',
							'type' => 'text'
						),
						array(
							'name' => 'Section 1 Paragraph 1',
							'desc' => '',
							'id' => $prefix . 'section_1_paragraph_1',
							'type' => 'textarea'
						),
						array(
							'name' => 'Section 1 Paragraph 2',
							'desc' => '',
							'id' => $prefix . 'section_1_paragraph_2',
							'type' => 'textarea'
						),
						array(
							'name' => 'Section 2-1 Heading H2',
							'desc' => '',
							'id' => $prefix . 'section_2_1_heading_h2',
							'type' => 'text'
						),
						array(
							'name' => 'Section 2-1 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_2_1_paragraph',
							'type' => 'textarea'
						),
						array(
							'name' => 'Section 2-1 Link Text',
							'desc' => '',
							'id' => $prefix . 'section_2_1_link_text',
							'type' => 'text'
						),
						array(
							'name' => 'Section 2-1 Link',
							'desc' => '',
							'id' => $prefix . 'section_2_1_link',
							'type' => 'text'
						),
						array(
							'name' => 'Section 2-1 Image',
							'desc' => '',
							'id' => $prefix . 'section_2_1_img',
							'type' => 'image_advanced'
						),
						array(
							'name' => 'Section 2-2 Heading H2',
							'desc' => '',
							'id' => $prefix . 'section_2_2_heading_h2',
							'type' => 'text'
						),
						array(
							'name' => 'Section 2-2 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_2_2_paragraph',
							'type' => 'textarea'
						),
						array(
							'name' => 'Section 2-2 Link Text',
							'desc' => '',
							'id' => $prefix . 'section_2_2_link_text',
							'type' => 'text'
						),
						array(
							'name' => 'Section 2-2 Link',
							'desc' => '',
							'id' => $prefix . 'section_2_2_link',
							'type' => 'text'
						),
						array(
							'name' => 'Section 2-2 Image',
							'desc' => '',
							'id' => $prefix . 'section_2_2_img',
							'type' => 'image_advanced'
						),
						array(
							'name' => 'Section 2-3 Heading H2',
							'desc' => '',
							'id' => $prefix . 'section_2_3_heading_h2',
							'type' => 'text'
						),
						array(
							'name' => 'Section 2-3 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_2_3_paragraph',
							'type' => 'textarea'
						),
						array(
							'name' => 'Section 2-3 Link Text',
							'desc' => '',
							'id' => $prefix . 'section_2_3_link_text',
							'type' => 'text'
						),
						array(
							'name' => 'Section 2-3 Link',
							'desc' => '',
							'id' => $prefix . 'section_2_3_link',
							'type' => 'text'
						),
						array(
							'name' => 'Section 2-3 Image',
							'desc' => '',
							'id' => $prefix . 'section_2_3_img',
							'type' => 'image_advanced'
						),
						array(
							'name' => 'Section 4 Heading H3',
							'desc' => '',
							'id' => $prefix . 'section_4_heading_h3',
							'type' => 'text'
						),
						array(
							'name' => 'Section 4 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_4_paragraph',
							'type' => 'textarea'
						),															
					)
				);
	    new RW_Meta_Box( $meta_box );

	}

	// careers page specific custom fields
	if ($post_function_id == '13') {

		// Check if plugin is activated or included in theme
	    if ( !class_exists( 'RW_Meta_Box' ) )
	    return;
	    $prefix = 'page_careers_';
	    $meta_box = array(
				'id' => 'careers-section-settings',
				'title' => 'Careers Page Section',
				'pages' => array( 'page' ),
				'context' => 'normal',
				'priority' => 'high',
				'fields' => array(
						array(
							'name' => 'Section 1 Image',
							'desc' => '',
							'id' => $prefix . 'section_1_img',
							'type' => 'image_advanced'
						),

						array(
							'name' => 'Section 1 Heading H3',
							'desc' => '',
							'id' => $prefix . 'section_1_heading_h3',
							'type' => 'text'
						),

						array(
							'name' => 'Section 1 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_1_paragraph',
							'type' => 'textarea'
						),

						array(
							'name' => 'Section 2 Image',
							'desc' => '',
							'id' => $prefix . 'section_2_img',
							'type' => 'image_advanced'
						),

						array(
							'name' => 'Section 2 Heading H3',
							'desc' => '',
							'id' => $prefix . 'section_2_heading_h3',
							'type' => 'text'
						),

						array(
							'name' => 'Section 2 Heading H5',
							'desc' => '',
							'id' => $prefix . 'section_2_heading_h5',
							'type' => 'text'
						),

						array(
							'name' => 'Section 3 Image',
							'desc' => '',
							'id' => $prefix . 'section_3_img',
							'type' => 'image_advanced'
						),

						array(
							'name' => 'Section 3 Heading H3',
							'desc' => '',
							'id' => $prefix . 'section_3_heading_h3',
							'type' => 'text'
						),

						array(
							'name' => 'Section 3 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_3_paragraph',
							'type' => 'text'
						),

						array(
							'name' => 'Section 4 Heading H3',
							'desc' => '',
							'id' => $prefix . 'section_4_heading_h3',
							'type' => 'text'
						),

						array(
							'name' => 'Section 4 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_4_paragraph',
							'type' => 'wysiwyg'
						),

						array(
							'name' => 'Section 5 Image',
							'desc' => '',
							'id' => $prefix . 'section_5_img',
							'type' => 'image_advanced'
						),

						array(
							'name' => 'Section 5 Heading H3',
							'desc' => '',
							'id' => $prefix . 'section_5_heading_h3',
							'type' => 'text'
						),

						array(
							'name' => 'Section 5 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_5_paragraph',
							'type' => 'wysiwyg'
						),

						array(
							'name' => 'Section 6 Heading H3',
							'desc' => '',
							'id' => $prefix . 'section_6_heading_h3',
							'type' => 'text'
						),

						array(
							'name' => 'Section 6 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_6_paragraph',
							'type' => 'text'
						),

						array(
							'name' => 'Section 6 Circle 1',
							'desc' => '',
							'id' => $prefix . 'section_6_circle_1',
							'type' => 'text'
						),

						array(
							'name' => 'Section 6 Circle 2',
							'desc' => '',
							'id' => $prefix . 'section_6_circle_2',
							'type' => 'text'
						),

						array(
							'name' => 'Section 6 Circle 3',
							'desc' => '',
							'id' => $prefix . 'section_6_circle_3',
							'type' => 'text'
						),

						array(
							'name' => 'Section 6 Circle 4',
							'desc' => '',
							'id' => $prefix . 'section_6_circle_4',
							'type' => 'text'
						),

						array(
							'name' => 'Section 6 Circle 5',
							'desc' => '',
							'id' => $prefix . 'section_6_circle_5',
							'type' => 'text'
						),

						array(
							'name' => 'Section 6 Circle Caption',
							'desc' => '',
							'id' => $prefix . 'section_6_circle_caption',
							'type' => 'text'
						)
					)
				);
	    new RW_Meta_Box( $meta_box );

	}

	// news page specific custom fields
	if ($post_function_id == '15') {

		// Check if plugin is activated or included in theme
	    if ( !class_exists( 'RW_Meta_Box' ) )
	    return;
	    $prefix = 'page_news_';
	    $meta_box = array(
				'id' => 'news-section-settings',
				'title' => 'News Page Section',
				'pages' => array( 'page' ),
				'context' => 'normal',
				'priority' => 'high',
				'fields' => array(
						array(
							'name' => 'Section 1 Image',
							'desc' => '',
							'id' => $prefix . 'section_1_img',
							'type' => 'image_advanced'
						),

						array(
							'name' => 'Section 1 Heading H3',
							'desc' => '',
							'id' => $prefix . 'section_1_heading_h3',
							'type' => 'text'
						),

						array(
							'name' => 'Section 1 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_1_paragraph',
							'type' => 'wysiwyg'
						),

						array(
							'name' => 'Section 1 Link Text',
							'desc' => '',
							'id' => $prefix . 'section_1_link_text',
							'type' => 'text'
						),

						array(
							'name' => 'Section 1 Link',
							'desc' => '',
							'id' => $prefix . 'section_1_link',
							'type' => 'text'
						)
					)
				);
	    new RW_Meta_Box( $meta_box );

	}

	// contact page specific custom fields
	if ($post_function_id == '17') {

		// Check if plugin is activated or included in theme
	    if ( !class_exists( 'RW_Meta_Box' ) )
	    return;
	    $prefix = 'page_contact_';
	    $meta_box = array(
				'id' => 'contact-section-settings',
				'title' => 'Contact Page Section',
				'pages' => array( 'page' ),
				'context' => 'normal',
				'priority' => 'high',
				'fields' => array(
						array(
							'name' => 'Section 1 Title',
							'desc' => '',
							'id' => $prefix . 'section_1_title',
							'type' => 'text'
						),

						array(
							'name' => 'Section 1 Info 1',
							'desc' => '',
							'id' => $prefix . 'section_1_info_1',
							'type' => 'text'
						),

						array(
							'name' => 'Section 1 Info 1 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_1_info_1_paragraph',
							'type' => 'wysiwyg'
						),

						array(
							'name' => 'Section 1 Info 2',
							'desc' => '',
							'id' => $prefix . 'section_1_info_2',
							'type' => 'text'
						),

						array(
							'name' => 'Section 1 Info 2 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_1_info_2_paragraph',
							'type' => 'wysiwyg'
						),

						array(
							'name' => 'Section 1 Info 3',
							'desc' => '',
							'id' => $prefix . 'section_1_info_3',
							'type' => 'text'
						),

						array(
							'name' => 'Section 1 Info 3 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_1_info_3_paragraph',
							'type' => 'wysiwyg'
						),

						array(
							'name' => 'Section 1 Info 4',
							'desc' => '',
							'id' => $prefix . 'section_1_info_4',
							'type' => 'text'
						),

						array(
							'name' => 'Section 1 Info 4 Paragraph',
							'desc' => '',
							'id' => $prefix . 'section_1_info_4_paragraph',
							'type' => 'wysiwyg'
						),

						array(
							'name' => 'Section 2 Title',
							'desc' => '',
							'id' => $prefix . 'section_2_title',
							'type' => 'text'
						),
					)
				);
	    new RW_Meta_Box( $meta_box );

	}
}
?>