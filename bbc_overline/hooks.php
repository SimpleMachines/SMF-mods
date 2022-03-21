<?php

/**
 * @package BBCode Overline
 * @author SMF Customization Team (www.simplemachines.org)
 * @license BSD 3-clause
 * @version 1.1.1
 */

// If we have found SSI.php and we are outside of SMF, then we are running standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF')) // If we are outside SMF and can't find SSI.php, then throw an error
	die('<b>Error:</b> Cannot install - please verify you put this file in the same place as SMF\'s SSI.php.');

global $context;

if (SMF == 'SSI')
	db_extend('packages');

// Define the hooks
$hook_functions = array(
	'integrate_bbc_codes' => 'overline_bbc_add_code',
	'integrate_bbc_buttons' => 'overline_bbc_add_button',
	'integrate_pre_include' => '$sourcedir/Subs-Overlinebbc.php',
);

// Adding or removing them?
if (!empty($context['uninstalling']))
	$call = 'remove_integration_function';
else
	$call = 'add_integration_function';

// Do the deed
foreach ($hook_functions as $hook => $function)
	$call($hook, $function);

if (SMF == 'SSI')
   echo 'Congratulations! You have successfully installed this mod!';

?>