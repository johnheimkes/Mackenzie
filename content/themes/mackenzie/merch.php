<?php
/**
 * Template Name: Merchendise
 *
 * Mackenzie Pub Theme
 *
 * @category Nerdery_Skeleton_Theme
 * @package Nerdery_Skeleton_Theme
 * @subpackage Home
 * @author John Heimkes IV <john@markupisart.com>
 * @version 1.0
 */
?>
<?php get_header(); ?>

<div class="page-head merch-head">
	<div class="page-head-description">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2 class="page-heading page-heading-merchandise"><?php the_title(); ?></h2>
		<?php endwhile; endif; ?>
	</div>
</div>
<div class="merch-wrapper">
	<?php
		$args = array( 'post_type' => 'mack_merchandise', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<div class="merch-item">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php 
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
				?>
				<div class="merch-image">
					<img src="<?php echo $image[0]; ?>" width="247" height="182"/>
				</div>
			<?php endif; ?>
			<h3 class="heading-merch"><?php the_title(); ?></h3>
			<div class="merch-price"><?php the_content(); ?></div>

		</div>
		
	<?php endwhile; ?>
	
</div>


<?php get_footer(); ?>