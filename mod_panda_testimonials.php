<?php
/**
 * @package    mod_panda_testimonials
 *
 * @author     Pavel <bamboo2panda@gmail.com>
 * @copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://pandatestimonials.2dpo.ru
 */


//use Joomla\CMS\Helper\ModuleHelper;
require_once __DIR__ . '/helper.php';

defined('_JEXEC') or die;

$slides = ModPandaTestimonialsHelper::getSlides($params);
$name = ModPandaTestimonialsHelper::getName($params);

// Load libraries
switch ($params->get('lib'))
{
	case 'bootstrap':
		ModPandaTestimonialsHelper::getBootstrap($params->get('bootstarp'));
		break;
	case 'uikit':
		ModPandaTestimonialsHelper::getUikit($params->get('uikit'));
		break;
	case 'nolib':
		break;
	default:
}

//Choose css grid view
switch ($params->get('css'))
{
	case 'bootstrap':
		$css = ModPandaTestimonialsHelper::getBootstrapParams();
		break;
	case 'uikit':
		$css = ModPandaTestimonialsHelper::getUikitParams();
		break;
	default:
		$css = ModPandaTestimonialsHelper::getBootstrapParams();
}

require JModuleHelper::getLayoutPath('mod_panda_testimonials', $params->get('layout', 'default'));
