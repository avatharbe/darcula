<?php
/**
 * Darcula ACP Theme for phpBB
 *
 * @package   avathar/darcula
 * @copyright (c) 2026 Andreas Vandenberghe
 * @license   GPL-2.0-only
 */

namespace avathar\darcula;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		return phpbb_version_compare(PHPBB_VERSION, '3.3.0', '>=');
	}
}
