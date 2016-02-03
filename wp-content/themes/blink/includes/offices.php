<?php 
  $section_query = new WP_Query('post_type=ptype_offices&orderby=menu_order&order=ASC&posts_per_page=-1'); 
?>
<?php $i = 1;
   while ($section_query->have_posts()) : $section_query->the_post();    
    $ptype_offices_title = get_the_title();        
    $ptype_offices_name_and_address = get_post_meta($post->ID, 'ptype_offices_name_and_address', true);              
    $ptype_offices_phone_no = get_post_meta($post->ID, 'ptype_offices_phone_no', true);        
  ?> 
	<div class="office-<?php echo $i; ?> each-office">
		<h6><?php echo $ptype_offices_title; ?></h6>
		<?php echo $ptype_offices_name_and_address; ?>
		<a href="tel:<?php echo $ptype_offices_phone_no; ?>"><?php echo $ptype_offices_phone_no; ?></a>
	</div>
<?php $i++; endwhile;  ?>