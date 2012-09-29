<?php
/**
 * Mackenzie Pub Theme
 *
 * @category Mackenzie_Pub_Theme
 * @package Mackenzie_Pub_Theme
 * @subpackage Header
 * @author
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php wp_title(''); ?></title>

    <!-- META DATA -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="MSSmartTagsPreventParsing" content="true" />
    <meta http-equiv="imagetoolbar" content="no" />
    <!--[if IE]><meta http-equiv="cleartype" content="on" /><![endif]-->
    <!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->

    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

    <!-- ICONS -->
    <link rel="shortcut icon" type="image/ico" href="<?php echo NERDERY_THEME_PATH_URL; ?>assets/images/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo NERDERY_THEME_PATH_URL; ?>assets/images/apple-touch-icon.png" />

    <?php wp_head(); // Always have wp_head() just before the closing </head> ?>
</head>
<body <?php body_class(); ?>>
    <div class="page-wrapper">
        <header class="page-header">
        	<h1 class="header-logo"><a href="<?php echo site_url(); ?>">Mackenzie</a></h1>
			<nav>
				<?php wp_nav_menu(array(
					'menu'		=> 'primary-nav',
					'container'	=> false,
				)); ?>
			</nav>
        </header>
		
		<div class="page-content">