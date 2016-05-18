<div id="carousel" class="slider-wrapper carousel carousel-fade slide" data-ride="carousel">

	<!-- Wrapper for slides -->
	<div class="home-carousel carousel-inner" role="listbox">

		<?php
		$args = array(
			'post_type' => 'homeslider',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'orderby' => 'date', 
			'order' => 'ASC'								
		);
		$query1 = new WP_Query( $args );
		$i = 1;		

		while ( $query1->have_posts() ) : $query1->the_post(); ?>
				<?php if(has_post_thumbnail()) : ?>
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<div class="item bg <?php echo "bg".$i; ?> <?php echo ($i==1) ? 'active' : ''; ?>" data-link-to="<?php echo get_post(get_post_thumbnail_id())->post_title; ?>" style="background-image:url('<?php echo $url; ?>');">			
						<div class="carousel-caption">
							<div class="caption-text">								
								<h1><?php echo html_entity_decode(get_the_content()); ?></h1>
							</div>				
						</div>						
					</div>
					<?php $i++; ?>		
				<?php endif; ?>	
		<?php endwhile; ?>				
				
	</div>

	<a href="#content-wrapper" class="scroll-to-content">	
		<div class="arrow-big"></div>
	</a>

	<!-- Indicators -->
  	<ol class="carousel-indicators">
	    <?php 
			if($query1->found_posts > 1):
		  		$i = 0;
				if ( $query1->have_posts() ) while ( $query1->have_posts() ) : $query1->the_post(); 
						if(has_post_thumbnail()) : ?>
							<li data-target="#carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0) ? 'active' : ''; ?>"></li>
							<?php $i++; 
						endif; 
				endwhile; 
			endif; 
		?>	    
  	</ol>
</div>