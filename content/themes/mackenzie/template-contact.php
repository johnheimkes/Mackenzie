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
	<div class="contact-map-wrapper">
		<iframe width="787" height="436" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=mackenzie+pub&amp;aq=&amp;sll=46.44186,-93.36129&amp;sspn=17.510564,19.731445&amp;t=m&amp;ie=UTF8&amp;hq=mackenzie+pub&amp;hnear=&amp;ll=44.979219,-93.277445&amp;spn=0.013236,0.033731&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
	</div>
</div>

<div class="contact-content">
	<div class="contact-information">
		<h3 class="contact-heading contact-heading-address">Address:</h3>
		<p><span>918 Hennepin Avenue</span> 
		<span>Minneapolis, MN 55403</span></p>

		<h3 class="contact-heading contact-heading-phone">Phone:</h3>
		<p>612-333-7268</p>

		<h3 class="contact-heading contact-heading-email">Email:</h3>
		<p><a href="mailto:&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#109;&#097;&#099;&#107;&#101;&#110;&#122;&#105;&#101;&#112;&#117;&#098;&#046;&#099;&#111;&#109;">&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#109;&#097;&#099;&#107;&#101;&#110;&#122;&#105;&#101;&#112;&#117;&#098;&#046;&#099;&#111;&#109;</a></p>
	</div>
	<div class="contact-form">
		<?php the_content();?>
	</div>
</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>