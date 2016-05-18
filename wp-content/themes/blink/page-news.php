<?php get_header(); ?>

	<?php get_template_part( 'content', 'inside-page-slider' ); ?>

	<?php 
		if(have_posts()):
			while(have_posts()) : the_post();
		
				$page_news_section_1_imgs = rwmb_meta( 'page_news_section_1_img', 'type=image' );
				$page_news_section_1_heading_h3 = get_post_meta($post->ID, 'page_news_section_1_heading_h3', true); 
				$page_news_section_1_paragraph = get_post_meta($post->ID, 'page_news_section_1_paragraph', true); 
				$page_news_section_1_link_text = get_post_meta($post->ID, 'page_news_section_1_link_text', true);
				$page_news_section_1_link = get_post_meta($post->ID, 'page_news_section_1_link', true);
	
			endwhile;
		endif;
	?>

	<div id="content-wrapper">

		<?php get_template_part( 'content', 'menu' ); ?>

		<div id="main-content" class="news">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<div class="content-1">
							<div class="img-content">								
								<div id="news-carousel" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner" role="listbox">
										<?php
						                  $i = 0;
						                  foreach ( $page_news_section_1_imgs as $page_news_section_1_img ):			                  	
						                ?>
											<div class="item <?php echo ($i==0) ? 'active' : ''; ?>">
												<img src="<?php echo $page_news_section_1_img['full_url']; ?>" class="img-responsive" alt="">
											</div>
						            	<?php
						                    $i++;
						                  endforeach;
						                ?>											
									</div>
									<!-- Indicators -->
									<!-- Indicators -->
									<?php if(count($page_news_section_1_imgs) > 1): ?>
								  	<ol class="carousel-indicators">
								  		<?php
						                  $i = 0;
						                  foreach ( $page_news_section_1_imgs as $page_news_section_1_img ):			                  	
						                ?>
									    	<li data-target="#news-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0) ? 'active' : ''; ?>"></li>
									    <?php
						                    $i++;
						                  endforeach;
						                ?>											    
								  	</ol>
								  	<?php endif; ?>								  	
								</div>
							</div>
							<div class="text-content">
								<h3><?php echo $page_news_section_1_heading_h3; ?></h3>	
								<p><?php echo $page_news_section_1_paragraph; ?></p>
								<a href="<?php echo $page_news_section_1_link; ?>" target="_blank" class="read-more cta"><?php echo $page_news_section_1_link_text; ?> <i class="fa fa-angle-right"></i></a>
							</div>
						</div>

						<div class="content-2">

							<div class="sidebar hidden-xs hidden-sm">
								<h3>News</h3>

							  	<ul class="news-category">
								    <li><a class="news-type" href="#mediacoverage">Media Coverage</a></li>
								    <li><a class="news-type" href="#pressreleases">Press Releases</a></li>				
							  	</ul>

						  	</div>
							
							<div class="tab-content">
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

		</div>

	</div> <!-- end content-wrapper -->

	<?php get_template_part( 'content', 'mailing-list' ); ?>

	<a href="#" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

	<script id="mediacoverage-template" type="text/x-handlebars-template">
   		{{#items}}
	  	<div class="list-item">
			<div class="col date"><a target="_blank" href="{{link}}"><span>{{date}}</span></a></div>
			<div class="col news-title"><a target="_blank" href="{{link}}"><h6>{{{title}}}</h6></a></div>
			<div class="col news-content"><a target="_blank" href="{{link}}"><p>{{{content}}}</p></a></div>
		</div>
		{{/items}}		
	</script>

	<script id="pressreleases-template" type="text/x-handlebars-template">
   		{{#items}}
	  	<div class="list-item">
			<div class="col date"><a target="_blank" href="{{link}}"><span>{{date}}</span></a></div>			
			<div class="col news-content"><a target="_blank" href="{{link}}"><p>{{{title}}}</p></a></div>
		</div>
		{{/items}}		
	</script>

<?php get_footer(); ?>