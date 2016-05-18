        <footer id="footer-wrapper" class="fixed-footer"><!-- container-fluid -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left tweet">
                            <?php 
                              $section_query = new WP_Query('post_type=ptype_offices&orderby=menu_order&order=ASC&posts_per_page=-1'); 
                            ?>                            
                            <ul>
                                <?php $i = 1;
                                   while ($section_query->have_posts()) : $section_query->the_post();    
                                    $ptype_offices_title = get_the_title();                                            
                                ?> 
                                <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact' ) ) ); ?>"><?php echo $ptype_offices_title; ?></a></li>                            
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <div class="pull-right sharing hidden-xs hidden-sm">
                            <p>&copy; <?php echo date('Y'); ?> The <?php bloginfo('name'); ?>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- page wrapper end -->

    <?php wp_footer(); ?>
        
</body>
</html>