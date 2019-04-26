<?php
// These functions are our integration hooks


function ilp_spellcheck(&$permissionGroups, &$permissionList, &$leftPermissionGroups, &$hiddenPermissions, &$relabelPermissions)
{	
	// Permissions hook, integrate_load_permissions, called from ManagePermissions.php
	// used to add new permisssions
	$permissionList['membergroup']['spellcheck_add'] = array(false, 'general', 'moderate_general');
}

function ia_spellcheck(&$actionArray)
{
	// Actions hook, integrate_actions, called from index.php
	// used to add new actions to the system
	$actionArray = array_merge($actionArray,array(
		'spellcheckadd' => array('Subs-Post.php', 'SpellCheckAdd'))
	);
}

?>