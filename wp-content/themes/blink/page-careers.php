<?php get_header(); ?>

	<?php get_template_part( 'content', 'inside-page-slider' ); ?>

	<?php 
		if(have_posts()):
			while(have_posts()) : the_post();
				
				$page_careers_section_1_imgs = rwmb_meta( 'page_careers_section_1_img', 'type=image' );
				$page_careers_section_1_heading_h3 = get_post_meta($post->ID, 'page_careers_section_1_heading_h3', true); 
				$page_careers_section_1_paragraph = get_post_meta($post->ID, 'page_careers_section_1_paragraph', true); 

				$page_careers_section_2_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'page_careers_section_2_img', true), 'full');
				$page_careers_section_2_heading_h3 = get_post_meta($post->ID, 'page_careers_section_2_heading_h3', true); 
				$page_careers_section_2_heading_h5 = get_post_meta($post->ID, 'page_careers_section_2_heading_h5', true); 

				$page_careers_section_3_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'page_careers_section_3_img', true), 'full');
				$page_careers_section_3_heading_h3 = get_post_meta($post->ID, 'page_careers_section_3_heading_h3', true); 
				$page_careers_section_3_paragraph = get_post_meta($post->ID, 'page_careers_section_3_paragraph', true); 

				$page_careers_section_4_heading_h3 = get_post_meta($post->ID, 'page_careers_section_4_heading_h3', true); 
				$page_careers_section_4_paragraph = get_post_meta($post->ID, 'page_careers_section_4_paragraph', true); 

				$page_careers_section_5_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'page_careers_section_5_img', true), 'full');
				$page_careers_section_5_heading_h3 = get_post_meta($post->ID, 'page_careers_section_5_heading_h3', true); 
				$page_careers_section_5_paragraph = get_post_meta($post->ID, 'page_careers_section_5_paragraph', true); 

				$page_careers_section_6_heading_h3 = get_post_meta($post->ID, 'page_careers_section_6_heading_h3', true); 
				$page_careers_section_6_paragraph = get_post_meta($post->ID, 'page_careers_section_6_paragraph', true); 
				$page_careers_section_6_circle_1 = get_post_meta($post->ID, 'page_careers_section_6_circle_1', true); 
				$page_careers_section_6_circle_2 = get_post_meta($post->ID, 'page_careers_section_6_circle_2', true); 
				$page_careers_section_6_circle_3 = get_post_meta($post->ID, 'page_careers_section_6_circle_3', true); 
				$page_careers_section_6_circle_4 = get_post_meta($post->ID, 'page_careers_section_6_circle_4', true); 
				$page_careers_section_6_circle_5 = get_post_meta($post->ID, 'page_careers_section_6_circle_5', true); 
				$page_careers_section_6_circle_caption = get_post_meta($post->ID, 'page_careers_section_6_circle_caption', true);
	
			endwhile;
		endif;
	?>

	<div id="content-wrapper">

		<?php get_template_part( 'content', 'menu' ); ?>

		<div id="main-content" class="careers">

			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="content-1">
							<div id="small-carousel" class="carousel slide" data-ride="carousel">

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<?php
					                  $i = 0;
					                  foreach ( $page_careers_section_1_imgs as $page_careers_section_1_img ):			                  	
					                ?>
										<div class="item <?php echo ($i==0) ? 'active' : ''; ?>">
											<img src="<?php echo $page_careers_section_1_img['full_url']; ?>" class="img-responsive" alt="">
										</div>
					            	<?php
					                    $i++;
					                  endforeach;
					                ?>						
								</div>

								<!-- Indicators -->
								<?php if(count($page_careers_section_1_imgs) > 1): ?>
							  	<ol class="carousel-indicators">
							  		<?php
					                  $i = 0;
					                  foreach ( $page_careers_section_1_imgs as $page_careers_section_1_img ):			                  	
					                ?>
								    	<li data-target="#small-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0) ? 'active' : ''; ?>"></li>
								    <?php
					                    $i++;
					                  endforeach;
					                ?>											    
							  	</ol>
							  	<?php endif; ?>

							</div>
						</div>

						<div class="content-2">
							<div class="text-content">
								<h3><?php echo $page_careers_section_1_heading_h3; ?></h3>								
								<p><?php echo $page_careers_section_1_paragraph; ?></p>							
							</div>
							<div class="img-content">
								<img src="<?php echo $page_careers_section_2_img[0]; ?>" class="img-responsive" alt="">
								<div class="img-caption">
									<h3><?php echo $page_careers_section_2_heading_h3; ?></h3>
									<h5><?php echo $page_careers_section_2_heading_h5; ?></h5>
								</div>
							</div>
						</div>

						<div class="content-extra">
							<div class="img-content">
								<img src="<?php echo $page_careers_section_3_img[0]; ?>" class="img-responsive" alt="">
							</div>
							<div class="text-content">
								<h3 class="hidden-xs hidden-sm"><?php echo $page_careers_section_3_heading_h3; ?></h3>	
								<h3 class="visible-xs visible-sm"><?php echo $page_careers_section_3_heading_h3; ?></h3>	
								<p><?php echo $page_careers_section_3_paragraph; ?></p>
							</div>							
						</div>

						<div class="content-3">
							<div class="text-content">
								<h3><?php echo $page_careers_section_4_heading_h3; ?></h3>
								<?php echo $page_careers_section_4_paragraph; ?>								
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="content-4">		
				<div class="container">
					<div class="row">
						<div class="col-md-12">

								<div class="img-content">
									<img src="<?php echo $page_careers_section_5_img[0]; ?>" alt="" class="img-responsive">
								</div>

								<div class="text-content">
									<h2><?php echo $page_careers_section_5_heading_h3; ?></h2>
									<?php echo $page_careers_section_5_paragraph; ?>									
								</div>							

						</div>
					</div>
				</div>
			</div>	

			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="content-5">
							<div class="text-content">								
								<h1><?php echo $page_careers_section_6_heading_h3; ?></h1>
								<p><?php echo $page_careers_section_6_paragraph; ?></p>
							</div>
							<div class="img-content">
								<div class="circle capabilities"><div class="v-align-table"><div class="v-align-table-cell"><?php echo $page_careers_section_6_circle_1; ?></div></div></div>
								<div class="circle opportunities"><div class="v-align-table"><div class="v-align-table-cell"><?php echo $page_careers_section_6_circle_2; ?></div></div></div>
								<div class="circle relationships"><div class="v-align-table"><div class="v-align-table-cell"><?php echo $page_careers_section_6_circle_3; ?></div></div></div>
								<div class="circle management"><div class="v-align-table"><div class="v-align-table-cell"><?php echo $page_careers_section_6_circle_4; ?></div></div></div>
								<div class="circle leadership"><div class="v-align-table"><div class="v-align-table-cell"><?php echo $page_careers_section_6_circle_5; ?></div></div></div>

								<h2><?php echo $page_careers_section_6_circle_caption; ?></h2>
							</div>
						</div>
						
					</div>
				</div>
			</div>		

		</div>

	</div> <!-- end content-wrapper -->

	<?php get_template_part( 'content', 'mailing-list' ); ?>

<?php get_footer(); ?>