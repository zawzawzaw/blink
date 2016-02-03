<div id="menu-logo-wrapper" class="animated slideInDown hidden-xs hidden-sm">
	
	<div class="main-menu">
		<a href="<?php echo home_url(); ?>" class="logo"></a>
		<div class="sidebar-nav pull-right">
			<?php
				$defaults = array(
					'echo' => true,
					'container' => false,
					'theme_location'  => 'main-menu',
					'menu_class'      => 'main-nav'
				);

				wp_nav_menu($defaults);
			?>				
		</div>
	</div>	

</div>