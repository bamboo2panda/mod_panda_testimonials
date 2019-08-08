<?php
/**
 * @package    mod_panda_testimonials
 *
 * @author     Pavel <bamboo2panda@gmail.com>
 * @copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://pandatestimonials.2dpo.ru
 */


defined('_JEXEC') or die;


$document = JFactory::getDocument();
// Load libs
$document->addStyleSheet(JURI::root(). 'media/mod_panda_testimonials/assets/owl.carousel.min.css');
$document->addStyleSheet(JURI::root() . 'media/mod_panda_testimonials/assets/owl.theme.default.min.css');
$document->addScript(JURI::root(). 'media/mod_panda_testimonials/owl.carousel.min.js');
echo '<h3 class="module-title">'.$params->get('slider_header').'</h3>';

echo '<div class="owl-carousel owl-theme">';

foreach ($slides as $slide){
	if ($slide->usephoto == 1) {
		echo '<div class="item">
                <div class="'.$css->row.'">
                    <div class="'.$css->col2.'">
                        <img  style="border:'.$params->get('photo_border_size').'px solid '.$params->get('photo_border_color').'; border-radius:'.$params->get('corner_radius').'%; width:'.$params->get('photo_size').'" src="' . $slide->photo . '" alt="' . $slide->name . '"/>
                                               
                    </div>
                    <div class="'.$css->col9.'">
                        ' . $slide->testimonial . '<br>
                    <strong>' . $slide->name . '<br>
                        
                    </strong>
                    </div>
                </div>
            </div>
                    
        ';
	}
	else{
		echo '<div class="item">
                <div class="'.$css->row.'">
                    <div class="'.$css->col12.'">
                        ' . $slide->testimonial . '<br>
                    <strong>' . $slide->name . '<br>
                        
                    </strong>
                    </div>
                </div>
            </div>
                    
        ';
	}
}
echo ('</div>');


$document->addScriptDeclaration('
    (function($){
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:10,
                nav:'.$params->get('show_arrows').',
                dots:'.$params->get('show_dots').',
                autoplay:'.$params->get('autoplay').',
                autoplayTimeout:'.$params->get('autoplay_speed').',
                responsive:{
                    0:{
                        items:'.$params->get('slides_per_page').'
                    }
                }
            });
        });
    })(jQuery);
');
