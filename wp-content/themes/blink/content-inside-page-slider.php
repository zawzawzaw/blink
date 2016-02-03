<div id="carousel" class="slider-wrapper carousel slide carousel-resize-on-mobile" data-ride="carousel">

	<!-- <div class="logo">bdg</div> -->

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
	<?php 
	if(have_posts()):
		while(have_posts()) : the_post();
			$bg_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); 
		endwhile; 
	endif; ?>
		<div class="item bg active" style="background-image:url('<?php echo $bg_image_url; ?>');">						
		</div>		
	</div>

	<a href="#content-wrapper" class="scroll-to-content">	
		<div class="arrow-big"></div>		
	</a>
</div>