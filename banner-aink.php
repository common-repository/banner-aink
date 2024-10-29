<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Plugin Name: Banner Aink
Plugin URI: http://www.classifindo.com/banner-aink/
Description: Show banner 468x60 with animation, like: fade, scrollUp, slideX, shuffle, cover, and more....
Author: Dannie Herdyawan a.k.a k0z3y
Version: 1.0
Author URI: http://www.classifindo.com/
*/


/*
   _____                                                 ___  ___
  /\  __'\                           __                 /\  \/\  \
  \ \ \/\ \     __      ___     ___ /\_\     __         \ \  \_\  \
   \ \ \ \ \  /'__`\  /' _ `\ /` _ `\/\ \  /'__'\        \ \   __  \
    \ \ \_\ \/\ \L\.\_/\ \/\ \/\ \/\ \ \ \/\  __/    ___  \ \  \ \  \
     \ \____/\ \__/.\_\ \_\ \_\ \_\ \_\ \_\ \____\  /\__\  \ \__\/\__\
      \/___/  \/__/\/_/\/_/\/_/\/_/\/_/\/_/\/____/  \/__/   \/__/\/__/

*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

global $BannerAink_path;
$BannerAink_path = get_settings('home').'/wp-content/plugins/'.dirname(plugin_basename(__FILE__));

require_once ('banner-aink_fields.php');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* When plugin is activated */
register_activation_hook(__FILE__,'install_BannerAink');
function install_BannerAink()
{
	global $wpdb, $app_abbr;

    $collate = '';
    if($wpdb->supports_collation()) {
        if(!empty($wpdb->charset)) $collate = "DEFAULT CHARACTER SET $wpdb->charset";
        if(!empty($wpdb->collate)) $collate .= " COLLATE $wpdb->collate";
    }

    $sql = "CREATE TABLE IF NOT EXISTS ". $wpdb->prefix . "banner_aink" ." (
		`id` int(10) NOT NULL AUTO_INCREMENT,
		`images` varchar(255) NOT NULL,
		`url` varchar(255) NOT NULL,
		`title` varchar(255) NOT NULL,
		`status` varchar(25) NOT NULL,
		`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
		`modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
        PRIMARY KEY id (`id`)) $collate;";
    $wpdb->query($sql);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* When plugin is deactivation*/
register_deactivation_hook( __FILE__, 'hapus_BannerAink' );
function hapus_BannerAink()
{
	/* Deletes the database field */
	global $wpdb, $options;
	$options = get_option('BannerAink_option');

    $sql = "DROP TABLE ". $wpdb->prefix . "banner_aink";
    $wpdb->query($sql);

	delete_option($options);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_action('admin_menu', 'BannerAink_admin_menu');
function BannerAink_admin_menu() {
	if((current_user_can('manage_options') || is_admin)) {
		global $BannerAink_path;
		add_object_page('Banner-Aink','Banner Aink',1,'Banner-Aink','BannerAink_page',$BannerAink_path.'/images/favicon.png');
		add_submenu_page('Banner-Aink','Banner Aink Settings','Settings',1,'Banner-Aink','BannerAink_page');
		add_submenu_page('Banner-Aink','Create New Banner','Create New Banner',1,'BannerAink_new','BannerAink_new');
	}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function BannerAink_page() {
	if (isset($_POST['save'])) {
		$options['BannerAink_enable']		= trim($_POST['BannerAink_enable'],'{}');
		$options['BannerAink_timeout']		= trim($_POST['BannerAink_timeout'],'{}');
		$options['BannerAink_animation']	= trim($_POST['BannerAink_animation'],'{}');
		update_option('BannerAink_option', $options);
		// Show a message to say we've done something
		echo '<div class="updated"><p>' . __("Save Changes") . '</p></div>';
	} else {		
		$options = get_option('BannerAink_option');
	}
	echo BannerAinkSettings();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function BannerAink_new()
{
	echo CreateNewBannerAink();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_action("plugins_loaded", "install_BannerAink");
add_action("wp_head", "BannerAink_head");

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function BannerAink_head()
{
	global $options, $BannerAink_path;
	$options = get_option('BannerAink_option');
///////////////////////////////////////////////////////////////////////////////

	echo '<!-- Banner Aink -->';
///////////////////////////////////////////////////////////////////////////////
/*	echo '<script type="text/javascript" language="javascript" src="'.$BannerAink_path.'/js/jquery.min.js"></script>'; */
	echo '<script type="text/javascript" language="javascript" src="'.$BannerAink_path.'/js/jquery.cycle.all.min.js"></script>';
	echo '<script type="text/javascript" language="javascript">
		$(function(){
			$("div#BannerAink").cycle({
				timeout: '.$options[BannerAink_timeout].',	// milliseconds between slide transitions
				fx: "'.$options[BannerAink_animation].'",	// choose your transition type
				pause: 1,									// true to enable "pause on hover"
			});	
		});
		</script>';
////////////////////////////////////////////////////////////////////////////////
	echo '<!-- Banner Aink -->';
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

### Function: Short Code For Inserting Polls Archive Into Page
add_shortcode('BannerAink', 'BannerAink_shortcode');
function BannerAink_shortcode($atts) {
	return BannerAink();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function BannerAink()
{
	global $wpdb, $options, $BannerAink_path, $userdata;
	get_currentuserinfo();
	$options = get_option('BannerAink_option');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$BannerAink = $wpdb->prepare("SELECT images, url, title "
	. "FROM ". $wpdb->prefix . "banner_aink "
	. "WHERE status='Active'"
	. "ORDER BY RAND()");

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<?php if($options[BannerAink_enable] == 'yes') : ?>

<?php /////////////////////////////////////////////////////////////////////////////// ?>

<style type="text/css">
div#BannerAink{
	padding:0;
	margin:0;
}
div#BannerAink a img{
	padding:0;
	margin:0;
	border:0;
}
</style>

<?php /////////////////////////////////////////////////////////////////////////////// ?>

<div align="center" style="padding:0;margin:0;clear:both;">
<?php /////////////////////////////////////////////////////////////////////////////// ?>
	<div id="BannerAink">
		<?php foreach ($wpdb->get_results($BannerAink) as $Banner) { ?>
			<a href="<?php echo $Banner->url; ?>" title="<?php echo $Banner->title; ?>" target="_blank">
				<img src="<?php echo $Banner->images; ?>" alt="<?php echo $Banner->title; ?>" />
			</a>
		<?php } ?>
	</div>
<?php /////////////////////////////////////////////////////////////////////////////// ?>
</div>

<?php endif; ?>

<?php /////////////////////////////////////////////////////////////////////////////// ?>

<?php } ?>
