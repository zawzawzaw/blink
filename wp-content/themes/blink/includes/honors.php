<?php 
  $section_query = new WP_Query('post_type=ptype_honors&orderby=menu_order&order=ASC&posts_per_page=-1'); 
?>
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
  <?php $i = 1;
   while ($section_query->have_posts()) : $section_query->the_post();
    $ptype_honors_slider_image = wp_get_attachment_image_src(get_post_meta($post->ID, 'ptype_honors_slider_image', true), 'full');
    $ptype_honors_link = get_post_meta($post->ID, 'ptype_honors_link', true);      
    $ptype_honors_sub_title = get_post_meta($post->ID, 'ptype_honors_sub_title', true);      
    $ptype_honors_description = get_post_meta($post->ID, 'ptype_honors_description', true);        
  ?> 

    <div class="item <?php echo ($i==1) ? 'active' : ''; ?>">
      <div class="img-content">
        <a href="<?php echo get_home_url().'/'.$ptype_honors_link; ?>"><img src="<?php echo $ptype_honors_slider_image[0]; ?>" class="img-responsive" alt=""></a>
      </div>
      <div class="text-content">
        <div class="v-align-table">
          <div class="v-align-table-cell">
            <h5><?php echo $ptype_honors_sub_title; ?></h5>
            <a href="<?php echo $ptype_honors_link; ?>"><h2><?php the_title(); ?></h2></a>
            <div class="seperator-line"></div>
            <?php echo $ptype_honors_description; ?>        
          </div>
        </div>
      </div>
    </div>
  <?php $i++; endwhile;  ?>
</div>

<!-- Indicators -->
<ol class="carousel-indicators">
  <?php $i = 0; while ($section_query->have_posts()) : $section_query->the_post(); ?>
    <li data-target="#news-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0) ? 'active' : ''; ?>"></li>
  <?php $i++; endwhile; ?> 
</ol>
