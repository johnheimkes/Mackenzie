<?php
/*
Template Name: random beer
*/

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

<?php if ( $beer_please_post->have_posts() ) : while ( $beer_please_post->have_posts() ) : $beer_please_post->the_post(); ?>
    
<h5 class="beer-generator-name"><?php the_title(); ?></h5>
<?php the_content(); ?>

<?php endwhile; endif; wp_reset_query(); ?>