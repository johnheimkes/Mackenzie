<?php
/**
 * Template Name: Events
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

<div class="page-head events-page-head">
	<div class="page-head-description">
		<h2 class="page-heading page-heading-events">Events</h2>
	</div>
</div>

<div class="main-carousel events-carousel">
	<div class="carousel">
		<div class="carousel-slide">
			<div class="carousel-shadow"></div>
			<img src="http://placekitten.com/800/340" alt="Kitties!!!!" />
		</div>
	</div>
</div>

<div class="menu-wrapper">
	<ul class="menu-nav menu-nav-drinks">
		<li class="menu-nav-item menu-nav-parties">
			<a href="<?php echo site_url(); ?>/events/parties" <?php if(is_page('parties')) { echo 'class="current-menu-item"'; } ?>>Parties</a>
		</li>
		<li class="menu-nav-item menu-nav-sports">
			<a href="<?php echo site_url(); ?>/events/sports" <?php if(is_page('sports')) { echo 'class="current-menu-item"'; } ?>>Sports</a>
		</li>
		<li class="menu-nav-item menu-nav-entertainment">
			<a href="<?php echo site_url(); ?>/events/entertainment" <?php if(is_page('entertainment')) { echo 'class="current-menu-item"'; } ?>>Entertainment</a>
		</li>
	</ul>
	
	<div class="menu-body">
		<!-- begin if -->
		<div class="menu-container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<!-- endif -->
	</div>
</div>

<?php get_footer(); ?>