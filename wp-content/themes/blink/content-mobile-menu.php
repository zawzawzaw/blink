<div id="mobile-menu-logo-wrapper" class="visible-xs visible-sm">
	<div class="mobile-menu container">
		<div class="row">
			<div class="col-md-12">
				<a href="index.html" class="logo"></a>
				<div class="toggle-menu-container pull-right">					
					<div class="toggle-menu">
						<a href="javascript:void(0)"> 
							<span class="nav-bar"></span> 
							<span class="nav-bar"></span> 
							<span class="nav-bar"></span> 
						</a> 
					</div>
				</div>
				<a href="#" class="mobile-search pull-right"><i class="fa fa-search"></i></a>			
			</div>
		</div>
	</div>			
	<div class="mobile-nav-container" class="visible-xs visible-sm">
		
			<?php
				$defaults = array(
					'echo' => true,
					'container' => false,
					'theme_location'  => 'mobile-menu',
					'menu_class'      => 'mobile-nav'
				);

				wp_nav_menu($defaults);
			?>				
		
	</div>
	<div class="mobile-search-box-container container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-box-title">
					<div class="title">
						<h4>Search Blink</h4>
						<p>Access our portfolio of projects.</p>
					</div>
					<a href="#" class="close-btn"></a>
				</div>
				<div class="clear"></div>
				<div class="search-box-content">
					<?php $page_info = get_page_by_title('search'); ?>
					<form action="<?php the_permalink($page_info); ?>">
						<input type="text" name="q" id="search_input" required>
					</form>					

					<div class="related-result">
						<ul>
							<li class="related-result-header">Projects</li>
							<li><a href="#">Doubletree Sanya</a></li>
							<li><a href="#">Hilton Goa</a></li>
							<li><a href="#">Benxi Doubletree by Hilton</a></li>
							<li><a href="#">Renaissance & Courtyard by Marriott</a></li>
							<li><a href="#">Marriott Xiang Shui Bay</a></li>
							<li><a href="#">Dongqian Lake Ningbo</a></li>
							<li><a href="#">Marriott Wenchang</a></li>
							<li><a href="#">Hilton Fengxian</a></li>
						</ul>
					</div>
				</div>	
			</div>
		</div>		
	</div>
</div>

