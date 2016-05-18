<?php get_header(); ?>	

	<div id="content-wrapper">

		<?php get_template_part( 'content', 'menu' ); ?>

		<div id="main-content" class="portfolio">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">	
						<div class="content-1">
							<div class="text-content">
								<?php 
									if(have_posts()):
										while(have_posts()) : the_post();
									
											$page_portfolio_heading_H5 = get_post_meta($post->ID, 'page_portfolio_heading_H5', true); 
											$page_portfolio_paragraph_1 = get_post_meta($post->ID, 'page_portfolio_paragraph_1', true); 
											$page_portfolio_paragraph_2 = get_post_meta($post->ID, 'page_portfolio_paragraph_2', true);										
											$page_portfolio_paragraph_3 = get_post_meta($post->ID, 'page_portfolio_paragraph_3', true);
											$page_portfolio_paragraph_4 = get_post_meta($post->ID, 'page_portfolio_paragraph_4', true);										
								
										endwhile;
									endif;
								?>

								<h3><?php echo $page_portfolio_heading_H5; ?></h3>
								<p><?php echo $page_portfolio_paragraph_1; ?></p>
								<p><?php echo $page_portfolio_paragraph_2; ?></p>
								<p><?php echo $page_portfolio_paragraph_3; ?></p>							
								<p><?php echo $page_portfolio_paragraph_4; ?></p>
							</div>
						</div>
						<div id="category">
							<div class="content-2">
								<div class="category-nav">
									<!-- <div class="pull-left">
										<a href="#" class="filter"><i class="fa fa-filter"></i> Filter <i class="fa fa-angle-down"></i></a>
									</div>
									<div class="pull-right">
										<a href="#" class="search"><i class="fa fa-search"></i></a>
									</div> -->
									<div class="clear"></div>

									<div class="jplist" style="display:none;">
										<div class="jplist-panel">
											<div class="jplist-group">
												<div 
												   class="hidden" 
												   data-control-type="default-sort" 
												   data-control-name="sort" 
												   data-control-action="sort"
												   
												   data-path=".rank" 
												   data-order="asc" 
												   data-type="number">
												</div>		

												<input 
												  data-control-type="radio-buttons-filters"
												  data-control-action="filter"
												  data-control-name="default" 
												  data-path="default" 
												  
												  id="default-radio" 
												  type="radio" 
												  name="jplist"
												  checked="checked"
											   /> 										 									   									   
											   <input 									
												  data-control-type="radio-buttons-filters"
												  data-control-action="filter"
												  data-control-name="resorts" 
												  data-path=".resorts" 
												  
												  id="resorts" 
												  type="radio" 
												  name="jplist"
											   />
											   <input 									
												  data-control-type="radio-buttons-filters"
												  data-control-action="filter"
												  data-control-name="hotels" 
												  data-path=".hotels" 
												  
												  id="hotels" 
												  type="radio" 
												  name="jplist"
											   /> 
											   <input 									
												  data-control-type="radio-buttons-filters"
												  data-control-action="filter"
												  data-control-name="masterplanning" 
												  data-path=".masterplanning" 
												  
												  id="masterplanning" 
												  type="radio" 
												  name="jplist"
											   /> 
											   <input 									
												  data-control-type="radio-buttons-filters"
												  data-control-action="filter"
												  data-control-name="interiordesign" 
												  data-path=".interiordesign" 
												  
												  id="interiordesign" 
												  type="radio" 
												  name="jplist"
											   /> 
											   <!-- <input 									
												  data-control-type="radio-buttons-filters"
												  data-control-action="filter"
												  data-control-name="branddesign" 
												  data-path=".branddesign" 
												  
												  id="branddesign" 
												  type="radio" 
												  name="jplist"
											   />  -->
											   <input 									
												  data-control-type="radio-buttons-filters"
												  data-control-action="filter"
												  data-control-name="buildingdesign" 
												  data-path=".buildingdesign" 
												  
												  id="buildingdesign" 
												  type="radio" 
												  name="jplist"
											   /> 												
											</div>
										</div>
									</div>
																	
									<ul class="child-menu show">
										<li><a class="filter-category all-category" data-hash="#all" href="#all">view all</a></li>
										<li><a class="filter-category" data-hash="#resorts" href="#resorts">Resorts</a></li>
										<li><a class="filter-category" data-hash="#hotels" href="#hotels">Hotels</a></li>
										<li><a class="filter-category" data-hash="#masterplanning" href="#masterplanning">Master Planning</a></li>
										<li><a class="filter-category" data-hash="#interiordesign" href="#interiordesign">Interior Design</a></li>
										<!-- <li><a class="filter-category" data-hash="#branddesign" href="#branddesign">Brand Design</a></li> -->
										<li><a class="filter-category" data-hash="#buildingdesign" href="#buildingdesign">Building Design</a></li>
									</ul>
									
								</div>
							</div>
							<div class="content-3">
								<h3 class="filtered-title"></h3>								
								<ul class="list">
									<?php if(have_posts()) : ?>
									<?php while(have_posts()) : the_post(); ?>
										<?php the_content(); ?>
									<?php endwhile; ?>
									<?php endif; ?>									
								</ul>

								<div class="clear"></div>

								<!-- <a href="#" class="show-more"><i class="fa fa-plus"></i> Show More</a> -->

								<ul id="list_2"></ul>
							</div>
						</div>
					</div>
				</div>
			</div>					

		</div>

	</div> <!-- end content-wrapper -->

	<?php get_template_part( 'content', 'mailing-list' ); ?>	

	<script id="list-item-template" type="text/x-handlebars-template">
   		{{#items}}
	  	<li class="list-item">
		    <div class="{{type}}">
		        <div class="img-holder"><a href="{{url}}"><img src="{{image}}" class="img-responsive" alt=""></a></div>
		        <div class="caption-text">
		            <a href="{{url}}"><span>{{location}}</span></a>
		            <a href="{{url}}"><h5>{{name}}</h5></a>
		        </div>
		    </div>
		</li>
		{{/items}}		
	</script>

<?php get_footer(); ?>