<?php
/**
 * Template Name: Food
 *
 * Mackenzie Pub Theme
 *
 * @category Mackenzie_Pub_Theme
 * @package Mackenzie_Pub_Theme
 * @subpackage Page
 * @author
 * @version 1.0
 */
 
 $food_post = new WP_Query(array(
	 'posts_per_page'	=> -1,
	 'post_type'		=> 'mack_food',
 ));
?>
<?php get_header(); ?>

<div class="page-head">
	<div class="page-head-description">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2 class="page-heading page-heading-food"><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	</div>
	
	<div class="page-head-photo-container">
		<img class="page-head-photo" src="<?php the_field('page_photo'); ?>" alt="" />
	</div>
</div>

<div class="menu-wrapper">
	<ul class="menu-nav menu-nav-drinks">
		<li class="menu-nav-item menu-nav-specials">
			<a href="<?php echo site_url() ?>/food-category/specials">Specials</a>
		</li>
		<li class="menu-nav-item menu-nav-starters">
			<a href="<?php echo site_url() ?>/food-category/starters">Starters</a>
		</li>
		<li class="menu-nav-item menu-nav-entrees">
			<a href="<?php echo site_url() ?>/food-category/entrees">Entrees</a>
		</li>
	</ul>
	
	<div class="menu-body">
		<div class="menu-head">
			<div class="menu-heading-container menu-heading-name">
				<h3 class="menu-heading">Food Category</h3>
			</div>
			<div class="menu-heading-container menu-heading-last">
				<h3 class="menu-heading">Price</h3>
			</div>
		</div>
		<?php if ( $food_post->have_posts() ) : while ( $food_post->have_posts() ) : $food_post->the_post(); ?>
		<div class="menu-container">
			<div class="menu-container-cell menu-container-cell-description">
				<h4><?php the_title(); ?></h4>
				<p><?php the_content(); ?></p>
			</div>
			<div class="menu-container-cell menu-container-cell-last">
				<span class="food-price">$<?php if (get_field('food_price')) : the_field('food_price'); ?><?php else : ?>N/A<?php endif; ?></span>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>