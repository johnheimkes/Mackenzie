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

<div class="menu-container">
	<ul class="menu-nav menu-nav-drinks">
		<li class="menu-nav-item menu-nav-specials">
			<a href="#">Specials</a>
		</li>
		<li class="menu-nav-item menu-nav-starters">
			<a href="#">Starters</a>
		</li>
		<li class="menu-nav-item menu-nav-entrees">
			<a href="#">Entrees</a>
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
		<!-- begin if -->
		<div class="menu-item">
			<div class="menu-item-cell menu-item-cell-description">
				<h4>BuffaloChicken Sammich</h4>
				<p>Brewed in Juneau, AK. This Belgian-style Whitbier has a soft, slightly sweet base with the unique spice aroma of coriander and a crisp citrus finish of orange peel.</p>
			</div>
			<div class="menu-item-cell menu-item-cell-last">
				<span class="rating">$8.50</span>
			</div>
		</div>
		<!-- endif -->
		
		
		<div class="menu-head">
			<div class="menu-heading-container menu-heading-name">
				<h3 class="menu-heading">Food Category</h3>
			</div>
			<div class="menu-heading-container menu-heading-last">
				<h3 class="menu-heading">Price</h3>
			</div>
		</div>
		<div class="menu-item">
			<div class="menu-item-cell menu-item-cell-description">
				<h4>BuffaloChicken Sammich</h4>
				<p>Brewed in Juneau, AK. This Belgian-style Whitbier has a soft, slightly sweet base with the unique spice aroma of coriander and a crisp citrus finish of orange peel.</p>
			</div>
			<div class="menu-item-cell menu-item-cell-last">
				<span class="rating">$8.50</span>
			</div>
		</div>
		<div class="menu-item">
			<div class="menu-item-cell menu-item-cell-description">
				<h4>BuffaloChicken Sammich</h4>
				<p>Brewed in Juneau, AK. This Belgian-style Whitbier has a soft, slightly sweet base with the unique spice aroma of coriander and a crisp citrus finish of orange peel.</p>
			</div>
			<div class="menu-item-cell menu-item-cell-last">
				<span class="rating">$8.50</span>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>