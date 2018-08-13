<?php
/**
 * Simple Machines Forum (SMF)
 *
 * @package BBCode_Blink
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2015 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 1.1
 */ 

// If we have found SSI.php and we are outside of SMF, then we are running standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF')) // If we are outside SMF and can't find SSI.php, then throw an error
	die('<b>Error:</b> Cannot install - please verify you put this file in the same place as SMF\'s SSI.php.');
if (SMF == 'SSI')
	db_extend('packages');
	
// Define the hooks
$hook_functions = array(
	'integrate_bbc_codes' => 'overline_bbc_add_code',
	'integrate_bbc_buttons' => 'overline_bbc_add_button',
	'integrate_pre_include' => '$sourcedir/Subs-Overlinebbc.php',
);

// Add the hooks
foreach ($hook_functions as $hook => $function)
	add_integration_function($hook, $function);

if (SMF == 'SSI')
   echo 'Congratulations! You have successfully installed this mod!';

?>