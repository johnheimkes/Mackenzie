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
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/carousel-events.jpg" alt="" />
		</div>
	</div>
</div>

<div class="menu-wrapper">
	<ul class="menu-nav menu-nav-events">
		<li class="menu-nav-item menu-nav-events-small">
			<a href="<?php echo site_url(); ?>/events/" <?php if(is_page('events')) { echo 'class="current-menu-item"'; } ?>>Events</a>
		</li>
		<li class="menu-nav-item menu-nav-parties">
			<a href="<?php echo site_url(); ?>/events/parties" <?php if(is_page('parties')) { echo 'class="current-menu-item"'; } ?>>Parties</a>
		</li>
		<li class="menu-nav-item menu-nav-sports">
			<a href="<?php echo site_url(); ?>/events/sports" <?php if(is_page('sports')) { echo 'class="current-menu-item"'; } ?>>Sports</a>
		</li>
	</ul>
	
	<div class="menu-body">
		<!-- begin if -->
		<div class="menu-container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			
			<?php if(is_page('events')) : if(get_field('event_list')) : ?>
				<ul class="event-list">
				<?php while(has_sub_field('event_list')) : ?>
					<li>
						<h4 class="event-title"><?php the_sub_field('event_title'); ?></h4>
						<p class="event-description"><?php the_sub_field('event_description'); ?></p>
						<div class="event-date-wrap">
							<span class="event-date"><?php the_sub_field('event_date'); ?></span>
						</div>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; endif; ?>
		</div>
		<!-- endif -->
	</div>
</div>

<?php get_footer(); ?>