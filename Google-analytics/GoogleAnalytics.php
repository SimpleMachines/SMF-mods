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
	<script type="text/javascript">
		(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

		ga(\'create\', \'' . $modSettings['googleAnalyticsCode'] . '\', \'' . $_SERVER['SERVER_NAME'] . '\');
		ga(\'send\', \'pageview\');
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
		$txt['googleAnalyticsTitle'],
		array('text', 'googleAnalyticsCode', 'subtext' => $txt['googleAnalyticsCode_desc'], 'postinput' => $txt['googleAnalyticsCode_link']),
		'',
	));
}
