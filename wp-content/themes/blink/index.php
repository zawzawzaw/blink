<?php get_header(); ?>

	<?php get_template_part( 'content', 'slider' ); ?>

	<?php $section_query = new WP_Query('post_type=ptype_sections&orderby=menu_order&order=ASC&posts_per_page=-1'); ?>												
	 <?php while ($section_query->have_posts()) : $section_query->the_post(); 							
		
			$heading_text_1 = get_post_meta($post->ID, 'ptype_sections_heading_text_1', true);
			$heading_text_2 = get_post_meta($post->ID, 'ptype_sections_heading_text_2', true);
			$heading_text_3 = get_post_meta($post->ID, 'ptype_sections_heading_text_3', true);

			$content_1_heading_h6 = get_post_meta($post->ID, 'ptype_sections_content_1_heading_h6', true);			
			$content_1_heading_h2 = get_post_meta($post->ID, 'ptype_sections_content_1_heading_h2', true);			
			$content_1_paragraph = get_post_meta($post->ID, 'ptype_sections_content_1_paragraph', true);			
			$content_1_link_text = get_post_meta($post->ID, 'ptype_sections_content_1_link_text', true);			
			$content_1_link = get_post_meta($post->ID, 'ptype_sections_content_1_link', true);
			$content_1_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'ptype_sections_content_1_img', true), 'full');

			$content_2_heading_h6 = get_post_meta($post->ID, 'ptype_sections_content_2_heading_h6', true);			
			$content_2_heading_h2 = get_post_meta($post->ID, 'ptype_sections_content_2_heading_h2', true);			
			$content_2_paragraph = get_post_meta($post->ID, 'ptype_sections_content_2_paragraph', true);			
			$content_2_link_text = get_post_meta($post->ID, 'ptype_sections_content_2_link_text', true);			
			$content_2_link = get_post_meta($post->ID, 'ptype_sections_content_2_link', true);
			$content_2_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'ptype_sections_content_2_img', true), 'full');

			$content_3_heading_h6 = get_post_meta($post->ID, 'ptype_sections_content_3_heading_h6', true);			
			$content_3_heading_h2 = get_post_meta($post->ID, 'ptype_sections_content_3_heading_h2', true);			
			$content_3_paragraph = get_post_meta($post->ID, 'ptype_sections_content_3_paragraph', true);			
			$content_3_link_text = get_post_meta($post->ID, 'ptype_sections_content_3_link_text', true);			
			$content_3_link = get_post_meta($post->ID, 'ptype_sections_content_3_link', true);
			$content_3_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'ptype_sections_content_3_img', true), 'full');

			$content_4_heading_h6 = get_post_meta($post->ID, 'ptype_sections_content_4_heading_h6', true);			
			$content_4_heading_h2 = get_post_meta($post->ID, 'ptype_sections_content_4_heading_h2', true);			
			$content_4_paragraph = get_post_meta($post->ID, 'ptype_sections_content_4_paragraph', true);			
			$content_4_link_text = get_post_meta($post->ID, 'ptype_sections_content_4_link_text', true);			
			$content_4_link = get_post_meta($post->ID, 'ptype_sections_content_4_link', true);
			$content_4_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'ptype_sections_content_4_img', true), 'full');

			$content_5_heading_h6 = get_post_meta($post->ID, 'ptype_sections_content_5_heading_h6', true);			
			$content_5_heading_h2 = get_post_meta($post->ID, 'ptype_sections_content_5_heading_h2', true);			
			$content_5_paragraph = get_post_meta($post->ID, 'ptype_sections_content_5_paragraph', true);			
			$content_5_news_date = get_post_meta($post->ID, 'ptype_sections_content_5_news_date', true);			
			$content_5_news_title = get_post_meta($post->ID, 'ptype_sections_content_5_news_title', true);			
			$content_5_link_text = get_post_meta($post->ID, 'ptype_sections_content_5_link_text', true);			
			$content_5_link = get_post_meta($post->ID, 'ptype_sections_content_5_link', true);
			$content_5_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'ptype_sections_content_5_img', true), 'full');

			$content_6_heading_h6 = get_post_meta($post->ID, 'ptype_sections_content_6_heading_h6', true);			
			$content_6_heading_h2 = get_post_meta($post->ID, 'ptype_sections_content_6_heading_h2', true);			
			$content_6_paragraph = get_post_meta($post->ID, 'ptype_sections_content_6_paragraph', true);			
			$content_6_link_text = get_post_meta($post->ID, 'ptype_sections_content_6_link_text', true);			
			$content_6_link = get_post_meta($post->ID, 'ptype_sections_content_6_link', true);
			$content_6_img = wp_get_attachment_image_src(get_post_meta($post->ID, 'ptype_sections_content_6_img', true), 'full');
			
	?>
	<?php endwhile; ?>

	<div id="content-wrapper">

		<?php get_template_part( 'content', 'menu' ); ?>

		<div id="main-content" class="home">

			<div class="container">
				<div class="row">
					<div class="col-md-12">					
						<section id="heading">								
							<p><?php echo $heading_text_1; ?></p>
							<p><?php echo $heading_text_2; ?></p>
							<p><?php echo $heading_text_3; ?></p>
						</section>
					</div>
				</div>
			</div>
			<div class="each-row">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							
							<section id="content-1" class="each-content">
								<div id="content-1-img" class="visible-xs visible-sm img-content img-right-content pull-right">									
									<img src="<?php echo $content_1_img[0]; ?>" class="img-responsive" alt="">
								</div>
								<div class="text-content text-left-content pull-left">
									<div class="v-align-table">
										<div class="v-align-table-cell">
											<h6><?php echo $content_1_heading_h6; ?></h6>
											<h2><?php echo $content_1_heading_h2; ?></h2>											
											<p><?php echo $content_1_paragraph; ?></p>											
											<a href="<?php echo $content_1_link; ?>" class="read-more cta"><?php echo $content_1_link_text; ?> <i class="fa fa-angle-right"></i></a>				
										</div>			
									</div>
								</div>
								<div id="content-1-img" class="hidden-xs hidden-sm img-content img-right-content pull-right">
									<img src="<?php echo $content_1_img[0]; ?>" class="img-responsive" alt="">
								</div>
							</section>

						</div>
					</div>
				</div>
			</div>
			<div class="each-row">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<section id="content-2" class="each-content">
								<div class="bg"></div>
								<div id="content-2-img" class="img-content img-left-content pull-left">
									<img src="<?php echo $content_2_img[0]; ?>" class="img-responsive" alt="">
								</div>
								<div class="text-content text-right-content pull-right">
									<div class="v-align-table">
										<div class="v-align-table-cell">
											<h6><?php echo $content_2_heading_h6; ?></h6>
											<h2 class="hidden-xs hidden-sm"><?php echo $content_2_heading_h2; ?></h2>												
											<h2 class="visible-xs visible-sm"><?php echo $content_2_heading_h2; ?></h2>												
											<p><?php echo $content_2_paragraph; ?></p>												
											<a href="<?php echo $content_2_link; ?>" class="read-more cta"><?php echo $content_2_link_text; ?> <i class="fa fa-angle-right"></i></a>				
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="each-row">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<section id="content-3" class="each-content">
								<div class="img-content visible-xs visible-sm img-right-content pull-right">
									<img src="<?php echo $content_3_img[0]; ?>" class="img-responsive" alt="">
								</div>			
								<div class="text-content text-left-content pull-left">
									<div class="v-align-table">
										<div class="v-align-table-cell">
											<h6><?php echo $content_3_heading_h6; ?></h6>
											<h2 class="hidden-xs hidden-sm"><?php echo $content_3_heading_h2; ?></h2>												
											<h2 class="visible-xs visible-sm"><?php echo $content_3_heading_h2; ?></h2>																																		
											<p><?php echo $content_3_paragraph; ?></p>
											<a href="<?php echo $content_3_link; ?>" class="read-more cta"><?php echo $content_3_link_text; ?> <i class="fa fa-angle-right"></i></a>				
										</div>
									</div>
								</div>
								<div class="img-content hidden-xs hidden-sm img-right-content pull-right">
									<img src="<?php echo $content_3_img[0]; ?>" class="img-responsive" alt="">
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="each-row">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<section id="content-4" class="each-content">
								<div class="img-content img-left-content pull-left">
									<img src="<?php echo $content_4_img[0]; ?>" class="img-responsive" alt="">
								</div>
								<div class="text-content text-right-content pull-right">
									<div class="v-align-table">
										<div class="v-align-table-cell">
											<h6><?php echo $content_4_heading_h6; ?></h6>
											<h2 class="visible-xs visible-sm"><?php echo $content_4_heading_h2; ?></h2>
											<h2 class="hidden-xs hidden-sm"><?php echo $content_4_heading_h2; ?></h2>											
											<p><?php echo $content_4_paragraph; ?></p>
											<a href="<?php echo $content_4_link; ?>" class="read-more cta"><?php echo $content_4_link_text; ?> <i class="fa fa-angle-right"></i></a>												
										</div>
									</div>
								</div>	
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="each-row">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<section id="content-5" class="each-content">
								<div class="img-content visible-xs visible-sm img-right-content pull-right">
									<img src="<?php echo $content_5_img[0]; ?>" class="img-responsive" alt="">
								</div>
								<div class="text-content text-left-content pull-left">
									<div class="v-align-table">
										<div class="v-align-table-cell">
											<h6><?php echo $content_5_heading_h6; ?></h6>
											<h2><?php echo $content_5_heading_h2; ?></h2>
											<div class="news">
												<span class="date"><?php echo $content_5_news_date; ?></span>
												<h4><?php echo $content_5_news_title; ?></h4>
												<p><?php echo $content_5_paragraph; ?></p>												
											</div>
											<a href="<?php echo $content_5_link; ?>" class="read-more cta"><?php echo $content_5_link_text; ?> <i class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="img-content hidden-xs hidden-sm img-right-content pull-right">
									<img src="<?php echo $content_5_img[0]; ?>" class="img-responsive" alt="">
								</div>
							</section>
						</div><!-- end col-md-12 -->
					</div><!-- end row -->
				</div>
			</div>
			<div class="each-row">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<section id="content-6" class="each-content">
									<div class="img-content img-left-content pull-left">
										<img src="<?php echo $content_6_img[0]; ?>" class="img-responsive" alt="">
									</div>
									<div class="text-content text-right-content pull-right">
										<div class="v-align-table">
											<div class="v-align-table-cell">
												<h6><?php echo $content_6_heading_h6; ?></h6>
												<h2 class="hidden-xs hidden-sm"><?php echo $content_6_heading_h2; ?></h2>											
												<h2 class="visible-xs visible-sm"><?php echo $content_6_heading_h2; ?></h2>												
												<p><?php echo $content_6_paragraph; ?></p>
												<a href="<?php echo $content_6_link; ?>" class="read-more cta"><?php echo $content_6_link_text; ?> <i class="fa fa-angle-right"></i></a>
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

	<?php get_template_part( 'content', 'mailing-list' ); ?>

<?php get_footer(); ?>