<?php get_header(); ?>

	<?php 
		if(have_posts()):
			while(have_posts()) : the_post();
		
				$page_profile_about_heading_H5 = get_post_meta($post->ID, 'page_profile_about_heading_H5', true); 
				$page_profile_about_paragraph_1 = get_post_meta($post->ID, 'page_profile_about_paragraph_1', true); 
				$page_profile_about_paragraph_2 = get_post_meta($post->ID, 'page_profile_about_paragraph_2', true);

				$page_profile_how_we_work_heading_H5 = get_post_meta($post->ID, 'page_profile_how_we_work_heading_H5', true); 
				$page_profile_how_we_work_paragraph_1 = get_post_meta($post->ID, 'page_profile_how_we_work_paragraph_1', true); 
				$page_profile_how_we_work_paragraph_2 = get_post_meta($post->ID, 'page_profile_how_we_work_paragraph_2', true);  
	
			endwhile;
		endif;
	?>

	<div id="content-wrapper">

		<?php get_template_part( 'content', 'menu' ); ?>

		<div id="main-content" class="profile">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<div class="content-1">
							<div class="text-content">

								<h3><?php echo $page_profile_about_heading_H5; ?></h3>
								<p><?php echo $page_profile_about_paragraph_1; ?></p>
								<p><?php echo $page_profile_about_paragraph_2; ?></p>
												
							</div>
						</div>

					</div>
				</div>
			</div>
			
			<div class="content-2">		
				<div class="container">
					<div class="row">
						<div class="col-md-12">

								<div class="text-content">

									<?php if(have_posts()) : ?>
									<?php while(have_posts()) : the_post(); ?>
										<?php the_content(); ?>
									<?php endwhile; ?>
									<?php endif; ?>	
																		
								</div>							

						</div>
					</div>
				</div>
			</div>			
						
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="content-3">
							<div class="text-content">							

								<h3><?php echo $page_profile_how_we_work_heading_H5; ?></h3>
								<p><?php echo $page_profile_how_we_work_paragraph_1; ?></p>
								<p><?php echo $page_profile_how_we_work_paragraph_2; ?></p>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>						

		</div>

	</div> <!-- end content-wrapper -->

	<?php get_template_part( 'content', 'mailing-list' ); ?>

<?php get_footer(); ?>