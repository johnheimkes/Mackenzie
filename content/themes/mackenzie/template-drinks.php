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
 
 $drink_post = new WP_Query(array(
	 'posts_per_page'	=> -1,
	 'post_type'		=> 'mack_drink',
	 'order'			=> 'asc',
	 'orderby'			=> 'title',
 ));
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

<div class="menu-wrapper">
	<?php wp_nav_menu(array(
		'menu'			=> 'drinks-nav',
		'container'		=> false,
		'menu_class'	=> 'menu-nav-drinks menu-nav',
	)); ?>
	
	<div class="menu-body">
		<div class="menu-head">
			<div class="menu-heading-container menu-heading-name">
				<h3 class="menu-heading">Beer Name, Location &amp; Description</h3>
			</div>
			<div class="menu-heading-container menu-heading-abv">
				<h3 class="menu-heading">ABV</h3>
			</div>
			<div class="menu-heading-container menu-heading-last">
				<h3 class="menu-heading">Rating</h3>
			</div>
		</div>
		
		<?php if ( $drink_post->have_posts() ) : while ( $drink_post->have_posts() ) : $drink_post->the_post(); ?>
		<div class="menu-container">
			<div class="menu-container-cell menu-container-cell-description">
				<h4><?php the_title(); ?></h4>
				<?php the_content(); ?>
			</div>
			<div class="menu-container-cell menu-container-cell-abv">
				<h4><?php if (get_field('drink_abv')) : the_field('drink_abv'); ?>%<?php else : ?>N/A<?php endif; ?></h4>
			</div>
			<div class="menu-container-cell menu-container-cell-last">
                <?php the_ratings(); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
		
	</div>
</div>

<?php get_footer(); ?>