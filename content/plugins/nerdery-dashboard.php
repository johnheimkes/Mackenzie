<?php
/*
Plugin Name: Nerdery Dashboard
Plugin URI: 
Description: Custom Nerdery dashboard widgets
Version: 1
Author: The Nerdery
Author URI: http://nerdery.com
License: GPL2

    Copyright 2010 The Nerdery

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/
add_action('wp_dashboard_setup', 'addDashboardWidgets' );
function addDashboardWidgets(){
	global $wp_meta_boxes;
	if( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] ) unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
  if( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] ) unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
	if( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] ) unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );
  wp_add_dashboard_widget( 'sierra_bravo_custom_1', __( 'Server Info' ), 'a_customDashboard3' );	
	wp_add_dashboard_widget( 'sierra_bravo_custom_2', __( 'The Nerdery Blog' ), 'a_customDashboard2' );
  wp_add_dashboard_widget( 'sierra_bravo_custom_3', __( 'The Nerdery Interactive Labs' ), 'a_customDashboard1' );
	rsort($wp_meta_boxes['dashboard']['normal']['core']);
}
function a_customDashboard1(){
	?>
			<div style="float: left; padding-right: 20px; line-height: 1.2em">
			 HEADQUARTERS<br />
			 9555 James Ave S<br />
			 Suite 245<br />
			 Bloomington, MN 55431<br />
			</div>
			<div style="float: left; line-height: 1.2em">
			 CHICAGO<br />
			 316 N Elizabeth St.<br />
			 Chicago, IL 60607 <br />
			</div>  
			<div style="clear:both"></div>			
			
	    <ul style="margin-top: 20px;">
	        <li><strong>Phone:</strong> (877) 664.NERD</li>
	        <li><strong>Email:</strong> <a href="mailto:&#x69;&#x6E;&#x66;&#x6F;&#x40;&#x6E;&#x65;&#x72;&#x64;&#x65;&#x72;&#x79;&#x2E;&#x63;&#x6F;&#x6D;">info@nerdery.com</a></li>
	        <li><strong>Fax:</strong> (952) 948.1611 </li>
					<li><strong>Website:</strong> <a href="http://nerdery.com" target="_blank">http://nerdery.com</a></li>
	    </ul>
	<?php
}
function a_customDashboard2(){
		include_once(ABSPATH . WPINC . '/feed.php');
		$rss = fetch_feed('http://blog.nerdery.com?feed=rss2');
		if (!is_wp_error( $rss ) ) :
		  $maxitems = $rss->get_item_quantity(5); 
		  $rss_items = $rss->get_items(0, $maxitems); 
		endif;
		?>
		<div class="rss-widget">
			<ul>
			    <?php if ($maxitems == 0) echo '<li>No items.</li>';
			    else
			    foreach ( $rss_items as $item ) : ?>
			    <li>
			        <a href='<?php echo $item->get_permalink(); ?>'
			        title='Read more' target='_blank' class="rsswidget">
			        <?php echo $item->get_title(); ?></a> <span class="rss-date"><?php print str_replace(' ', '&nbsp;', $item->get_date('F j, Y') ); ?></span>
							<div class="rssSummary"><?php print get_excerpt($item->get_content(), $item->get_permalink()); ?></div>
			    </li>
			    <?php endforeach; ?>
			</ul>
		</div>
	<?php
}

function a_customDashboard3(){
    function mysql_version () {
       $output = shell_exec('mysql -V');
       preg_match('@[0-9]+\.[0-9]+\.[0-9]+@', $output, $version);
       return $version[0];
    }
    
    function server_info() {
       $ver = split("[/ ]",$_SERVER['SERVER_SOFTWARE']);
       $apver = "$ver[1] $ver[2]";
       return $apver;
    }
    
    function option_getset ( $option_name, $option_value ) {
       //if the value hasn't previously been set, then set it
       if (!get_option($option_name)) {
           update_option( $option_name, $option_value );           
       } 
       return(get_option($option_name));
    }
    
    $current_php_version = phpversion();
    $current_mysql_version = mysql_version();
    $current_apache_version = server_info();
    
    ?>
    <div style="width: 40%; margin: 3%; padding-right: 3%; float: left; display: inline; border-right: 1px solid #DFDFDF">
        <h5 style="margin: 0 0 .5em 0; font-size: 12px">Current Server Info:</h5>
        <p><?php
        echo "<strong>PHP Version:</strong> " . $current_php_version . "<br />";
        echo "<strong>MySql Version:</strong> " . $current_mysql_version . "<br />";
        echo "<strong>Apache Version:</strong> " . $current_apache_version . "<br />";
        ?></p>
    </div>
    <div style="width: 40%; margin: 3%; float: left">
        <h5 style="margin: 0 0 .5em 0; font-size: 12px">Initial Server Info:</h5>
        <p><?php 
        echo "<strong>PHP Version:</strong> " . option_getset( 'nerdery_config_phpversion', $current_php_version ) . "<br />";
        echo "<strong>MySql Version:</strong> " . option_getset( 'nerdery_config_mysqlversion', $current_mysql_version ) . "<br />";
        echo "<strong>Apache Version:</strong> " . option_getset( 'nerdery_config_apacheversion', $current_apache_version ) . "<br />";
        ?></p>
    </div>
    <div style="clear: left"></div><?
}

function get_excerpt( $text, $permalink )
{
    $text = preg_replace(
        array(
          // Remove invisible content
            '@<head[^>]*?>.*?</head>@siu',
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
          // Add line breaks before and after blocks
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
        ),
        array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$0",
        ),
        $text );
				$text = strip_tags( $text);
				$text = substr($text, 0, 360);
				$lastSpace = strrpos($text, " ");
				$text = substr($text, 0 , $lastSpace);
				$text .= '<a href="'.$permalink.'" target="_blank" title="Read more"> [&#0133;]</a>';
    return $text;
}