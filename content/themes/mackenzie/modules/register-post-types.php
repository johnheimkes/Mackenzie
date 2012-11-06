<?php
/**
 * Mackenzie Pub Theme
 *
 * @category Mackenzie_Pub_Theme
 * @package Mackenzie_Pub_Theme
 * @subpackage Modules_Register_PostTypes
 * @author John Heimkes IV <john@markupisart.com>
 * @version 1.0
 */

add_action('init', 'mack_register_post_types');
function mack_register_post_types()
{
    // register your post-types here
    /*
     * @see register_post_type() http://codex.wordpress.org/Function_Reference/register_post_type
     *
     */
    register_post_type(
        'mack_carousel', // prefix your post-type
        array(
            'labels' => array(
                'name'          => 'Carousels', // plural name
                'singular_name' => 'Carousel'
            ),
            'public' => true,
            'supports' => array(
                'title',
                'thumbnail',
            )
        )
    );
	
	register_post_type(
		'mack_food',
		array(
			'labels' => array(
				'name'			=> 'Food',
				'singular_name'	=> 'Food Item',
				'all_items'		=> 'All Food',
				'add_new'		=> 'Add New Food Item',
				'edit_item'		=> 'Edit Food Item',
			),
			'public' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'revisions',
			),
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'food',
			),
		)
	);
	
	register_post_type(
		'mack_drink',
		array(
			'labels' => array(
				'name'			=> 'Drinks',
				'singular_name'	=> 'Drink',
				'all_items'		=> 'All Drinks',
				'add_new'		=> 'Add New Drink',
				'edit_item'		=> 'Edit Drink',
			),
			'public' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'revisions',
			),
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'drinks',
			),
		)
	);
	
	register_post_type(
		'mack_merchandise',
		array(
			'labels' => array(
				'name'			=> 'Merchandise',
				'singular_name'	=> 'Merchandise Item',
				'all_items'		=> 'All Merchandise',
				'add_new'		=> 'Add New Merchandise',
				'edit_item'		=> 'Edit Merchandise Item',
			),
			'public' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'revisions',
			),
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'merchandise',
			),
		)
	);
	
}