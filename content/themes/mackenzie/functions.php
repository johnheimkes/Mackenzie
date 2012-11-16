<?php
/**
 * Mackenzie Pub Theme
 *
 * @category   Mackenzie_Pub_Theme
 * @package    Mackenzie_Pub_Theme
 * @subpackage Functions
 * @author     John Heimkes IV <john@markupisart.com>
 * @version    1.0
 */

add_action( 'wp_ajax_random_beer_post', 'get_random_beer_post' );
add_action( 'wp_ajax_nopriv_random_beer_post', 'get_random_beer_post' );

function get_random_beer_post() {
 	if ( $beer_please_post->have_posts() ) : while ( $beer_please_post->have_posts() ) : $beer_please_post->the_post(); ?>
		<div class="beer-generator">
			<a href="#" class="beer-please" id="another">Beer Please</a>
			<h4 class="try-this-heading">Try This</h4>
			<div id="randombeer" class="beer-generator-description align-left">
				<h5 class="beer-generator-name"><?php the_title(); ?></h5>
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; endif; wp_reset_query();
}


/**
 * Theme Supports
 */
add_theme_support('post-thumbnails');
add_theme_support('menus');

/**
 * Includes
 */
include_once 'modules/register-post-types.php';
include_once 'modules/register-taxonomies.php';

/**
 * Constants
 */
define('DISALLOW_FILE_EDIT', true); // because we don't want the client to modify files directly on server.
define('NERDERY_THEME_PATH_URL', get_template_directory_uri() . '/');

/**
 * Register sidebars
 */
register_sidebar(
    array(
        'name'        => 'Example Sidebar',
        'id'          => 'nerdery_example_sidebar',
        'description' => 'Example Sidebar. Rename and use as a skeleton for '
                         . 'other dynamic sidebars.'
    )
);

add_action('wp_enqueue_scripts', 'nerderyEnqueueScripts');
add_action('wp_enqueue_scripts', 'nerderyEnqueueStyles');

/**
 * Register & enqueue all Javascript files for the theme.
 *
 * @return void
 */
function nerderyEnqueueScripts()
{
    // Global script
    wp_register_script(
        'nerdery-global',
        NERDERY_THEME_PATH_URL . 'assets/scripts/global.js',
        array('jquery'),
        '1.0',
        true
    );
	
    wp_register_script(
		'nerdery-cycle',
        NERDERY_THEME_PATH_URL . 'assets/scripts/jquery.cycle.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_enqueue_script('nerdery-global');
	wp_enqueue_script('nerdery-cycle');

    // Comment reply script for threaded comments (registered in WP core)
    if (is_singular() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

/**
 * Register & enqueue all stylesheets for the theme. /style.css is not used.
 *
 * @return void
 */
function nerderyEnqueueStyles()
{
    global $wp_styles;

    // Reset Stylesheet
    wp_register_style(
        'nerdery-reset',
        NERDERY_THEME_PATH_URL . 'assets/styles/reset.css',
        false,
        '1.0',
        'screen, projection'
    );

    // Primary Screen Stylesheet
    wp_register_style(
        'nerdery-screen',
        NERDERY_THEME_PATH_URL . 'assets/styles/screen.css',
        array('nerdery-reset'),
        '1.0',
        'screen, projection'
    );
	
    wp_register_style(
        'nerdery-fonts',
        NERDERY_THEME_PATH_URL . 'assets/styles/fonts.css',
        array('nerdery-reset'),
        '1.0',
        'screen, projection'
    );

    // IE 9 Stylesheet
    wp_register_style(
        'nerdery-ie9',
        NERDERY_THEME_PATH_URL . 'assets/styles/ie9.css',
        array('nerdery-screen'),
        '1.0',
        'screen, projection'
    );

    // Conditional statements for IE stylesheets
    $wp_styles->add_data('nerdery-ie9', 'conditional', 'lte IE 9');

    // Queue the stylesheets. Note that because nerdery-screen was registered
    // with nerdery-reset as a dependency, it does not need to be enqueued here.
    wp_enqueue_style('nerdery-screen');
	wp_enqueue_style('nerdery-fonts');
    wp_enqueue_style('nerdery-ie9');
}
