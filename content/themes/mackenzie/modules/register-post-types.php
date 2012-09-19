<?php
/**
 * Nerdery Theme
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
        'nerdery_carousel', // prefix your post-type
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
	
	
}