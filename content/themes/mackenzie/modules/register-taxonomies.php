<?php
/**
 * Mackenzie Pub Theme
 *
 * @category Mackenzie_Pub_Theme
 * @package Mackenzie_Pub_Theme
 * @subpackage Modules_Register_Taxonomies
 * @author John Heimkes IV <john@markupisart.com>
 * @version 1.0
 */

add_action('init', 'mack_register_taxonomies');
function mack_register_taxonomies()
{
	register_taxonomy(
        'mack_food_category',
        array(
            'mack_food',
        ),
        array(
            'labels'       => array(
                'name'              => 'Food Categories',
                'singular_name'     => 'Food Category',
                'search_items'      => 'Search Food Categories',
                'all_items'         => 'All Food Categories',
                'parent_item'       => 'Parent Food Category',
                'parent_item_colon' => 'Parent Food Category:',
                'edit_item'         => 'Edit Food Category',
                'update_item'       => 'Update Food Category',
                'add_new_item'      => 'Add New Food Category',
                'new_item_name'     => 'New Food Category Name',
                'menu_name'         => 'Food Categories',
            ),
            'hierarchical' => true,
            'show_ui'      => true,
            'rewrite' 	   => array(
				'slug' => 'food-category'
			),
        )
    );
	
	register_taxonomy(
	'mack_drink_category',
        array(
            'mack_drink',
        ),
        array(
            'labels'       => array(
                'name'              => 'Drink Categories',
                'singular_name'     => 'Drink Category',
                'search_items'      => 'Search Drink Categories',
                'all_items'         => 'All Drink Categories',
                'parent_item'       => 'Parent Drink Category',
                'parent_item_colon' => 'Parent Drink Category:',
                'edit_item'         => 'Edit Drink Category',
                'update_item'       => 'Update Drink Category',
                'add_new_item'      => 'Add New Drink Category',
                'new_item_name'     => 'New Drink Category Name',
                'menu_name'         => 'Drink Categories',
            ),
            'hierarchical' => true,
            'show_ui'      => true,
            'rewrite'      => array(
				'slug' => 'drink-category'
			),
        )
    );
	
	register_taxonomy(
	'mack_merch_category',
        array(
            'mack_merch',
        ),
        array(
            'labels'       => array(
                'name'              => 'Merchandise Categories',
                'singular_name'     => 'Merchandise Category',
                'search_items'      => 'Search Merchandise Categories',
                'all_items'         => 'All Merchandise Categories',
                'parent_item'       => 'Parent Merchandise Category',
                'parent_item_colon' => 'Parent Merchandise Category:',
                'edit_item'         => 'Edit Merchandise Category',
                'update_item'       => 'Update Merchandise Category',
                'add_new_item'      => 'Add New Merchandise Category',
                'new_item_name'     => 'New Merchandise Category Name',
                'menu_name'         => 'Merchandise Categories',
            ),
            'hierarchical' => true,
            'show_ui'      => true,
            'rewrite'      => array(
				'slug' => 'merchandise-category'
			),
        )
    );	
}