<?php
/**
 * Mackenzie Pub Theme
 *
 * @category Mackenzie_Pub_Theme
 * @package Mackenzie_Pub_Theme
 * @subpackage Category
 * @author
 * @version 1.0
 */
 
query_posts($query_string . '&orderby=title&order=asc&posts_per_page=-1');

?>
<?php get_header(); ?>

<div class="page-head">
	<div class="page-head-description">
		<h2 class="page-heading page-heading-drinks">Drinks</h2>
		<p>Come in and enjoy one of the largest selections of beer in downtown Minneapolis. We have 24 different beers on tap as well as many domestic and imported bottles.</p>

		<p>Our selection is constantly changing so check back often. Join our mug club and get special deals every Monday.</p>

		<p><strong>Our bar hours are 11:00 am to 2:00 am daily.</strong></p>
	</div>
	
	<div class="page-head-photo-container">
		<img class="page-head-photo" src="<?php bloginfo('template_url'); ?>/assets/images/outside.jpg" alt="" />
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
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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