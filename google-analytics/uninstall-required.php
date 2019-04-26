<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package Google Analytics Code
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2015 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 1.5.1
 */

// If SSI.php is in the same place as this file, and SMF isn't defined...
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');

// Hmm... no SSI.php and no SMF?
elseif (!defined('SMF'))
	die('<b>Error:</b> Cannot uninstall - please verify you put this in the same place as SMF\'s index.php.');

remove_integration_function('integrate_pre_include', '$sourcedir/GoogleAnalytics.php');
remove_integration_function('integrate_load_theme', 'google_analytics_load_theme');
remove_integration_function('integrate_general_mod_settings', 'google_analytics_general_mod_settings');
