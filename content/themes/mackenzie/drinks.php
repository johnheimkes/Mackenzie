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
	<ul class="menu-nav menu-nav-drinks">
		<li class="menu-nav-item menu-nav-beer">
			<a href="<?php echo site_url(); ?>/drink-category/beer">Beer</a>
		</li>
		<li class="menu-nav-item menu-nav-wine">
			<a href="<?php echo site_url(); ?>/drink-category/wind">Wine</a>
		</li>
		<li class="menu-nav-item menu-nav-liquor">
			<a href="<?php echo site_url(); ?>/drink-category/wine">Liquor</a>
		</li>
		<li class="menu-nav-item menu-nav-nonalcoholic">
			<a href="<?php echo site_url(); ?>/drink-category/non-alcoholic">Non-Alcoholic</a>
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
				<span class="rating rated-<?php the_field('drink_rating'); ?>"><?php the_field('drink_rating'); ?>/4</span>
			</div>
		</div>
		<?php endwhile; endif; ?>
		
	</div>
</div>

<?php get_footer(); ?>