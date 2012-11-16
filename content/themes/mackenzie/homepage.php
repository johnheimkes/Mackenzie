<?php
/**
 * Template Name: Home
 *
 * Mackenzie Pub Theme
 *
 * @category Nerdery_Skeleton_Theme
 * @package Nerdery_Skeleton_Theme
 * @subpackage Home
 * @author John Heimkes IV <john@markupisart.com>
 * @version 1.0
 */
 
 $carousel_post = new WP_Query(array(
	 'posts_per_page'	=> -1,
	 'post_type'		=> 'mack_carousel',
 ));
 
 $beer_please_post = new WP_Query(array(
	 'posts_per_page'	=> 1,
	 'orderby'			=> 'rand',
	 'post_type'		=> 'mack_drink',
	 'tax_query'		=> array(
		 'taxonomy'	=> 'mack_drink_category',
		 'field'	=> 'slug',
		 'terms'	=> 'beer',
	 ),
 ));
?>

<?php get_header(); ?>

<div class="tagline align-center">
	<h2 class="tagline-heading"><?php bloginfo('description'); ?></h2>
	<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
	 endwhile; endif; 
	?>
</div>

<div class="main-carousel">
	<div class="carousel" id="home-carousel">
		<?php if ( $carousel_post->have_posts() ) : while ( $carousel_post->have_posts() ) : $carousel_post->the_post(); ?>
		<div class="carousel-slide">
			<div class="carousel-shadow"></div>
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<ul class="main-carousel-nav">
		<li class="main-carousel-nav-item">
			<a href="<?php echo site_url(); ?>/drink" class="main-carousel-beer-link main-carousel-link">Beer</a>
		</li>
		
		<li class="main-carousel-nav-item main-carousel-sep">&amp;</li>
		
		<li class="main-carousel-nav-item">
			<a href="<?php echo site_url(); ?>/food" class="main-carousel-food-link main-carousel-link">Food</a>
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
		
		<div class="special-list-container">
			<?php if(get_field('food_specials_list')): ?>
			<h4 class="heading-list">Food:</h4>
			<ul class="list-specials list-specials-food">
				<?php while(has_sub_field('food_specials_list')) : ?>
					<li><?php the_sub_field('food_special'); ?></li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			
			<?php if(get_field('beer_specials_list')): ?>
			<h4 class="heading-list">Beer:</h4>
			<ul class="list-specials">
				<?php while(has_sub_field('beer_specials_list')) : ?>
					<li><?php the_sub_field('beer_special'); ?></li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>
	
	<div class="pint-glass"></div>
	
	<div class="try-this">
		<h3 class="heading-section dont-know align-left">Don't Know <span class="align-right">What To Drink?</span></h3>
		
	<?php if ( $beer_please_post->have_posts() ) : while ( $beer_please_post->have_posts() ) : $beer_please_post->the_post(); ?>
		<div class="beer-generator">
			<a href="#" class="beer-please" id="another">Beer Please</a>
			<h4 class="try-this-heading">Try This</h4>
			<div id="randombeer" class="beer-generator-description align-left">
				<h5 class="beer-generator-name"><?php the_title(); ?></h5>
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>

		<a href="<?php echo site_url(); ?>/drink" class="drinks-link">See full beer list &amp; rate this beer.</a>
		
		<h3 class="heading-section try-this-events">Events</h3>
		<p class="special-events-info align-left">Join us the first Wednesday of the month for music with Katey Bellville &amp; Friends - Country Bluegrass. Music from 9 - 11 pm</p>
	</div>
</div>

<script>
$("a.beer-please").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        data: {action: "random_beer_post"},
        success: function(response) {
            $(".beer-generator-description").html(response);
        }
    });
});
</script>

<?php get_footer(); ?>