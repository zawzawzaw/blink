<?php get_header(); ?>	

	<?php get_template_part( 'content', 'project-slider' ); ?>

	<div id="content-wrapper">

		<?php get_template_part( 'content', 'menu' ); ?>

		<div id="main-content" class="project">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">	
						<?php 
							if(have_posts()):
								while(have_posts()) : the_post();
									
									$ptype_portfolios_photos = rwmb_meta( 'ptype_portfolios_photo', 'type=image' );
									$ptype_portfolios_title = get_post_meta($post->ID, 'ptype_portfolios_title', true); 
									$ptype_portfolios_location = get_post_meta($post->ID, 'ptype_portfolios_location', true); 
									$ptype_portfolios_scope = get_post_meta($post->ID, 'ptype_portfolios_scope', true);										
									$ptype_portfolios_no_of_keys = get_post_meta($post->ID, 'ptype_portfolios_no_of_keys', true);
									$ptype_portfolios_awards = get_post_meta($post->ID, 'ptype_portfolios_awards', true);	
									$ptype_portfolios_project_description = get_post_meta($post->ID, 'ptype_portfolios_project_description', true);	
						?>															
						<div class="content-1">						
							<div class="heading">
								<h5><?php echo (!empty($ptype_portfolios_title)) ? $ptype_portfolios_title : ''; ?></h5>
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="text-content">							
								<?php if(!empty($ptype_portfolios_project_description)): ?><p class="title"><?php echo $ptype_portfolios_project_description; ?></p><?php endif; ?>
							</div>

							<ul class="more-info">
								<?php if(!empty($ptype_portfolios_location)): ?><li><span>Location</span><p><?php echo $ptype_portfolios_location; ?></p></li><?php endif; ?>
								<?php if(!empty($ptype_portfolios_scope)): ?><li><span>Scope</span><p><?php echo $ptype_portfolios_scope; ?></p></li><?php endif; ?>								
								<?php if(!empty($ptype_portfolios_no_of_keys)): ?><li><span>No. of Keys</span><p><?php echo $ptype_portfolios_no_of_keys; ?></p></li><?php endif; ?>
								<?php if(!empty($ptype_portfolios_no_of_keys)): ?><li><span>Awards</span><?php echo $ptype_portfolios_awards; ?></li><?php endif; ?>
								<li>
									<span>Share</span>
									<ul class="social-media-sharing">
										<li><a href="javascript:void(0);" class="facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="javascript:void(0);" class="twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="javascript:void(0);" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</li>
							</ul>

							<div class="clear"></div>

						</div><!-- end content-1 -->

						<div class="content-2">
							<div class="img-content">
								<div class="grid-3">
									<div class="gutter-sizer-3"></div>								
									<div class="grid-sizer-3"></div>	
									<?php
					                  $i = 0;
					                  foreach ( $ptype_portfolios_photos as $ptype_portfolios_photo ):			                  	
					                ?>
											<div class="grid-item-3 <?php echo $ptype_portfolios_photo['caption']; ?>" data-number="<?php echo $ptype_portfolios_photo['description']; ?>"><img src="<?php echo $ptype_portfolios_photo['full_url']; ?>" alt=""></div>
					            	<?php
					                    $i++;
					                  endforeach
					                ?>									
									<!-- <div class="grid-item-3 grid-item-3--width3" data-number="3"><img src="images/content/projects/project-benxi-doubletree-by-hilton-1.jpg" class="img-responsive" alt=""></div>
									<div class="grid-item-3" data-number="4"><img src="images/content/projects/project-benxi-doubletree-by-hilton-2.jpg" class="img-responsive" alt=""></div>
									<div class="grid-item-3" data-number="5"><img src="images/content/projects/project-benxi-doubletree-by-hilton-3.jpg" class="img-responsive" alt=""></div>
									<div class="grid-item-3 grid-item-3--width3" data-number="6"><img src="images/content/projects/project-benxi-doubletree-by-hilton-4.jpg" class="img-responsive" alt=""></div> -->
								</div>																									  		 
							</div>
						</div><!-- end content-2-->

						<?php
								endwhile;
							endif;
						?>								

					</div><!-- end col-md-12 -->
				</div><!-- end row -->
			</div><!-- end container -->	

		</div>

	</div> <!-- end content-wrapper -->

	<?php get_template_part( 'content', 'mailing-list' ); ?>	

<?php get_footer(); ?>