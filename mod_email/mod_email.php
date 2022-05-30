<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wrapper
 *
 * @copyright   (C) 2005 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\Email\Site\Helper\EmailHelper;

$params = EmailHelper::getParams($params);

$load        = $params->get('load');
$email       = htmlspecialchars($params->get('email', ''), ENT_COMPAT, 'UTF-8');
$ititle      = $module->title;
$id          = $module->id;

require ModuleHelper::getLayoutPath('mod_email', $params->get('layout', 'default'));
