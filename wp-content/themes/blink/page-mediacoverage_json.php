<?php 
/*
Template Name: Media Coverage JSON Template
*/
$page = (get_query_var('page')) ? get_query_var('page') : 1;
$posts_per_page = ($_GET['posts_per_page']) ? $_GET['posts_per_page'] : 17;


$section_query = new WP_Query('post_type=ptype_mediacoverages&orderby=menu_order&order=ASC&posts_per_page='.$posts_per_page.'&paged='.$page); 
$results = array();
$each = array();

   	while ($section_query->have_posts()) : $section_query->the_post();    
	    $ptype_mediacoverages_link = get_post_meta($post->ID, 'ptype_mediacoverages_link', true);      
	    $ptype_mediacoverages_date = get_post_meta($post->ID, 'ptype_mediacoverages_date', true);      
	    $ptype_mediacoverages_title = get_the_title();        
	    $ptype_mediacoverages_summary = get_post_meta($post->ID, 'ptype_mediacoverages_summary', true);        

	    $each['date'] = $ptype_mediacoverages_date;
	    $each['title'] = stripslashes($ptype_mediacoverages_title);
	    $each['content'] = stripslashes($ptype_mediacoverages_summary);
	    $each['link'] = $ptype_mediacoverages_link;

	    array_push($results, $each);

	endwhile;

	echo json_encode($results);

	exit();
?>