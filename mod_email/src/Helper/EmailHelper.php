<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_email
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\Email\Site\Helper;

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;

/**
 * Helper for mod_email
 *
 * @since  1.5
 */
class EmailHelper
{
	/**
	 * Gets the parameters for the email
	 *
	 * @param   mixed  &$params  The parameters set in the administrator section
	 *
	 * @return  mixed  &$params  The modified parameters
	 *
	 * @since   1.5
	 */
	public static function getParams(&$params)
	{
		$params->def('email', '');

		$email = $params->get('email');

		
		$params->set('email', $email);

		return $params;
	}
}
