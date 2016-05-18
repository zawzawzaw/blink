<?php 
/*
Template Name: Press Release JSON Template
*/
$page = (get_query_var('page')) ? get_query_var('page') : 1;
$posts_per_page = ($_GET['posts_per_page']) ? $_GET['posts_per_page'] : 17;


$section_query = new WP_Query('post_type=ptype_pressreleases&orderby=menu_order&order=ASC&posts_per_page='.$posts_per_page.'&paged='.$page); 
$results = array();
$each = array();

   	while ($section_query->have_posts()) : $section_query->the_post();    
	    $ptype_pressreleases_link = get_post_meta($post->ID, 'ptype_pressreleases_link', true);      
	    $ptype_pressreleases_date = get_post_meta($post->ID, 'ptype_pressreleases_date', true);      
	    $ptype_pressreleases_title = get_the_title();        	    

	    $each['date'] = $ptype_pressreleases_date;
	    $each['title'] = html_entity_decode(stripslashes($ptype_pressreleases_title));
	    $each['link'] = $ptype_pressreleases_link;

	    array_push($results, $each);

	endwhile;

	echo json_encode($results);

	exit();
?>