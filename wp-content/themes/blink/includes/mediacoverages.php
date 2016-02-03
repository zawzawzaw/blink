<div class="tab-pane active" id="mediacoverage">
	<h3>Media Coverage</h3>

	<div class="lists">
		<?php 
		  $section_query = new WP_Query('post_type=ptype_mediacoverages&orderby=menu_order&order=ASC&posts_per_page=-1'); 
		?>
		<?php
		   while ($section_query->have_posts()) : $section_query->the_post();    
		    $ptype_mediacoverages_link = get_post_meta($post->ID, 'ptype_mediacoverages_link', true);      
		    $ptype_mediacoverages_date = get_post_meta($post->ID, 'ptype_mediacoverages_date', true);      
		    $ptype_mediacoverages_title = get_the_title();        
		    $ptype_mediacoverages_summary = get_post_meta($post->ID, 'ptype_mediacoverages_summary', true);        
		  ?> 
		<div class="list-item">
			<div class="col date"><a target="_blank" href="<?php echo $ptype_mediacoverages_link ?>"><span><?php echo $ptype_mediacoverages_date; ?></span></a></div>
			<div class="col news-title"><a target="_blank" href="<?php echo $ptype_mediacoverages_link ?>"><h6><?php echo $ptype_mediacoverages_title; ?></h6></a></div>
			<div class="col news-content"><a target="_blank" href="<?php echo $ptype_mediacoverages_link ?>"><p><?php echo $ptype_mediacoverages_summary; ?></p></a></div>
		</div>	
		<?php endwhile;  ?>				    				
	</div>

	<a href="#" class="show-more"><i class="fa fa-plus"></i> Show More</a>

</div>