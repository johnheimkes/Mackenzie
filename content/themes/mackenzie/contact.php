<?php
/**
 * Template Name: Contact Us
 *
 * Mackenzie Pub Theme
 *
 * @category Nerdery_Skeleton_Theme
 * @package Nerdery_Skeleton_Theme
 * @subpackage Page
 * @author John Heimkes IV <john@markupisart.com>
 * @version 1.0
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-head merch-head">
	<div class="page-head-description">
		
		<h2 class="page-heading page-heading-contact"><?php the_title(); ?></h2>
	</div>
</div>

<div class="contact-map">
	<img src='<?php bloginfo('template_url'); ?>/assets/images/map.jpg' width="784"/>
</div>

<div class="contact-content">
	<div class="contact-information">
		<h3 class="contact-heading contact-heading-address">Address:</h3>
		<p><span>918 Hennepin Avenue</span> 
		<span>Minneapolis, MN 55403</span></p>

		<h3 class="contact-heading contact-heading-phone">Phone:</h3>
		<p>612-333-7268</p>

		<h3 class="contact-heading contact-heading-email">Email:</h3>
		<p>contact@mackenziepub.com </p>
	</div>
	<div class="contact-form">
		<?php the_content();?>
	</div>
</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>