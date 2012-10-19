<?php
/**
 * Mackenzie Pub Theme
 *
 * @category Nerdery_Skeleton_Theme
 * @package Nerdery_Skeleton_Theme
 * @subpackage Home
 * @author John Heimkes IV <john@markupisart.com>
 * @version 1.0
 */
?>

<?php get_header(); ?>

<div class="tagline align-center">
	<h2 class="tagline-heading"><?php bloginfo('description'); ?></h2>
	<p>MACKENZIE is known throughout the Twin Cities as having one of the best selections of Craft beers available.</p>
</div>

<div class="main-carousel">
	<div class="carousel">
		<div class="carousel-slide">
			<div class="carousel-shadow"></div>
			<img src="http://placekitten.com/800/340" alt="Kitties!!!!" />
		</div>
	</div>
	<ul class="main-carousel-nav">
		<li class="main-carousel-nav-item">
			<a href="<?php echo site_url(); ?>drinks" class="main-carousel-beer-link main-carousel-link">Beer</a>
		</li>
		
		<li class="main-carousel-nav-item main-carousel-sep">&amp;</li>
		
		<li class="main-carousel-nav-item">
			<a href="<?php echo site_url(); ?>food" class="main-carousel-food-link main-carousel-link">Food</a>
		</li>
	</ul>
</div>

<div class="happy-hour">
	<span class="asterisk"></span>
	<h3>Join Us For Happy Hour</h3>
	<span class="asterisk"></span>
	<p>Mon - Fri 2-6PM <span class="amp-replace amp-replace-yellow">&amp;</span> Sun - Wed late night 11-2am</p>
</div>

<div class="specials-module">
	<div class="monthly-specials">
		<h3 class="heading-section">Monthly Specials</h3>
		
		<h4 class="heading-list">Food:</h4>
		<ul class="list-specials">
			<li>Barbacoa Tacos</li>
			<li>Buffalo Chicken Wrap</li>
			<li>Fish Tacos</li>
		</ul>
		
		<h4 class="heading-list">Beer:</h4>
		<ul class="list-specials">
			<li>Alaskan White Ale</li>
			<li>Big Sky IPA</li>
			<li>Summit EPA</li>
		</ul>
	</div>
	
	<div class="pint-glass"></div>
	
	<div class="try-this">
		<h3 class="heading-section no-border">Don't Know What To Drink?</h3>
		
		<div class="beer-generator">
			<a href="#">Beer Please</a>
			<h4 class="try-this">Try This</h4>
			
			<h5 class="beer-generator-name">Founders Centennial IPA</h5>
			<p>Brewed in Grand Rapids, MI. Get ready to bask in the glory of the frothy heads floral bouquet. Malty undertones with the hop character for a finish that never turns too bitter. 7.2% ABV</p>
		</div>
		
		<a href="<?php echo site_url(); ?>drinks">See full beer list &amp; rate this beer.</a>
		
		<h3 class="heading-section">Events</h3>
		<p>Join us the first Wednesday of the month for music with Katey Bellville &amp; Friends - Country Bluegrass. Music from 9 - 11 pm</p>
	</div>
</div>

<?php get_footer(); ?>