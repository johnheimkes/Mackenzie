<?php
/**
 * Template Name: Drinks
 *
 * Mackenzie Pub Theme
 *
 * @category Mackenzie_Pub_Theme
 * @package Mackenzie_Pub_Theme
 * @subpackage Page
 * @author
 * @version 1.0
 */
?>
<?php get_header(); ?>

<div class="page-head">
	<div class="page-head-description">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2 class="page-heading page-heading-drinks"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	
	<div class="page-head-photo-container">
		<img class="page-head-photo" src="<?php the_field('page_photo'); ?>" alt="" />
	</div>
</div>

<?php get_footer(); ?>