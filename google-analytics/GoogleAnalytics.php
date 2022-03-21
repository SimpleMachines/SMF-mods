<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package Google Analytics Code
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2022 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 1.6
 */

if (!defined('SMF'))
	die('Hacking attempt...');

/**
 * google_analytics_load_theme
 *
 * Called by integrate_load_theme hook. Appends the JS code to $context['html_headers'] which will be rendered by the theme.
 * 
 * @return void.
 */
function google_analytics_load_theme()
{
	global $context, $modSettings;

	if (!empty($modSettings['googleAnalyticsCode']) && !isset($_REQUEST['xml']))
	{
		$context['html_headers'] .= '
		<script async src="https://www.googletagmanager.com/gtag/js?id= \'' . $modSettings['googleAnalyticsCode'] . '\'"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag(\'js\', new Date());

			gtag(\'config\',  \'' . $modSettings['googleAnalyticsCode'] . '\');
		</script>';
	}
}

/**
 * google_analytics_general_mod_settings
 *
 * Called by integrate_general_mod_settings hook. Appends a new setting in the admin panel.
 * @param array $config_vars the entire config array at the moment this function was called.
 * @return void.
 */
function google_analytics_general_mod_settings(&$config_vars)
{
	global $txt;

	loadLanguage('GoogleAnalytics');
	$config_vars = array_merge($config_vars, array(
		array('title', 'googleAnalyticsTitle'),
		array('text', 'googleAnalyticsCode', 'subtext' => $txt['googleAnalyticsCode_desc'], 'postinput' => $txt['googleAnalyticsCode_link']),
		'',
	));
}
