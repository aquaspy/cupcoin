<?php
/**
 * @package   admintoolswp
 * @copyright Copyright (c)2017-2022 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU GPL version 3 or later
 */

/*
Plugin Name: Admin Tools Professional for WordPress
Plugin URI: https://www.akeeba.com
Description: The complete security solution for WordPress
Version: 1.5.8
Author: Akeeba Ltd
Author URI: https://www.akeeba.com
Network: true
License: GPLv3
*/

// Make sure we are being called from WordPress itself
defined('WPINC') or die;
defined('ADMINTOOLSINC') or define('ADMINTOOLSINC', true);

if (!function_exists('admintoolswp_boot'))
{
	function admintoolswp_boot()
	{
		require_once dirname(__FILE__) . '/helpers/admintoolswp.php';
		require_once dirname(__FILE__) . '/helpers/admintoolswpupdater.php';

		$baseUrlParts = explode('/', plugins_url('', __FILE__));

		AdminToolsWP::$dirName          = end($baseUrlParts);
		AdminToolsWP::$fileName         = basename(__FILE__);
		AdminToolsWP::$absoluteFileName = __FILE__;

		if (!defined('ADMINTOOLSWP_PATH'))
		{
			define('ADMINTOOLSWP_PATH', WP_PLUGIN_DIR . '/'. AdminToolsWP::$dirName);
		}

		if (file_exists(ADMINTOOLSWP_PATH . '/version.php'))
		{
			require_once(ADMINTOOLSWP_PATH . '/version.php');
		}

		// Constant used for loading media assets
		define('ADMINTOOLSWP_MEDIAURL', plugins_url('', __FILE__));
	}
}

admintoolswp_boot();

// Register install/uninstall hooks
register_activation_hook(__FILE__, array('AdminToolsWP', 'install'));
register_deactivation_hook(__FILE__, array('AdminToolsWP', 'deactivate'));
register_uninstall_hook(__FILE__, array('AdminToolsWP', 'uninstall'));

// Register update hooks
add_filter ('pre_set_site_transient_update_plugins', array('AdminToolsWPUpdater', 'getupdates'), 10, 2);
add_filter ('plugins_api', array('AdminToolsWPUpdater', 'checkinfo'), 10, 3);
add_filter ('upgrader_pre_download', array('AdminToolsWPUpdater', 'addDownloadID'), 10, 3);
add_filter ('upgrader_package_options', array('AdminToolsWPUpdater', 'packageOptions'), 10, 2);
add_action ('upgrader_process_complete', array('AdminToolsWPUpdater', 'postUpdate'), 10, 2);
add_filter ('after_plugin_row_admintoolswp/admintoolswp.php', array('AdminToolsWPUpdater', 'updateMessage'), 10, 3);

// Register CRON hooks
add_action('admintoolswp_cron', array('AdminToolsWP', 'cron'));
add_action('admintoolswp_cron_hourly', array('AdminToolsWP', 'cronHourly'));
add_filter('cron_schedules', array('AdminToolsWP', 'cron_interval'));

// Register administrator plugin hooks
if (is_admin() && (!defined('DOING_AJAX') || !DOING_AJAX))
{
	add_action('admin_menu', array('AdminToolsWP', 'adminMenu'));
	add_action('network_admin_menu', array('AdminToolsWP', 'networkAdminMenu'));
	add_filter('set-screen-option', array('AdminToolsWP', 'set_option'), 10, 3);

	// Required to strip slashes
	add_action('plugins_loaded', array('AdminToolsWP', 'fakeRequest'), 1);

	// Required to enabled output buffer in Admin area
	add_action('init', array('AdminToolsWP', 'startAdminBuffer'), 2);
}
