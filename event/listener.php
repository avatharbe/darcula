<?php
/**
 * Darcula ACP Theme - Event Listener
 *
 * @package   avathar/darcula
 * @copyright (c) 2026 Andreas Vandenberghe
 * @license   GPL-2.0-only
 */

namespace avathar\darcula\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var string */
	protected $root_path;

	/** @var string */
	protected $php_ext;

	public function __construct(\phpbb\template\template $template, string $root_path, string $php_ext)
	{
		$this->template = $template;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.adm_page_header' => 'inject_darcula_css',
		];
	}

	public function inject_darcula_css($event)
	{
		$this->template->assign_vars([
			'T_DARCULA_PATH' => $this->root_path . 'ext/avathar/darcula/styles',
		]);
	}
}
