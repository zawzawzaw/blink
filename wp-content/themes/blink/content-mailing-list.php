<div id="mailing-list-wrapper" class="fixed-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="left each-column hidden-xs hidden-sm">						
						<h4>thinkBLINK COMMUNITIES</h4>
						<ul>
							<li><a target="_blank" href="https://www.facebook.com/BLINK-Design-Group-1504843613064866/"><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="https://www.linkedin.com/company/blink-design-group"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<div class="middle footer-links each-column">
						 <?php
                            $args = array(
                            'order'                  => 'ASC',
                            'orderby'                => 'menu_order',
                            'post_type'              => 'nav_menu_item',
                            'post_status'            => 'publish',
                            'output'                 => ARRAY_A,
                            'output_key'             => 'menu_order',
                            'nopaging'               => true,
                            'update_post_term_cache' => false );
                            $menu_items = wp_get_nav_menu_items( 'Footer Menu', $args );
                        ?>
                       
                        <ul>
                            <?php 
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                if ( $menu_item->menu_item_parent == 25 ) :
                                    $title = $menu_item->title;
                                    $url = $menu_item->url; 
                            ?>
                                <li>                          
                                  <a href="<?php echo $url; ?>"><?php echo $title; ?></a>
                                </li>
                            <?php
                                endif;
                            }
                            ?>
                        </ul>
                        <ul>
                            <?php 
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                if ( $menu_item->menu_item_parent == 26 ) :
                                    $title = $menu_item->title;
                                    $url = $menu_item->url; 
                            ?>
                                <li>                          
                                  <a href="<?php echo $url; ?>"><?php echo $title; ?></a>
                                </li>
                            <?php
                                endif;
                            }
                            ?>
                        </ul>
                        <ul>
                            <?php 
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                if ( $menu_item->menu_item_parent == 27 ) :
                                    $title = $menu_item->title;
                                    $url = $menu_item->url; 
                            ?>
                                <li>                          
                                  <a href="<?php echo $url; ?>"><?php echo $title; ?></a>
                                </li>
                            <?php
                                endif;
                            }
                            ?>
                        </ul>
						
					</div>
					<div class="right each-column">
						<div class="text-content">
							<h3>thinkBLINK NEWS</h3>
							<p>Subscribe to our mailing list for updates and insights.</p>
						</div>
						<div class="input">
							<input type="text" id="subscribe_input" name="subscribe" placeholder="Enter your email address" />
							<a href="#" class="subscribe"><i class="fa fa-angle-right"></i></a>
							<div class="loading"></div>					
						</div>
					</div>
					<div class="clear"></div>
					<div class="left follow-us each-column visible-xs visible-sm">						
						<h4>thinkBLINK COMMUNITIES</h4>
						<ul>
							<!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>						 -->
						</ul>

						<p class="visible-xs visible-sm">&copy; 2015 Blink Design Group. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
