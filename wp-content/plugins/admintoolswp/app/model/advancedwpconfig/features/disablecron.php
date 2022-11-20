<?php
/**
 * @package   admintoolswp
 * @copyright Copyright (c)2017-2022 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU GPL version 3 or later
 */

namespace Akeeba\AdminTools\Admin\Model\Advancedwpconfig\Features;

defined('ADMINTOOLSINC') or die;

class Disablecron extends Base
{
	protected $config_key    = 'disable_cron';

	protected $config_value  = false;

	protected $constant_name = 'DISABLE_WP_CRON';

	/**
	 * @inheritDoc
	 */
	public function getOptionValue()
	{
		if ($this->config_value)
		{
			return true;
		}

		return null;
	}
}