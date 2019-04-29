<?php
/**
 * @package    mod_panda_testimonials
 *
 * @author     Pavel <bamboo2panda@gmail.com>
 * @copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://pandatestimonials.2dpo.ru
 */

class ModPandaTestimonialsHelper
{
	/**
	 * @param $params
	 *
	 * @return mixed
	 *
	 * @since version
	 */
	public static function getSlides($params)
	{
		$slides = $params->get('slides');

		return $slides;
	}

	/**
	 * @param $params
	 *
	 * @return string
	 *
	 * @since version
	 */
	public static function getName($params)
	{
		$name = htmlspecialchars($params->get('name'));

		return $name;
	}

	/**
	 *
	 *
	 * @since version
	 */
	public static function getBootstrap()
	{

		$document = JFactory::getDocument();
		$document->addStyleSheet(JURI::root() . 'media/mod_panda_testimonials/assets/bootstrap/css/bootstrap.min.css');
		$document->addStyleSheet(JURI::root() . 'media/mod_panda_testimonials/assets/bootstrap/css/bootstrap-grid.min.css');
		$document->addStyleSheet(JURI::root() . 'media/mod_panda_testimonials/assets/bootstrap/css/bootstrap-reboot.min.css');
		$document->addScript(JURI::root(). 'media/mod_panda_testimonials/assets/bootstrap/js/bootstrap.bundle.js');
		$document->addScript(JURI::root(). 'media/mod_panda_testimonials/assets/bootstrap/js/bootstrap.js');
	}

	/**
	 *
	 *
	 * @since version
	 */
	public static function getUikit()
	{
		$document = JFactory::getDocument();
		$document->addStyleSheet(JURI::root() . 'media/mod_panda_testimonials/assets/uikit/css/uikit.css');
		$document->addScript(JURI::root(). 'media/mod_panda_testimonials/assets/uikit/js/uikit.min.js');
	}

	/**
	 *
	 * @return stdClass
	 *
	 * @since version
	 */
	public static function getBootstrapParams(){
		$css = new stdClass();
		$css->row = 'row';
		$css->col1 = 'col-1';
		$css->col2 = 'col-2';
		$css->col3 = 'col-3';
		$css->col4 = 'col-4';
		$css->col5 = 'col-5';
		$css->col6 = 'col-6';
		$css->col7 = 'col-7';
		$css->col8 = 'col-8';
		$css->col9 = 'col-9';
		$css->col10 = 'col-10';
		$css->col11 = 'col-11';
		$css->col12 = 'col-12';
		return $css;
	}

	public static function getUikitParams(){
		$css = new stdClass();
		$css->row = 'uk-grid';
		$css->col1 = 'uk-width-medium-1-10';
		$css->col2 = 'uk-width-medium-2-10';
		$css->col3 = 'uk-width-medium-3-10';
		$css->col4 = 'uk-width-medium-4-10';
		$css->col5 = 'uk-width-medium-5-10';
		$css->col6 = 'uk-width-medium-5-10';
		$css->col7 = 'uk-width-medium-5-10';
		$css->col8 = 'uk-width-medium-6-10';
		$css->col9 = 'uk-width-medium-7-10';
		$css->col10 = 'uk-width-medium-8-10';
		$css->col11 = 'uk-width-medium-9-10';
		$css->col12 = 'uk-width-medium-10-10';
		return $css;
	}

}