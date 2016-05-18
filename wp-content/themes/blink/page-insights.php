<?php get_header(); ?>

	<?php get_template_part( 'content', 'inside-page-slider' ); ?>

	<?php 
		if(have_posts()):
			while(have_posts()) : the_post();
		
				$page_insights_section_1_heading_h3 = get_post_meta($post->ID, 'page_insights_section_1_heading_h3', true); 
				$page_insights_section_1_paragraph_1 = get_post_meta($post->ID, 'page_insights_section_1_paragraph_1', true); 
				$page_insights_section_1_paragraph_2 = get_post_meta($post->ID, 'page_insights_section_1_paragraph_2', true);

				$page_insights_section_2_1_heading_h2 = get_post_meta($post->ID, 'page_insights_section_2_1_heading_h2', true);
				$page_insights_section_2_1_paragraph = get_post_meta($post->ID, 'page_insights_section_2_1_paragraph', true);
				$page_insights_section_2_1_link_text = get_post_meta($post->ID, 'page_insights_section_2_1_link_text', true);
				$page_insights_section_2_1_link = get_post_meta($post->ID, 'page_insights_section_2_1_link', true);
				$page_insights_section_2_1_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'page_insights_section_2_1_img', true), 'full');

				$page_insights_section_2_2_heading_h2 = get_post_meta($post->ID, 'page_insights_section_2_2_heading_h2', true);
				$page_insights_section_2_2_paragraph = get_post_meta($post->ID, 'page_insights_section_2_2_paragraph', true);
				$page_insights_section_2_2_link_text = get_post_meta($post->ID, 'page_insights_section_2_2_link_text', true);
				$page_insights_section_2_2_link = get_post_meta($post->ID, 'page_insights_section_2_2_link', true);				
				$page_insights_section_2_2_imgs = rwmb_meta( 'page_insights_section_2_2_img', 'type=image' );

				$page_insights_section_2_3_heading_h2 = get_post_meta($post->ID, 'page_insights_section_2_3_heading_h2', true);
				$page_insights_section_2_3_paragraph = get_post_meta($post->ID, 'page_insights_section_2_3_paragraph', true);
				$page_insights_section_2_3_link_text = get_post_meta($post->ID, 'page_insights_section_2_3_link_text', true);
				$page_insights_section_2_3_link = get_post_meta($post->ID, 'page_insights_section_2_3_link', true);
				$page_insights_section_2_3_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'page_insights_section_2_3_img', true), 'full');

				$page_insights_section_4_heading_h3 = get_post_meta($post->ID, 'page_insights_section_4_heading_h3', true); 
				$page_insights_section_4_paragraph = get_post_meta($post->ID, 'page_insights_section_4_paragraph', true);
	
			endwhile;
		endif;
	?>

	<div id="content-wrapper">

		<?php get_template_part( 'content', 'menu' ); ?>

		<div id="main-content" class="clients">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<div class="content-1">
							<div class="text-content">
								<h3><?php echo $page_insights_section_1_heading_h3; ?></h3>
								<p><?php echo $page_insights_section_1_paragraph_1; ?></p>
								<p><?php echo $page_insights_section_1_paragraph_2; ?></p>	
							</div>
						</div>

						<div class="content-2">
							<div class="each-row">								
								<section id="content-1" class="each-content">	
									<div id="content-1-img" class="visible-xs visible-sm img-content img-right-content">
										<img src="<?php echo $page_insights_section_2_1_img[0]; ?>" class="img-responsive" alt="">
									</div>								
									<div class="text-content text-left-content pull-left">
		  								<div class="v-align-table">
											<div class="v-align-table-cell">
												<h2><?php echo $page_insights_section_2_1_heading_h2; ?></h2>
												<p class="visible-xs visible-sm"><?php echo $page_insights_section_2_1_paragraph; ?></p>
												<p class="hidden-xs hidden-sm"><?php echo $page_insights_section_2_1_paragraph; ?></p>
											</div>			
										</div>
									</div>									
									<div id="content-1-img" class="hidden-xs hidden-sm img-content img-right-content pull-right">
										<img src="<?php echo $page_insights_section_2_1_img[0]; ?>" class="img-responsive" alt="">
				        			</div>
									<div class="clear"></div>
								</section>
							</div>
							<div class="each-row">								
								<section id="content-3" class="each-content">
									<div class="img-content img-left-content pull-left">
										<div id="insights-carousel" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner" role="listbox">
												<?php
								                  $i = 0;
								                  foreach ( $page_insights_section_2_2_imgs as $page_insights_section_2_2_img ):			                  	
								                ?>
													<div class="item <?php echo ($i==0) ? 'active' : ''; ?>">
														<img src="<?php echo $page_insights_section_2_2_img['full_url']; ?>" class="img-responsive" alt="">
													</div>
								            	<?php
								                    $i++;
								                  endforeach;
								                ?>												
											</div>
											<!-- Indicators -->
											<?php if(count($page_insights_section_2_2_imgs) > 1): ?>
										  	<ol class="carousel-indicators">
										  		<?php
								                  $i = 0;
								                  foreach ( $page_insights_section_2_2_imgs as $page_insights_section_2_2_img ):			                  	
								                ?>
											    	<li data-target="#insights-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0) ? 'active' : ''; ?>"></li>
											    <?php
								                    $i++;
								                  endforeach;
								                ?>											    
										  	</ol>
										  	<?php endif; ?>
										</div>
									</div>											
									<div class="text-content text-right-content pull-right">
		  								<div class="v-align-table">
											<div class="v-align-table-cell">															
												<h2><?php echo $page_insights_section_2_2_heading_h2; ?></h2>
												<p><?php echo $page_insights_section_2_2_paragraph; ?></p>
												<a href="<?php echo $page_insights_section_2_2_link; ?>" target="_blank" class="read-more cta"><?php echo $page_insights_section_2_2_link_text; ?> <i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</div>									
									<div class="clear"></div>
								</section>										
							</div>
							<div class="each-row">
								<section id="content-2" class="each-content">
									<div class="bg"></div>									
									<div class="img-content visible-xs visible-sm img-right-content pull-right">
										<img src="<?php echo $page_insights_section_2_3_img[0]; ?>" class="img-responsive" alt="">
									</div>
									<div class="text-content text-right-content pull-left">
		  								<div class="v-align-table">
											<div class="v-align-table-cell">															
												<h2><?php echo $page_insights_section_2_3_heading_h2; ?></h2>							
												<p><?php echo $page_insights_section_2_3_paragraph; ?></p>
												<a href="<?php echo $page_insights_section_2_3_link; ?>" class="read-more cta"><?php echo $page_insights_section_2_3_link_text; ?> <i class="fa fa-angle-right"></i></a>				
											</div>
										</div>
									</div>									
									<div id="content-2-img" class="img-content hidden-xs hidden-sm img-right-content pull-right">
										<img src="<?php echo $page_insights_section_2_3_img[0]; ?>" class="img-responsive" alt="">
					        		</div>	
									<div class="clear"></div>								
								</section>
							</div>							
						</div>

						<div class="content-3">							
							<div id="news-carousel" class="carousel slide" data-ride="carousel">

								<?php if(have_posts()) : ?>
									<?php while(have_posts()) : the_post(); ?>
										<?php the_content(); ?>
									<?php endwhile; ?>
								<?php endif; ?>															

							</div>
						</div>

						<div class="content-4">
							<div class="each-row">								
								<section id="content-1" class="each-content">
									<div class="text-content text-left-content pull-left">
										<div class="v-align-table">
											<div class="v-align-table-cell">
												<h2><?php echo $page_insights_section_4_heading_h3 ?></h2>
												<div class="seperator-line"></div>															
												<p class=""><?php echo $page_insights_section_4_paragraph; ?></p>
											</div>			
										</div>
									</div>									
								</section>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>

	</div> <!-- end content-wrapper -->

	<?php get_template_part( 'content', 'mailing-list' ); ?>

<?php get_footer(); ?>