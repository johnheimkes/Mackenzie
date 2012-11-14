<?php
/**
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
		<h2 class="page-heading page-heading-food">Food</h2>
		<p>Our kitchen hours are Monday through Thursday 11:30am to 8:00pm, Friday 11:30 am to 10:00 pm, Saturday and Sunday times vary.</p>

		<p>Come in and join our lunch club. Buy 8 lunches and get $5 off the next. Lunch specials served every week Monday through Friday.</p>

		<p><strong>Check out our new personal pita pizza starting at $2.00!</strong></p>
	</div>
	
	<div class="page-head-photo-container">
		<img class="page-head-photo" src="<?php bloginfo('template_url'); ?>/assets/images/inside.jpg" alt="" />
	</div>
</div>

<div class="menu-wrapper">
	<?php wp_nav_menu(array(
		'menu'			=> 'food-nav',
		'container'		=> false,
		'menu_class'	=> 'menu-nav-drinks menu-nav',
	)); ?>
	
	<div class="menu-body">
		<div class="menu-head">
			<div class="menu-heading-container menu-heading-name">
				<h3 class="menu-heading">Food Category</h3>
			</div>
			<div class="menu-heading-container menu-heading-last">
				<h3 class="menu-heading">Price</h3>
			</div>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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