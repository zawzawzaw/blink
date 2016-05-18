<div id="carousel" class="slider-wrapper carousel slide carousel-resize-on-mobile" data-ride="carousel">

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		
		<?php
		$i = 0;		

		if(have_posts()):
			while(have_posts()) : the_post();

				$project_name = strtolower(get_the_title());
				$project_name = str_replace(' ', '-', $project_name);				

				$ptype_portfolios_slider_images = rwmb_meta( 'ptype_portfolios_slider_image', 'type=image' );
              	$i = 0;
              	$a = $i + 1;
              	foreach ( $ptype_portfolios_slider_images as $ptype_portfolios_slider_image ):			                  	
            ?>
					<div class="item bg <?php echo 'project-'.$project_name.'-bg-'.$a; ?> <?php echo ($i==0) ? 'active' : ''; ?>" style="background-image:url('<?php echo $ptype_portfolios_slider_image['full_url']; ?>')!important;">			
						<div class="carousel-caption">
							<div class="caption-text">								
								<?php //echo $ptype_portfolios_slider_image['caption']; ?>
							</div>				
						</div>						
					</div>
        	<?php
                	$i++;
              	endforeach
            ?>	
			
		<?php endwhile;
		endif; ?>			
	</div>

	<a href="#content-wrapper" class="scroll-to-content <?php echo $project_name; ?>">	
		<div class="arrow-big"></div>
	</a>

	<!-- Indicators -->
	<?php if(count($ptype_portfolios_slider_images) > 1): ?>
  	<ol class="carousel-indicators">
  		<?php 
  		$i = 0;
            foreach ( $ptype_portfolios_slider_images as $ptype_portfolios_slider_image ):			                  	
  		?>
	    		<li data-target="#carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0) ? 'active' : ''; ?>"></li>
	    <?php 
	    		$i++;
            endforeach
	    ?>
  	</ol>
  	<?php endif; ?>

</div>