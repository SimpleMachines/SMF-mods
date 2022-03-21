<?php

/**
 * @package Leet Mod
 * @author SMF Customization Team (www.simplemachines.org)
 * @license BSD 3-clause
 * @version 1.2
 */

if (!defined('SMF'))
	die('Hacking attempt...');

class Leet
{
	public static function member_context(array &$memberContext, int $user) : void
	{
		global $txt, $user_profile;

		if (empty($user))
			return;

		$profile = $user_profile[$user];

		$memberContext[$user]['posts'] = $profile['posts'] > 500000 ? $txt['geek'] : ($profile['posts'] == 1337 ? 'leet' : comma_format($profile['posts']));
	}
}