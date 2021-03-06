<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Title           External CSS and Javascript mapping.
 *
 * @package        
 * Location        application/config
 *
 * @author         asanka - <<hayeshais[at]gmail[dot]com>>
 * @copyright      
 *
 * created on      23-08-2011, 02:30AM by hayesha
 * updated on      dd-mm-yyy, hh:mm by {name}
 *
 * Description     Module level external CSS and Javascript files.
 * */


/*
|--------------------------------------------------------------------------
| LOAD HOME SCRIPTS
|--------------------------------------------------------------------------
|
*/

$config['css-home']	= array('home.css');
$config['css-home-3rd'] = array('jquery/ui/jquery-ui.css', 'jquery/impromptu/jquery-impromptu.css');
$config['css-home-ie'] = array();
$config['css-home-print'] = array('print.css');
$config['js-home']	= array('window.orientation.js');
$config['js-home-3rd']	= array('jquery/ui/jquery-ui.js', 'jquery/jquery.validate.js', 'jquery/impromptu/jquery-impromptu.js');
$config['js-home-ie'] = array();
$config['js-home-scripts'] = array('action.js');
$config['js-home-topjs']	= array('modernizr-2.6.2.min.js');
$config['js-home-external'] = array('http://www.google.com/jsapi');



/* End of file scriptfiles.php */
/* Location: ./application/config/scriptfiles.php */
