<?php 
  $section_query = new WP_Query('post_type=ptype_profileleaders&orderby=menu_order&order=ASC&posts_per_page=-1'); 
?>
<ul>
  <?php while ($section_query->have_posts()) : $section_query->the_post();
    $profile_photo = wp_get_attachment_image_src(get_post_meta($post->ID, 'ptype_profileleaders_photo', true), 'full');
    $postion_and_place = get_post_meta($post->ID, 'ptype_profileleaders_position_and_place', true);      
  ?>      
  <li>
    <img src="<?php echo $profile_photo[0]; ?>" alt="<?php echo get_the_title(); ?>">    
    <span><?php echo get_the_title(); ?></span>
    <p><?php echo $postion_and_place; ?></p>
  </li>
  <?php endwhile;  ?>
</ul>