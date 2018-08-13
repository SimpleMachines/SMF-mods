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

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
{
	$ssi = true;
	require_once(dirname(__FILE__) . '/SSI.php');
}
elseif (!defined('SMF'))
	exit('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

add_integration_function('integrate_pre_include', '$sourcedir/GoogleAnalytics.php');
add_integration_function('integrate_load_theme', 'google_analytics_load_theme');
add_integration_function('integrate_general_mod_settings', 'google_analytics_general_mod_settings');

if (!empty($ssi))
	echo 'Database installation complete!';
