<?php 
/*
Template Name: Media Coverage JSON Template
*/
$search = array();

$section_query = new WP_Query('post_type=ptype_mediacoverages&orderby=menu_order&order=ASC&posts_per_page=-1&paged=1'); 
$mediacoverages = array();
$each = array();

	while ($section_query->have_posts()) : $section_query->the_post();    
		$ptype_mediacoverages_link = get_post_meta($post->ID, 'ptype_mediacoverages_link', true);      
		$ptype_mediacoverages_date = get_post_meta($post->ID, 'ptype_mediacoverages_date', true);      
		$ptype_mediacoverages_title = get_the_title();        
		$ptype_mediacoverages_summary = get_post_meta($post->ID, 'ptype_mediacoverages_summary', true);        

		$each['date'] = $ptype_mediacoverages_date;
		$each['title'] = $ptype_mediacoverages_title;
		$each['content'] = $ptype_mediacoverages_summary;
		$each['link'] = $ptype_mediacoverages_link;

		array_push($mediacoverages, $each);
	endwhile;

$section_query = new WP_Query('post_type=ptype_pressreleases&orderby=menu_order&order=ASC&posts_per_page=-1&paged=1'); 
$pressreleases = array();
$each = array();

   	while ($section_query->have_posts()) : $section_query->the_post();    
	    $ptype_pressreleases_link = get_post_meta($post->ID, 'ptype_pressreleases_link', true);      
	    $ptype_pressreleases_date = get_post_meta($post->ID, 'ptype_pressreleases_date', true);      
	    $ptype_pressreleases_title = get_the_title();        	    

	    $each['date'] = $ptype_pressreleases_date;
	    $each['title'] = $ptype_pressreleases_title;
	    $each['link'] = $ptype_pressreleases_link;

	    array_push($pressreleases, $each);

	endwhile;

$section_query = new WP_Query('post_type=ptype_portfolios&orderby=menu_order&order=ASC&posts_per_page=-1&paged=1'); 
$portfolios = array();
$each = array();

   	while ($section_query->have_posts()) : $section_query->the_post();    
	    $terms = get_the_terms( $post->ID, 'portfolio_type' );   
		$location = get_post_meta($post->ID, 'ptype_portfolios_location', true);
		$scope = get_post_meta($post->ID, 'ptype_portfolios_scope', true);

		if ( $terms && ! is_wp_error( $terms ) ): 
			$portfolio_type = array();

			foreach ( $terms as $term ) {
			    $portfolio_type[] = $term->name;
			}
		                     
			$portfolio_types = join( " ", $portfolio_type );
		endif; 	    

		$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		$title = get_the_title();

	    $each['image'] = $img[0];
	    $each['location'] = $location;
	    $each['name'] = str_replace('<br>', ' ', $title);
	    $each['type'] = str_replace(',', '', $scope);
	    $each['url'] = get_permalink();

	    array_push($portfolios, $each);

	endwhile;


$search['news'] = $mediacoverages;
$search['news_pr'] = $pressreleases;
$search['portfolio'] = $portfolios;

echo json_encode($search); exit();
	
?>