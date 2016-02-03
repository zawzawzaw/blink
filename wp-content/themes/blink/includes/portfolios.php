<?php 
  $section_query = new WP_Query('post_type=ptype_portfolios&orderby=menu_order&order=ASC&posts_per_page=-1'); 
?>
<?php while ($section_query->have_posts()) : $section_query->the_post();   
  $terms = get_the_terms( $post->ID, 'portfolio_type' );   
  $location = get_post_meta($post->ID, 'ptype_portfolios_location', true);      
  if ( $terms && ! is_wp_error( $terms ) ) : 
 
    $portfolio_type = array();
 
    foreach ( $terms as $term ) {
        $portfolio_type[] = $term->name;
    }
                         
    $portfolio_types = join( " ", $portfolio_type );
  endif;
?>  
<li class="list-item">
  <div class="<?php echo $portfolio_types; ?>">
    <div class="img-holder">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
    </div>
    <div class="caption-text">
      <a href="<?php the_permalink(); ?>"><span><?php echo $location; ?></span></a>
      <a href="<?php the_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
      <span class="rank"><?php echo $post->menu_order; ?></span>
    </div>                      
  </div>
</li> 
<?php endwhile;  ?>