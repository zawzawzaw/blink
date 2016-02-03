<?php 
/*
Template Name: Static Template
*/
get_header();

$pageParent =  $post->post_parent;

if($post->post_parent !== 0) {
	$post_data = get_post($post->post_parent);
	$parent_slug = $post_data->post_name;
}
$current_slug = get_post( $post )->post_name;
?>

<div id="content-wrapper">

		<?php get_template_part( 'content', 'menu' ); ?>

		<div id="main-content" class="<?php if(isset($parent_slug) && $parent_slug!='whats-nearby') echo $parent_slug; ?> <?php echo $current_slug; ?>">

			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>	
			
		</div> <!-- end main-content -->

</div> <!-- end content-wrapper -->

<?php get_template_part( 'content', 'mailing-list' ); ?>

<?php get_footer(); ?>