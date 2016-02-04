<div class="tab-pane active" id="pressreleases">
	<h3>Press Releases</h3>

	<div class="lists">
		<?php 
		  $page = (get_query_var('page')) ? get_query_var('page') : 1;
		  $section_query = new WP_Query('post_type=ptype_pressreleases&orderby=menu_order&order=ASC&posts_per_page=-17&paged='.$page); 
		?>
		<?php
		   while ($section_query->have_posts()) : $section_query->the_post();    
		    $ptype_pressreleases_link = get_post_meta($post->ID, 'ptype_pressreleases_link', true);      
		    $ptype_pressreleases_date = get_post_meta($post->ID, 'ptype_pressreleases_date', true);      
		    $ptype_pressreleases_title = get_the_title();        		   
		  ?> 
		<div class="list-item">
			<div class="col date"><a target="_blank" href="<?php echo $ptype_pressreleases_link; ?>"><span><?php echo $ptype_pressreleases_date; ?></span></a></div>
			<div class="col news-content"><a target="_blank" href="<?php echo $ptype_pressreleases_link; ?>"><p><?php echo $ptype_pressreleases_title; ?></p></a></div>
		</div>	
		<?php endwhile;  ?>							
		
	</div>

	<a href="#" class="show-more"><i class="fa fa-plus"></i> Show More</a>
</div>