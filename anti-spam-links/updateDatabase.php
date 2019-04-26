<?php
	global $db_server, $db_user, $db_passwd;
	global $db_name, $db_connection;

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');

// If it's executed from the Packages/tmp dir.
elseif (file_exists(dirname(__FILE__) . '/../../SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/../../SSI.php');

// Add the Anti-Spam-Links Mod settings.
updateSettings(array(
	'anti_spam_links_nolinks' => 0,
	'anti_spam_links_newbielinks' => 0,
	'anti_spam_links_nofollowlinks' => 0,
	'anti_spam_links_guests' => 0,
));

?>