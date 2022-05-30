<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_email
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Filter\OutputFilter;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;

// Check if feed email has been empty
if (empty ($email))
{
	echo '<div>' . Text::_('MOD_FEED_ERR_NO_EMAIL') . '</div>';

	return;
}

if (!empty($email) && is_string($email))
{
    if ($params->get('add'))
		{
			echo JHtml::_('email.cloak', $email);
		}
	else{
        echo JHtml::_('email.cloak', $email, 0);
    }
}
