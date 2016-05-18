<?php get_header(); ?>

	<div id="content-wrapper">

		<?php get_template_part( 'content', 'menu' ); ?>

		<div id="main-content" class="search">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<div class="content-1">
							<div class="text-content">
								<h1>Search result for “<span class="query"></span>”</h1>
								<p><span class="result-count"></span> Results for keyword found.</p>								
							</div>
						</div>

						<div id="all-content"></div>

					</div>
				</div>
			</div>			

		</div>

	</div> <!-- end content-wrapper -->

	<?php get_template_part( 'content', 'mailing-list' ); ?>

	<script id="portfolio-template" type="text/x-handlebars-template">
   		<div class="content-2">
			<h3>Portfolio</h3>
			{{#items}}
			<div class="each-item">
				<div class="img-content"><a href="{{url}}" target="_blank"><img src="{{image}}" class="img-responsive" alt=""></a></div>
				<div class="text-content">
					<div class="v-align-table">
						<div class="v-align-table-cell">
							<a href="{{url}}" target="_blank"><h3>{{name}}</h3></a>
							<p>{{location}}</p>
						</div>
					</div>
				</div>
			</div>
			{{/items}}
		</div>
	</script>
	<script id="profile-template" type="text/x-handlebars-template">
   		<div class="content-3 search-content">
			<h3>PROFILE</h3>			
			{{#items}}
			<div class="each-item">
				<div class="text-content">					
					<a href="<?php echo home_url(); ?>/{{url}}" target="_blank"><h2>{{title}}</h2></a>
					<a href="<?php echo home_url(); ?>/{{url}}" target="_blank"><p>{{description}}</p></a>					
				</div>				
			</div>					
			{{/items}}	
		</div>
	</script>
		<script id="insights-template" type="text/x-handlebars-template">
   		<div class="content-4 search-content">
			<h3>INSIGHTS</h3>			
			{{#items}}
			<div class="each-item">
				<div class="text-content">					
					<a href="<?php echo home_url(); ?>/{{url}}" target="_blank"><h2>{{title}}</h2></a>
					<a href="<?php echo home_url(); ?>/{{url}}" target="_blank"><p>{{description}}</p></a>					
				</div>				
			</div>					
			{{/items}}	
		</div>
	</script>
	<script id="news-template" type="text/x-handlebars-template">
   		<div class="content-5 search-content">
			<h3>NEWS</h3>			
			<div class="each-item">
				<div class="text-content">
					<h2>Media Coverage</h2>
					<ul>
						{{#items}}
						<li>
							<a href="{{link}}" target="_blank"><p>{{content}}</p></a>
							<a href="{{link}}" target="_blank"><p>{{title}} – {{date}}</p></a>
						</li>						
						{{/items}}	
					</ul>
				</div>
			</div>					
		</div>
	</script>
	<script id="news_pr-template" type="text/x-handlebars-template">	
		<div class="each-item">
			<div class="text-content">
				<h2>Press Release</h2>
				<ul>
					{{#items}}
					<li>
						<a href="{{link}}" target="_blank"><p>{{content}}</p></a>
						<a href="{{link}}" target="_blank"><p>{{title}} – {{date}}</p></a>
					</li>						
					{{/items}}	
				</ul>
			</div>
		</div>
	</script>
	<script id="careers-template" type="text/x-handlebars-template">
   		<div class="content-6 search-content">
			<h3>CAREERS</h3>			
			{{#items}}
			<div class="each-item">
				<div class="text-content">					
					<a href="<?php echo home_url(); ?>/{{url}}" target="_blank"><h2>{{title}}</h2></a>
					<a href="<?php echo home_url(); ?>/{{url}}" target="_blank"><p>{{description}}</p></a>					
				</div>				
			</div>					
			{{/items}}	
		</div>
	</script>
	<script id="contacts-template" type="text/x-handlebars-template">
   		<div class="content-7 search-content">
			<h3>CONTACT US</h3>			
			{{#items}}
			<div class="each-item">
				<div class="text-content">					
					<a href="<?php echo home_url(); ?>/{{url}}" target="_blank"><h2>{{title}}</h2></a>
					<a href="<?php echo home_url(); ?>/{{url}}" target="_blank"><p>{{description}}</p></a>					
				</div>				
			</div>					
			{{/items}}	
		</div>
	</script>

<?php get_footer(); ?>