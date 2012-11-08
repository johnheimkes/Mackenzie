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

<div class="menu-wrapper">
	<ul class="menu-nav menu-nav-drinks">
		<li class="menu-nav-item menu-nav-beer">
			<a href="#">Beer</a>
		</li>
		<li class="menu-nav-item menu-nav-wine">
			<a href="#">Wine</a>
		</li>
		<li class="menu-nav-item menu-nav-liquor">
			<a href="#">Liquor</a>
		</li><li class="menu-nav-item menu-nav-nonalcoholic">
			<a href="#">Non-Alcoholic</a>
		</li>
	</ul>
	
	<div class="menu-body">
		<div class="menu-head">
			<div class="menu-heading-container menu-heading-name">
				<h3 class="menu-heading">Beer Name,Location &amp; Description</h3>
			</div>
			<div class="menu-heading-container menu-heading-abv">
				<h3 class="menu-heading">ABV</h3>
			</div>
			<div class="menu-heading-container menu-heading-last">
				<h3 class="menu-heading">Rating</h3>
			</div>
		</div>
		<!-- begin if -->
		<div class="menu-container">
			<div class="menu-container-cell menu-container-cell-description">
				<h4>Alaskan White Ale</h4>
				<p>Brewed in Juneau, AK. This Belgian-style Whitbier has a soft, slightly sweet base with the unique spice aroma of coriander and a crisp citrus finish of orange peel.</p>
			</div>
			<div class="menu-container-cell menu-container-cell-abv">
				<h4>5.3% ABV</h4>
			</div>
			<div class="menu-container-cell menu-container-cell-last">
				<span class="rating">3.5/4</span>
			</div>
		</div>
		<!-- endif -->
		
		<div class="menu-container">
			<div class="menu-container-cell menu-container-cell-description">
				<h4>Alaskan White Ale</h4>
				<p>Brewed in Juneau, AK. This Belgian-style Whitbier has a soft, slightly sweet base with the unique spice aroma of coriander and a crisp citrus finish of orange peel.</p>
			</div>
			<div class="menu-container-cell menu-container-cell-abv">
				<h4>5.3% ABV</h4>
			</div>
			<div class="menu-container-cell menu-container-cell-last">
				<span class="rating">3.5/4</span>
			</div>
		</div>
		<div class="menu-container">
			<div class="menu-container-cell menu-container-cell-description">
				<h4>Alaskan White Ale</h4>
				<p>Brewed in Juneau, AK. This Belgian-style Whitbier has a soft, slightly sweet base with the unique spice aroma of coriander and a crisp citrus finish of orange peel.</p>
			</div>
			<div class="menu-container-cell menu-container-cell-abv">
				<h4>5.3% ABV</h4>
			</div>
			<div class="menu-container-cell menu-container-cell-last">
				<span class="rating">3.5/4</span>
			</div>
		</div>
		<div class="menu-container">
			<div class="menu-container-cell menu-container-cell-description">
				<h4>Alaskan White Ale</h4>
				<p>Brewed in Juneau, AK. This Belgian-style Whitbier has a soft, slightly sweet base with the unique spice aroma of coriander and a crisp citrus finish of orange peel.</p>
			</div>
			<div class="menu-container-cell menu-container-cell-abv">
				<h4>5.3% ABV</h4>
			</div>
			<div class="menu-container-cell menu-container-cell-last">
				<span class="rating">3.5/4</span>
			</div>
		</div>
		<div class="menu-container">
			<div class="menu-container-cell menu-container-cell-description">
				<h4>Alaskan White Ale</h4>
				<p>Brewed in Juneau, AK. This Belgian-style Whitbier has a soft, slightly sweet base with the unique spice aroma of coriander and a crisp citrus finish of orange peel.</p>
			</div>
			<div class="menu-container-cell menu-container-cell-abv">
				<h4>5.3% ABV</h4>
			</div>
			<div class="menu-container-cell menu-container-cell-last">
				<span class="rating">3.5/4</span>
			</div>
		</div>
		<div class="menu-container">
			<div class="menu-container-cell menu-container-cell-description">
				<h4>Alaskan White Ale</h4>
				<p>Brewed in Juneau, AK. This Belgian-style Whitbier has a soft, slightly sweet base with the unique spice aroma of coriander and a crisp citrus finish of orange peel.</p>
			</div>
			<div class="menu-container-cell menu-container-cell-abv">
				<h4>5.3% ABV</h4>
			</div>
			<div class="menu-container-cell menu-container-cell-last">
				<span class="rating">3.5/4</span>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>